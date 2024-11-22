// Idioma actual (predeterminado: español)
let currentLanguage = "es";

// Función para cargar el archivo JSON
async function loadTranslations() {
	try {
		const response = await fetch("translations.json");
		const translations = await response.json();
		return translations;
	} catch (error) {
		console.error("Error loading translations:", error);
		return null;
	}
}

// Función para aplicar las traducciones al documento
async function applyTranslations() {
	const translations = await loadTranslations();
	if (!translations) return;

	// Actualizar los textos visibles según el idioma
	Object.keys(translations[currentLanguage]).forEach(id => {
		const element = document.getElementById(id);
		if (element) {
			// Comprobar si el elemento tiene un icono y no debe ser traducido
			if (element.tagName === 'A' && element.querySelector('i')) {
				// Si contiene un icono, solo cambiar el texto visible, no el icono
				element.textContent = translations[currentLanguage][id];
			} else {
				// Actualizar el texto visible
				element.textContent = translations[currentLanguage][id];
			}
		}
	});

	// Actualizar los placeholders
	const elementsWithPlaceholders = document.querySelectorAll("[placeholder][data-placeholder-key]");
	elementsWithPlaceholders.forEach(el => {
		const placeholderKey = el.getAttribute("data-placeholder-key");
		if (placeholderKey && translations[currentLanguage][placeholderKey]) {
			el.setAttribute("placeholder", translations[currentLanguage][placeholderKey]);
		}
	});

	// Cambiar el texto del botón de idioma
	const languageButton = document.getElementById("languageText");
	if (languageButton) {
		languageButton.textContent = translations[currentLanguage].languageButton;
	}
}

// Función para cambiar el idioma
function switchLanguage() {
	// Alternar el idioma
	currentLanguage = currentLanguage === "es" ? "en" : "es";

	// Guardar el idioma seleccionado en localStorage
	localStorage.setItem("selectedLanguage", currentLanguage);

	// Aplicar las traducciones
	applyTranslations();
}

// Evento al cargar la página
document.addEventListener("DOMContentLoaded", async () => {
	// Cargar el idioma guardado, si existe
	const savedLanguage = localStorage.getItem("selectedLanguage");
	if (savedLanguage) {
		currentLanguage = savedLanguage;
	}

	// Aplicar las traducciones iniciales
	await applyTranslations();

	// Agregar el evento al botón
	const languageButton = document.getElementById("languageButton");
	if (languageButton) {
		languageButton.addEventListener("click", switchLanguage);
	}
});
