const userTheme = localStorage.getItem('theme');
const themeController = document.querySelector(".theme-controller");

if (userTheme === null) {
    localStorage.setItem('theme', "light");
} else if (userTheme === themeController.value) {
    themeController.checked = true;
}

themeController.addEventListener("change", () => {
    localStorage.setItem('theme', themeController.checked ? "dark" : "light");
})
