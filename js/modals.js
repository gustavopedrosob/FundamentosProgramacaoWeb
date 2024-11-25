function onShowPasswordCheck(checkbox, passwordInputId) {
    const passwordInput = document.getElementById(passwordInputId);
    passwordInput.type = checkbox.checked ? "text" : "password";
}