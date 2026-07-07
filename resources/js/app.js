import './bootstrap';
// ----------------BURGERA IZVĒLNE----------------------


const burgerBtn = document.getElementById('burgerBtn');
const navLinks = document.getElementById('navLinks');

// Pārslēgt navigācijas saites un burgera ikonu

burgerBtn.addEventListener('click', () => {
    burgerBtn.classList.toggle('open');
    navLinks.classList.toggle('open');
});

const themeToggleBtn = document.getElementById('themeToggle');
const currentTheme = localStorage.getItem('theme');


// -------------------TĒMAS IZVĒLE--------------------


// Iestatīt sākotnējo tēmu, ja tā ir saglabāta

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);
}

// Pārslēgt tēmu un saglabāt izvēli localStorage

themeToggleBtn.addEventListener('click', () => {
    let theme = document.documentElement.getAttribute('data-theme');
    
    if (theme === 'dark') {
        document.documentElement.removeAttribute('data-theme'); 
        localStorage.setItem('theme', 'light');
    } else {
        document.documentElement.setAttribute('data-theme', 'dark'); 
        localStorage.setItem('theme', 'dark');
    }
});


// --------------------VALODAS IZVĒLE-------------------


const langButtons = document.querySelectorAll('.toggleLanguage');

// Ielādēt un piemērot tulkojumus no JSON faila

async function loadLocale(lang) {
    const response = await fetch(`locales/${lang}.json`);
    if (!response.ok) throw new Error(`Cannot load locale ${lang}`);
    return response.json();
}

// Piemērot tulkojumus lapas elementiem

function applyTranslations(translations) {
    // Iestatīt lang atribūtu HTML elementam, lai atbilstu izvēlētajai valodai
    document.documentElement.lang = translations.lang || document.documentElement.lang;

    document.querySelector('[data-translate="navHome"]').textContent = translations.navHome;
    document.querySelector('[data-translate="navProfile"]').textContent = translations.navProfile;
    document.querySelector('[data-translate="navProducts"]').textContent = translations.navProducts;
    document.querySelector('[data-translate="navCart"]').textContent = translations.navCart;
    document.querySelector('[data-translate="navLogout"]').textContent = translations.navLogout;
    document.querySelector('[data-translate="heading"]').textContent = translations.heading;
    document.querySelector('[data-translate="text"]').textContent = translations.text;
}

// Atjaunināt valodas pogu stāvokli

function updateLangButtons(lang) {
    langButtons.forEach(btn => {
        btn.classList.toggle('active', btn.id === lang);
    })
}

// Iestatīt valodu, ielādējot tulkojumus un saglabājot izvēli localStorage

async function setLanguage(lang) {
    try {
        const translations = await loadLocale(lang);
        applyTranslations(translations);
        updateLangButtons(lang);
        localStorage.setItem('lang', lang);
    } catch (error) {
        console.error('Language load failed:', error);
    }
}

// Pievienot notikumu klausītājus valodas pogām

langButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        const lang = btn.id;
        setLanguage(lang);
    })
})

const savedLang = localStorage.getItem('lang') || 'lv';
setLanguage(savedLang);
