document.getElementById('btn__register').addEventListener('click', register);
document.getElementById('btn__star-session').addEventListener('click', starSession);
window.addEventListener('resize', widthPage);

//

let containerLoginRegister = document.querySelector('.container__login--register');
let formLogin = document.querySelector('.form__login');
let formRegister = document.querySelector('.form__register');
let boxBackLogin = document.querySelector('box__back--login');
let boxBackRegister = document.querySelector('.box__back--register');

function widthPage() {
    if (window.innerWidth > 850)
    {
        boxBackLogin.style.display = 'block';
        boxBackRegister.style.display = 'block';
    }
    else
    {
        boxBackRegister.style.display = 'block';
        boxBackRegister.style.opacity = '1';
        boxBackLogin.style.display = 'none';
        formLogin.style.display = 'block';
        formRegister.style.display = 'none';
        containerLoginRegister.style.left = '0px';
    }
}

widthPage();

function starSession() {

    if (window.innerWidth > 850)
    {
        formRegister.style.display = 'none';
        containerLoginRegister.style.left = '10px';
        formLogin.style.display = 'block';
        boxBackRegister.style.opacity = '1';
        boxBackLogin.style.opacity = '0';
    }
    else
    {
        formRegister.style.display = 'none';
        containerLoginRegister.style.left = '0px';
        formLogin.style.display = 'block';
        boxBackRegister.style.display = 'block';
        boxBackLogin.style.display = 'none';
    }
}

function register() {

    if (window.innerWidth > 850)
    {
    formRegister.style.display = 'block';
    containerLoginRegister.style.left = '410px';
    formLogin.style.display = 'none';
    boxBackRegister.style.opacity = '0';
    boxBackLogin.style.opacity = '1';
    }
    else
    {
        formRegister.style.display = 'block';
        containerLoginRegister.style.left = '0px';
        formLogin.style.display = 'none';
        boxBackRegister.style.display = 'none';
        boxBackLogin.style.display = 'block';
        boxBackLogin.style.opacity = '1';
    }

}