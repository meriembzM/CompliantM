const togglerButton = document.getElementById("toggle-btn");
const sidebar = document.getElementById("sidebar");

function toggleSidebar() {
    sidebar.classList.toggle('close');
    sidebar.classList.toggle('collapsed');

}
document.addEventListener("DOMContentLoaded", function () {
    const submitBtn = document.querySelector(".submit");
  
    submitBtn.addEventListener("click", function () {
      submitBtn.classList.add("active");
    });
  });
  function toggleMenu() {
    const menu = document.getElementById("dropdownMenu");
    menu.style.display = (menu.style.display === "block") ? "none" : "block";
  }
   

