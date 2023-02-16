<header class="inline">
  <!-- Navigation bar -->
  <nav class="navbar-fixed-top flex md:justify-center justify-between px-10 md:pr-0 items-center py-3 md:py-4 lg:py-6 sticky top-0">
    <div class="flex items-center mb-4 md:ml-8 lg:ml-16">
      <!-- Logo -->
      <a href="index.php">
        <img class="h-16 lg:h-20" src="img/aletta-blue-logo.png" alt="Logo">
      </a>
    </div>

    <div class="flex items-center justify-between">
      <!-- Hamburger button for small screens -->
      <button id="burger-menu" class="block md:hidden">
        <i class="fa duotone fa-bars"></i>
      </button>

      <!-- Main menu -->
      <ul id="main-menu" class="hidden md:flex md:flex-row md:items-center md:space-x-8 lg:space-x-16 md:mr-8">
      <li>
          <a href="jaarboek.php" class="px-2 py-1.5 md:px-3 md:py-2 rounded">
            Jaarboek
          </a>
        </li>  
        <li>
            <a href="signup.php" class="px-2 py-1.5 md:px-3 md:py-2 rounded">
                Aanmelden
            </a>
        </li>
        
      </ul>
    </div>
  </nav>

  <!-- Dropdown menu for small screens -->
  <div id="dropdown-menu" class="hidden md:hidden bg-gray-100">
    <ul class="flex flex-col items-center py-2">
      <li class="my-2">
        <a href="signup.php" class="block px-2 py-1.5 md:px-3 md:py-2 rounded">
          Aanmelden
        </a>
      </li>
      <li class="my-2">
        <a href="jaarboek.php" class="block px-2 py-1.5 md:px-3 md:py-2 rounded">
          Jaarboek
        </a>
      </li>
    </ul>
  </div>
</header>

<!-- jQuery library and custom script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>
