const loginBtn = document.getElementById("login");
const signUpBtn = document.getElementById("signup");

const loginForm = document.querySelector(".login-form");
const signUpForm = document.querySelector(".signup-form");
const line = document.querySelector(".line");

const showLogin = () => {
signUpForm.classList.add('hide');
loginForm.classList.remove('hide');
if(loginBtn.classList.contains('active') !== true){
loginBtn.classList.add('active');
signUpBtn.classList.remove('active');
line.style.left = '0%';
line.style.width = '85px';
}
}

const shopSignUp = () => {
loginForm.classList.add('hide');
signUpForm.classList.remove('hide');
loginBtn.classList.remove('active');
signUpBtn.classList.add('active');
line.style.left = 'calc(100% - 100px)';
line.style.width = '95px';
}

loginBtn.addEventListener('click',showLogin);
// signUpBtn.addEventListener('click',shopSignUp);