// ===============================
// Main Function
// ===============================

function validateForm() {

    clearErrors();

    let usernameValid = validateUsername();
    let emailValid = validateEmail();
    let passwordValid = validatePassword();
    let confirmValid = validateConfirmPassword();

    if (usernameValid && emailValid && passwordValid && confirmValid) {

        alert("Registration Successful!");

        // document.getElementById("registerForm").submit();

    }

}

// ===============================
// Username Validation
// ===============================

function validateUsername() {

    let username = document.getElementById("username");

    if (username.value.trim() === "") {

        showError(
            username,
            "usernameError",
            "Username is required."
        );

        return false;
    }

    return true;

}

// ===============================
// Email Validation
// ===============================

function validateEmail() {

    let email = document.getElementById("email");

    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email.value.trim() === "") {

        showError(
            email,
            "emailError",
            "Email is required."
        );

        return false;

    }

    if (!emailPattern.test(email.value.trim())) {

        showError(
            email,
            "emailError",
            "Invalid Email Address."
        );

        return false;

    }

    return true;

}

// ===============================
// Password Validation
// ===============================

function validatePassword() {

    let password = document.getElementById("password");

    if (password.value === "") {

        showError(
            password,
            "passwordError",
            "Password is required."
        );

        return false;

    }

    return true;

}

// ===============================
// Confirm Password Validation
// ===============================

function validateConfirmPassword() {

    let password = document.getElementById("password");

    let confirm = document.getElementById("confirmPassword");

    if (confirm.value === "") {

        showError(
            confirm,
            "confirmPasswordError",
            "Confirm Password is required."
        );

        return false;

    }

    if (password.value !== confirm.value) {

        showError(
            confirm,
            "confirmPasswordError",
            "Passwords do not match."
        );

        return false;

    }

    return true;

}

// ===============================
// Show Error
// ===============================

function showError(input, errorId, message) {

    input.classList.add("is-invalid");

    document.getElementById(errorId).innerHTML = message;

}

// ===============================
// Clear Errors
// ===============================

function clearErrors() {

    let inputs = document.querySelectorAll(".form-control");

    inputs.forEach(function (input) {

        input.classList.remove("is-invalid");

    });

    let errors = document.querySelectorAll("small");

    errors.forEach(function (error) {

        error.innerHTML = "";

    });

}