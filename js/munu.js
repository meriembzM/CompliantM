const togglerButton = document.getElementById("toggle-btn");
const sidebar = document.getElementById("sidebar");

togglerButton.addEventListener("click", toggleSidebar);

function toggleSidebar() {
    sidebar.classList.toggle('close');  
    sidebar.classList.toggle('collapsed');  
}


document.addEventListener("DOMContentLoaded", function () {
    const submitBtn = document.querySelector(".submit");
  
    if (submitBtn) {  
        submitBtn.addEventListener("click", function () {
            submitBtn.classList.add("active");
        });
    }
});
