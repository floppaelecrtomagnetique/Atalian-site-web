function changeLanguage(lang) {
    var fr = document.getElementById("fr");
    var en = document.getElementById("en");
    if (lang == "en") {
        fr.style.display = "none";
        en.style.display = "block";
        setCookie("language", "en", 365);
    } else if (lang == "fr") {
        fr.style.display = "block";
        en.style.display = "none";
        setCookie("language", "fr", 365);
    }
}

// Get the current language from the cookie
var language = getCookie("language");

// If the cookie doesn't exist, set the default language to French
if (!language) {
    language = "fr";
    setCookie("language", language, 365);
}

// Set the language of the website based on the cookie
if (language === "en") {
    fr = document.getElementById("fr");
    en = document.getElementById("en");
    
    fr.style.display = "none";
    en.style.display = "block";
} else {
    fr = document.getElementById("fr");
    en = document.getElementById("en");

    fr.style.display = "block";
    en.style.display = "none";
    // Set the website to French
}

// Function to get a cookie by name
function getCookie(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length == 2) return parts.pop().split(";").shift();
}

// Function to set a cookie with a name, value, and expiration date
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}