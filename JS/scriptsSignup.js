

document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('loginForm');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');
    const loginButton = form.querySelector('button[type="submit"]');

    emailInput.addEventListener('blur', () => {
        if (validateEmail()) {
            passwordInput.disabled = false;
        } else {
            passwordInput.disabled = true;
            loginButton.disabled = true;
        }
    });

    passwordInput.addEventListener('blur', () => {
        if (validatePassword()) {
            checkFormValidity();
        } else {
            loginButton.disabled = true;
        }
    });

    form.addEventListener('submit', (event) => {
        let isValid = true;

        // Clear previous errors
        emailError.textContent = '';
        passwordError.textContent = '';

        // Validate email
        if (!validateEmail()) {
            isValid = false;
        }

        // Validate password
        if (!validatePassword()) {
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });

    function validateEmail() {
        const emailValue = emailInput.value.trim();
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

        if (!emailPattern.test(emailValue)) {
            emailError.textContent = 'Please enter a valid email address.';
            return false;
        } else {
            emailError.textContent = '';
            return true;
        }
    }

    function validatePassword() {
        const passwordValue = passwordInput.value.trim();

        if (passwordValue.length < 6) {
            passwordError.textContent = 'Password must be at least 6 characters long.';
            return false;
        } else {
            passwordError.textContent = '';
            return true;
        }
    }

    function checkFormValidity() {
        if (validateEmail() && validatePassword()) {
            loginButton.disabled = false;
        } else {
            loginButton.disabled = true;
        }
    }
});
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('signupForm');
    const fnameInput = document.getElementById('fname');
    const lnameInput = document.getElementById('lname');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const cpasswordInput = document.getElementById('cpassword');
    const termsCheckbox = document.getElementById('terms');
    const fnameError = document.getElementById('fnameError');
    const lnameError = document.getElementById('lnameError');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');
    const cpasswordError = document.getElementById('cpasswordError');
    const termsError = document.getElementById('termsError');
    const signupButton = form.querySelector('button[type="submit"]');

    fnameInput.addEventListener('blur', validateFname);
    lnameInput.addEventListener('blur', validateLname);
    emailInput.addEventListener('blur', validateEmail);
    passwordInput.addEventListener('blur', () => {
        if (validatePassword()) {
            cpasswordInput.disabled = false;
        } else {
            cpasswordInput.disabled = true;
            signupButton.disabled = true;
        }
    });
    cpasswordInput.addEventListener('blur', validateCPassword);
    termsCheckbox.addEventListener('change', checkFormValidity);

    form.addEventListener('submit', (event) => {
        let isValid = true;

        // Clear previous errors
        fnameError.textContent = '';
        lnameError.textContent = '';
        emailError.textContent = '';
        passwordError.textContent = '';
        cpasswordError.textContent = '';
        termsError.textContent = '';

        // Validate first name
        if (!validateFname()) {
            isValid = false;
        }

        // Validate last name
        if (!validateLname()) {
            isValid = false;
        }

        // Validate email
        if (!validateEmail()) {
            isValid = false;
        }

        // Validate password
        if (!validatePassword()) {
            isValid = false;
        }

        // Validate confirm password
        if (!validateCPassword()) {
            isValid = false;
        }

        // Validate terms and conditions
        if (!termsCheckbox.checked) {
            termsError.textContent = 'You must agree to the terms and conditions.';
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });

    function validateFname() {
        const fnameValue = fnameInput.value.trim();
        if (fnameValue === '') {
            fnameError.textContent = 'First name is required.';
            return false;
        } else {
            fnameError.textContent = '';
            return true;
        }
    }

    function validateLname() {
        const lnameValue = lnameInput.value.trim();
        if (lnameValue === '') {
            lnameError.textContent = 'Last name is required.';
            return false;
        } else {
            lnameError.textContent = '';
            return true;
        }
    }

    function validateEmail() {
        const emailValue = emailInput.value.trim();
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

        if (!emailPattern.test(emailValue)) {
            emailError.textContent = 'Please enter a valid email address.';
            return false;
        } else {
            emailError.textContent = '';
            return true;
        }
    }

    function validatePassword() {
        const passwordValue = passwordInput.value.trim();

        if (passwordValue.length < 6) {
            passwordError.textContent = 'Password must be at least 6 characters long.';
            return false;
        } else {
            passwordError.textContent = '';
            return true;
        }
    }

    function validateCPassword() {
        const passwordValue = passwordInput.value.trim();
        const cpasswordValue = cpasswordInput.value.trim();

        if (passwordValue !== cpasswordValue) {
            cpasswordError.textContent = 'Passwords do not match.';
            return false;
        } else {
            cpasswordError.textContent = '';
            return true;
        }
    }

    function checkFormValidity() {
        if (validateFname() && validateLname() && validateEmail() && validatePassword() && validateCPassword() && termsCheckbox.checked) {
            signupButton.disabled = false;
        } else {
            signupButton.disabled = true;
        }
    }
});

