document.addEventListener('DOMContentLoaded', () => {
    const authPopup = document.getElementById('auth-popup');
    const signupPopup = document.getElementById('signup-popup');
    const forgotPasswordPopup = document.getElementById('forgot-password-popup');
    const closeBtns = document.querySelectorAll('.close-btn');
    const loginBtn = document.getElementById('login-btn');
    const signupLink = document.getElementById('signup-link');
    const forgotPasswordLink = document.getElementById('forgot-password-link');
    const backToLoginSignup = document.getElementById('back-to-login-signup'); // Back to Log In from Sign Up
    const backToLoginForgot = document.getElementById('back-to-login-forgot'); // Back to Log In from Forgot Password
    const eyeIcons = document.querySelectorAll('.eye-icon');

    // Function to toggle the pop-up
    const togglePopup = (popup) => {
        popup.style.display = (popup.style.display === 'block') ? 'none' : 'block';
    };

    // Event listeners for the close buttons
    closeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            togglePopup(btn.closest('.auth-popup'));
        });
    });

    // Event listener for the login button
    loginBtn.addEventListener('click', () => {
        togglePopup(authPopup);
    });

    // Event listener for the sign-up link within the login pop-up
    signupLink.addEventListener('click', (e) => {
        e.preventDefault();
        togglePopup(authPopup);  // Close the login pop-up
        togglePopup(signupPopup);  // Open the sign-up pop-up
    });

    // Event listener for the forgot password link within the login pop-up
    forgotPasswordLink.addEventListener('click', (e) => {
        e.preventDefault();
        togglePopup(authPopup);  // Close the login pop-up
        togglePopup(forgotPasswordPopup);  // Open the forgot password pop-up
    });

    // Event listener for the "Back to Log In" link in Sign Up pop-up
    backToLoginSignup.addEventListener('click', (e) => {
        e.preventDefault();
        togglePopup(signupPopup);  // Close the sign-up pop-up
        togglePopup(authPopup);  // Open the login pop-up
    });

    // Event listener for the "Back to Log In" link in Forgot Password pop-up
    backToLoginForgot.addEventListener('click', (e) => {
        e.preventDefault();
        togglePopup(forgotPasswordPopup);  // Close the forgot password pop-up
        togglePopup(authPopup);  // Open the login pop-up
    });

    // Toggle password visibility and icon
    eyeIcons.forEach(eyeIcon => {
        eyeIcon.addEventListener('click', () => {
            const input = eyeIcon.previousElementSibling; // The input field before the icon
            if (input.type === 'password') {
                input.type = 'text';
                eyeIcon.src = 'eye-closed.svg'; // Switch to eye-closed icon
                eyeIcon.alt = 'Hide Password';
            } else {
                input.type = 'password';
                eyeIcon.src = 'eye-open.svg'; // Switch to eye-open icon
                eyeIcon.alt = 'Show Password';
            }
        });
    });

    // Close pop-up on Escape key press
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            if (authPopup.style.display === 'block') togglePopup(authPopup);
            if (signupPopup.style.display === 'block') togglePopup(signupPopup);
            if (forgotPasswordPopup.style.display === 'block') togglePopup(forgotPasswordPopup);
        }
    });

    // Close pop-up on clicking outside the content
    window.addEventListener('click', (event) => {
        if (event.target === authPopup) togglePopup(authPopup);
        if (event.target === signupPopup) togglePopup(signupPopup);
        if (event.target === forgotPasswordPopup) togglePopup(forgotPasswordPopup);
    });
});
