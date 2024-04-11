document.addEventListener('DOMContentLoaded', function () {
    var loginButton = document.getElementById('sign-in-btn');
    loginButton.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent the default form submission
        login();
    });
});

function login() {
    // Hardcoded credentials for demonstration
    var correctUsername = 'admin';
    var correctPassword = 'admin123';
    
    // User input
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    
    // Element to display login messages
    var messageElement = document.getElementById('login-message');

    // Validate credentials
    if (username === correctUsername && password === correctPassword) {
        // If credentials are correct, redirect to home.html or another page
        window.location.href = 'index.html'; // Redirect to the home page on successful login
    } else {
        // If credentials are incorrect, display an error message on the webpage
        messageElement.textContent = 'Incorrect username or password.';
        messageElement.style.color = 'red'; // Optional: style the message
    }
}
