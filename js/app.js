// Sidebar toggle
document.addEventListener("DOMContentLoaded", function () {
  const togglerButton = document.getElementById("toggle-btn");
  const sidebar = document.getElementById("sidebar");

  if (togglerButton && sidebar) {
    togglerButton.addEventListener("click", function () {
      document.body.classList.toggle("sidebar-collapsed");
      sidebar.classList.toggle("collapsed");
    });
  }

  // Submit button logic
  const submitBtn = document.querySelector(".submit");
  if (submitBtn) {
    submitBtn.addEventListener("click", function () {
      submitBtn.classList.add("active");
    });
  }

  // Dropdown toggle logic
  const dropdownToggleBtn = document.getElementById("dropdownToggle"); // optional trigger
  const menu = document.getElementById("dropdownMenu");

  if (dropdownToggleBtn && menu) {
    dropdownToggleBtn.addEventListener("click", function () {
      menu.classList.toggle("visible");
    });
  }
});

// If you're not using a toggle button for the dropdown, but just calling toggleMenu manually:
function toggleMenu() {
  const menu = document.getElementById("dropdownMenu");
  if (menu) {
    menu.classList.toggle("visible");
  }
}
