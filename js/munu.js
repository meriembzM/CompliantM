const togglerButton = document.getElementById("toggle-btn");
const sidebar = document.getElementById("sidebar");

// Add event listener to the toggle button
togglerButton.addEventListener("click", toggleSidebar);

function toggleSidebar() {
    sidebar.classList.toggle('close');  // This may be used to control some specific styles.
    sidebar.classList.toggle('collapsed');  // This could be used to control sidebar visibility/size.
}

// Ensure the DOM is loaded before attaching events
document.addEventListener("DOMContentLoaded", function () {
    const submitBtn = document.querySelector(".submit");
  
    if (submitBtn) {  // Ensure the element exists before attaching the event
        submitBtn.addEventListener("click", function () {
            submitBtn.classList.add("active");
        });
    }
});
