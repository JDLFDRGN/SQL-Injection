let submitPassword = document.querySelector('#submit-password');
let reenterPassword = document.querySelector('#submit-reenter-password');
let submitCheckbox = document.querySelector('#submit-checkbox');

function navigate(url){
    location.href = url;
}

function passwordVisibility(){
    if(submitCheckbox.checked){
        submitPassword.type = 'text';
        reenterPassword.type = 'text';
    }else{
        submitPassword.type = 'password';
        reenterPassword.type = 'password';
    }
}
function checkPage(){
    if(location.href.includes('signup.php')) submitCheckbox.addEventListener('change', passwordVisibility)
}

document.addEventListener('DOMContentLoaded',checkPage())


