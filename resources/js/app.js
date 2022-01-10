require('bootstrap');

const alert = document.querySelector('.alert');

setTimeout(() => {
    alert.classList.add('d-none');
}, 3000);
