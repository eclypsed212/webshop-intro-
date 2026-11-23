const loginSection = document.querySelector("#login-section");
const registerSection = document.querySelector("#register-section");
const showRegister = document.querySelector("#show-register");
const showLogin = document.querySelector("#show-login");
showRegister.addEventListener("click", function(event){
    event.preventDefault();
    loginSection.hidden = true;
    registerSection.hidden = false; 
});

showLogin.addEventListener("click", function(event){
    event.preventDefault();
    registerSection.hidden = true;
    loginSection.hidden = false;

});
