document.querySelector(".open-menu").addEventListener("click", () => {
  openMenu();
})

document.querySelector(".close-menu").addEventListener("click", () => {
  closeMenu();
})

function openMenu() {
  const menu = document.querySelector(".menu");
  menu.style.display = "flex";
}

function closeMenu() {
  const menu = document.querySelector(".menu");
  menu.style.display = "none";
}