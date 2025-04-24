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
