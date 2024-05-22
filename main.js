window.addEventListener('scroll', () => {
    document.querySelector('nav').classList.toggle
    ('window_scroll',window.scrollY > 0)
})

const logBox = document.querySelector('.log-box');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click', () => {
    logBox.classList.add('active');
});

loginLink.addEventListener('click', () => {
    logBox.classList.remove('active');
});