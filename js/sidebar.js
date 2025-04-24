const themeToggleButton = document.getElementById('theme-toggle');
 const currentTheme = localStorage.getItem('theme');
 
 if (currentTheme) {
     document.documentElement.setAttribute('data-theme', currentTheme);
 }
  function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('collapsed');
  }

 themeToggleButton.addEventListener('click', () => {
     let theme = document.documentElement.getAttribute('data-theme');
     if (theme === 'dark') {
         document.documentElement.setAttribute('data-theme', 'light');
         localStorage.setItem('theme', 'light');
     } else {
         document.documentElement.setAttribute('data-theme', 'dark');
         localStorage.setItem('theme', 'dark');
     }
 });

fetch("sidebar.html")
    .then(response => response.text())
    .then(data => {
      document.getElementById("sidebar-placeholder").innerHTML = data;
    });

