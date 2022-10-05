require('./bootstrap');

const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
    
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon\
    if (this.classList.contains('fa-eye')){
        this.classList.remove('fa-eye');
        this.classList.add('fa-eye-slash');
    } else {
        this.classList.remove('fa-eye-slash');
        this.classList.add('fa-eye');
    }
    
});