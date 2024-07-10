import os
import re
import json
import requests

def find_php_files():
    php_files = []
    for root, _, files in os.walk('.'):
        for file in files:
            if file.endswith('.php') and (root.startswith('./components') or root == '.'):
                php_files.append(os.path.join(root, file))
    return php_files

def extract_translatable_strings(file_path):
    with open(file_path, 'r', encoding='utf-8') as file:
        content = file.read()

    # Utiliser l'expression régulière du script bash pour capturer les chaînes
    pattern = re.compile(r"(?<=__\(')[^']+(?=')|(?<=__\(\")[^\"]+(?=\")")
    matches = pattern.findall(content)
    return matches

def translate(text, api_key):
    # URL de l'API de traduction de DeepL
    url = "https://api-free.deepl.com/v2/translate"
    params = {
        "auth_key": api_key,
        "text": text,
        "source_lang": "FR",
        "target_lang": "EN"
    }
    response = requests.post(url, data=params)
    response.raise_for_status()
    result = response.json()
    return result["translations"][0]["text"]

def main():
    # Lire les informations de configuration DeepL à partir du fichier de configuration
    config_path = 'scripts/config.json'
    if not os.path.exists(config_path):
        print(f"Configuration file {config_path} not found.")
        return

    with open(config_path, 'r', encoding='utf-8') as config_file:
        config = json.load(config_file)
        deepl_config = config.get("deepl", {})
        api_key = deepl_config.get("api_key")

    if not api_key:
        print("DeepL API key not found in configuration.")
        return

    php_files = find_php_files()
    print("PHP files found:")
    for php_file in php_files:
        print(php_file)

    translations = {}

    for php_file in php_files:
        translatable_strings = extract_translatable_strings(php_file)
        print(f"Strings found in {php_file}: {translatable_strings}")
        for string in translatable_strings:
            if string not in translations:
                translation = translate(string, api_key)  # Appel à l'API de DeepL pour la traduction
                translations[string] = translation

    if not os.path.exists('langue'):
        os.makedirs('langue')

    # Écrire les traductions dans le fichier en.json
    with open('langue/en.json', 'w', encoding='utf-8') as json_file:
        json.dump(translations, json_file, ensure_ascii=False, indent=4)

    print(f'Translations written to langue/en.json with {len(translations)} entries.')

if __name__ == "__main__":
    main()
