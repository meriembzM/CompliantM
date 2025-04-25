// Function to toggle the dropdown menu visibility
function toggleMenu() {
    var menu = document.getElementById("dropdown-menu");
    if (menu.style.display === "none" || menu.style.display === "") {
        menu.style.display = "block";  // Show the menu
    } else {
        menu.style.display = "none";  // Hide the menu
    }
}

// Close the dropdown if clicked outside of it
window.onclick = function(event) {
    // Check if the clicked element is not part of the menu or menu item
    if (!event.target.matches('.menu-item') && !event.target.matches('#dropdown-menu') && !event.target.matches('.menu-item *')) {
        var dropdowns = document.getElementsByClassName("dropdown-menu");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.style.display === "block") {
                openDropdown.style.display = "none";
            }
        }
    }
}
