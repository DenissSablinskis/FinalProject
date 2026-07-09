import './bootstrap';

// ----------------BURGERA IZVĒLNE----------------------

const burgerBtn = document.getElementById('burgerBtn');
const navLinks = document.getElementById('navLinks');

// Pārslēgt navigācijas saites un burgera ikonu

burgerBtn.addEventListener('click', () => {
    burgerBtn.classList.toggle('open');
    navLinks.classList.toggle('open');
});


// -------------------TĒMAS IZVĒLE--------------------

const themeToggleBtn = document.getElementById('themeToggle');
const currentTheme = localStorage.getItem('theme');

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
