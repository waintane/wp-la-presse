let menu = document.querySelectorAll(".menu li a");

menu.forEach(e => {
    e.classList.add(`${e.textContent}`);
});