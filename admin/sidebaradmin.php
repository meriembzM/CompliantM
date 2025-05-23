<aside class="sidebar" id="sidebar">
   
    <div class="sidebar_header">
        <h1 class="sidebar_logo">GR</h1>
        <button  onclick=toggleSidebar()  id="toggle-btn" aria-label="Toggle Sidebar">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="currentColor" viewBox="0 0 24 24">
                <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>
    </div>

    <ul class="sidebar_list">
   
        <li>
            <a href="dashboard.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="currentColor">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                </svg>
               <span> Dashboard</span>
            </a>
        </li>
        <li>
            <a href="users.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="currentColor">
                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                </svg>
                <span>Users</span>
            </a>
        </li>
        <li>
            <a href="add_customer.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="currentColor">
                    <path d="M15 14c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm-9 0c1.66 0 3-1.34 3-3S7.66 8 6 8s-3 1.34-3 3 1.34 3 3 3zm9 2c-2.33 0-7 1.17-7 3.5V21h14v-1.5c0-2.33-4.67-3.5-7-3.5zm-9 0c-.29 0-.62.02-.97.05C2.87 16.89 2 18.02 2 19.5V21h6v-1.5c0-1.48-.87-2.61-2.03-3.45z"/>
                </svg>
               <span>Add Customer</span> 
            </a>
        </li>
        <li>
            <a href="add_services.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="currentColor">
                    <path d="M19 13H13v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                </svg>
               <span>Add Service</span> 
            </a>
        </li>
    </ul>

    <hr>

    <div class="sidebar_section-title">
      
    </div>

    <ul class="sidebar_list">
        <li>
            <a href="operations.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="currentColor">
                    <path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/>
                </svg>
              <span> Operations</span> 
            </a>
        </li>
        <li>
            <a href="Consulter.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="currentColor">
                    <path d="M12 6a9 9 0 0 0-9 9 9 9 0 0 0 18 0 9 9 0 0 0-9-9zm0 2a7 7 0 0 1 7 7c0 3.87-3.13 7-7 7s-7-3.13-7-7a7 7 0 0 1 7-7zm-1 3h2v5h-2zm0 6h2v2h-2z"/>
                </svg>
             <span>Consulter</span>   
            </a>
        </li>
        <li>
            <a href="rechercher.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="currentColor">
                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 5L20.49 19l-5-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                </svg>
                <span>Rechercher</span>
            </a>
        </li>
        <li>
            <a href="traiter_reclamation.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="currentColor">
                    <path d="M12 0C5.37 0 0 5.37 0 12c0 5.32 3.438 9.8 8.205 11.385.6.111.82-.26.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.386-1.333-1.756-1.333-1.756-1.09-.745.082-.729.082-.729 1.205.085 1.838 1.237 1.838 1.237 1.07 1.834 2.807 1.304 3.495.997.108-.775.42-1.305.762-1.605-2.665-.305-5.466-1.332-5.466-5.932 0-1.31.468-2.382 1.236-3.222-.123-.304-.536-1.53.117-3.188 0 0 1.008-.322 3.3 1.23A11.47 11.47 0 0 1 12 6.8c1.02.005 2.047.14 3.006.412 2.29-1.552 3.296-1.23 3.296-1.23.655 1.658.242 2.884.12 3.188.77.84 1.235 1.912 1.235 3.222 0 4.61-2.805 5.624-5.475 5.922.43.37.814 1.103.814 2.222 0 1.604-.015 2.896-.015 3.286 0 .32.216.694.825.576C20.565 21.796 24 17.318 24 12c0-6.63-5.37-12-12-12z"/>
                </svg>
               <span> Traiter</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <button id="theme-toggle" class="btn">
            <svg id="theme-icon" xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="currentColor" viewBox="0 0 24 24">

                <path id="theme-path" d="M12 1C12.553 1 13 1.447 13 2V6C13 6.553 12.553 7 12 7C11.447 7 11 6.553 11 6V2C11 1.447 11.447 1 12 1ZM12 17C12.553 17 13 17.447 13 18V22C13 22.553 12.553 23 12 23C11.447 23 11 22.553 11 22V18C11 17.447 11.447 17 12 17ZM4.707 4.707C5.098 4.316 5.098 3.684 4.707 3.293C4.316 2.902 3.684 2.902 3.293 3.293C2.902 3.684 2.902 4.316 3.293 4.707C3.684 5.098 4.316 5.098 4.707 4.707ZM19.707 4.707C20.098 4.316 20.098 3.684 19.707 3.293C19.316 2.902 18.684 2.902 18.293 3.293C17.902 3.684 17.902 4.316 18.293 4.707C18.684 5.098 19.316 5.098 19.707 4.707ZM4.707 19.707C5.098 19.316 5.098 18.684 4.707 18.293C4.316 17.902 3.684 17.902 3.293 18.293C2.902 18.684 2.902 19.316 3.293 19.707C3.684 20.098 4.316 20.098 4.707 19.707ZM19.707 19.707C20.098 19.316 20.098 18.684 19.707 18.293C19.316 17.902 18.684 17.902 18.293 18.293C17.902 18.684 17.902 19.316 18.293 19.707C18.684 20.098 19.316 20.098 19.707 19.707ZM12 10C9.243 10 7 12.243 7 15C7 17.757 9.243 20 12 20C14.757 20 17 17.757 17 15C17 12.243 14.757 10 12 10Z"/>
            </svg>
            Dark Mode
        </button>
    </div>
    
    </div>
</aside>
<header>
    <div class="header_container">
      <h1 class="header_logo">Admin HOME</h1>
    </div>
  
    <?php if (isset($_SESSION['username'])): ?>
      <div class="admin-profile">
        <div class="avatar" onclick="toggleMenu()">
          <?= strtoupper(substr($_SESSION['username'], 0, 2)) ?> 
        </div>
  
        <div class="dropdown-menu" id="dropdownMenu">
          <ul>
            <li><a href="#">Profile</a></li>
            <li><a href="logout.php">Log out</a></li>
          </ul>
        </div>
      </div>
    <?php endif; ?>
  </header>