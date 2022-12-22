let name1 = document.forms['form']['name1'];
let password = document.forms['form']['password'];

let name1_error = document.getElementById('name1_error');
let password_error = document.getElementById('password_error');

name1.addEventListener('textInput', name1_Verify);
password.addEventListener('textInput', password_Verify);

function validated(){
    if(name1.value.length < 9){
        name1.style.border  = "1px solid red";
        name1_error.style.display = "block"
        name1.focus();
        return false 
    }
    if(password.value.length < 6){
        password.style.border  = "1px solid red";
        password_error.style.display = "block"
        password.focus();
        return false 
    }
}

function name1_Verify(){
    if(name1.value.length >= 8){
        name1.style.border  = "1px solid silver";
        name1_error.style.display = "none"
        return true ;
    }
}
function password_Verify(){
    if(password.value.length >= 5){
        password.style.border  = "1px solid silver";
        password_error.style.display = "none"
        return true ;
    }
}