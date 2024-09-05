const container = document.getElementById('container');
const signInButton = document.getElementById('signInButton');
const signUpButton = document.getElementById('signUpButton');

// Toggle to Sign Up
signUpButton.addEventListener('click', () => {
    container.classList.add("active");
});

// Toggle to Sign In
signInButton.addEventListener('click', () => {
    container.classList.remove("active");
});
