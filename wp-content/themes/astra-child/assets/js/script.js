document.addEventListener("DOMContentLoaded", () => {
    const slogan = document.querySelector("#nextLevel");
    slogan.addEventListener("click", () => {
        slogan.style.transform = "scale(0)";
        slogan.style.transition = "all 2s";
    });
});
