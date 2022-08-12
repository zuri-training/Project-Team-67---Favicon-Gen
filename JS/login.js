
//Vaildation code for inputs

var username = document.forms['form'][username];
var password = document.forms['form'][user-pass];

var name_error = document.getElementById(name_error);
var pass_error = document.getElementById(pass_error);
var submit_error = document.getElementById(submit_error);

function validated(){
    if(username.value.length < 9){
        username.style.border = "1px solid red";
        name_error.style.display = "block";
        username.focus();
        return false;

    }

}