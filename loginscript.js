function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    
    if (username.trim() === '' || password.trim() === '') {
        alert("Please enter both username and password.");
        return false; // Prevent form submission
    }
    
    // If both username and password are provided, allow form submission
    return true;
}

document.addEventListener("DOMContentLoaded", function() {
    // Get the login form and sign up button
    var loginForm = document.getElementById("loginForm");
    var signUpButton = document.querySelector(".signup-button");

    // Disable login button after click
    loginForm.addEventListener("submit", function() {
        var loginButton = this.querySelector("button[type=submit]");
        loginButton.disabled = true;
    });

    // Disable sign up button after click
    signUpButton.addEventListener("click", function() {
        this.disabled = true;
    });
});

// Assuming username and password are retrieved from form inputs
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;

// Store login information in local storage
localStorage.setItem("username", username);
localStorage.setItem("password", password);

// Retrieve stored login information
var storedUsername = localStorage.getItem("username");
var storedPassword = localStorage.getItem("password");

// Populate login form with stored information
document.getElementById("username").value = storedUsername;
document.getElementById("password").value = storedPassword;

// Clear stored login information
localStorage.removeItem("username");
localStorage.removeItem("password");
