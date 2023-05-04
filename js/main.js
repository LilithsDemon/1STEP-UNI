const hamburger = document.querySelector(".hamburger");
const mobile_menu_items = document.querySelectorAll(".m_m_item");
const mobile_menu = document.querySelector(".mobile-menu");

function toggleMenu() {
  hamburger.classList.toggle("is-active");
  mobile_menu.classList.toggle("is-open");
}

hamburger.addEventListener("click", function () {
  toggleMenu();
});

for (var i = 0; i < mobile_menu_items.length; i++) {
  mobile_menu_items[i].addEventListener("click", function () {
    toggleMenu();
  });
}