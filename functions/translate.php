<?php
if (isset($_GET["lang"])) {
    $GLOBALS['langue']  = $_GET["lang"];
} else {
    $GLOBALS['langue']  = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}
function __($string)
{
    $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if (isset($_GET["lang"]))
        $langue = $_GET["lang"];
    else{
        if($browserLang == "fr" || $browserLang == "en" )
            $langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        else
            $langue = "en";
    }

    if ($langue == 'fr') return $string;
    $chaineRetour = "";

    $dict = file_get_contents("langue/$langue.json");

    $decode = json_decode($dict);

    if (isset($decode->$string)) {
        $chaineRetour = $decode->$string;
    } else {
        $chaineRetour = $string;
    }

    return $chaineRetour;
}