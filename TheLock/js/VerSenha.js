const password = document.getElementById('inputsenha');
const icon = document.getElementById('iconsenha');

function showHide(){
    if(password.type === 'password'){
        password.setAttribute('type', 'text');
        icon.classList.add('hide');
    }
    else{
        password.setAttribute('type', 'password');
        icon.classList.remove('hide');
    }
}