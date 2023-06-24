let navigation = document.querySelector(".sidebar-dashboard"),
  sidebar = document.querySelector(".container-sidebar"),
  toggle = document.querySelector(".toggle"),
  brand = document.querySelector(".brand-title");

toggle.onclick = function () {
  navigation.classList.toggle("hide");
  sidebar.classList.toggle("hide");
  brand.classList.toggle("move");
};
