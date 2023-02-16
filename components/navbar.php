<body

  >
  <header class="inline">
     <nav
        class="
          sticky
          top-0
          z-50
          flex flex-wrap
          items-center
          justify-around
          w-full
          py-4
          md:py-0
          px-4
          text-lg text-gray-700
          bg-white
          drop-shadow-md
        ">
       <div>
          <a href="index.php">
            <img class="w-16 m-1 md:m-4" src="img/aletta-blue-logo.png" alt="aryc-logo">
          </a>
        </div>
         <svg
            xmlns="http://www.w3.org/2000/svg"
            id="menu-button"
            class="h-6 w-6 cursor-pointer md:hidden block"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            />
          </svg>
       <div class="hidden w-full md:flex md:items-center text-center md:w-auto" id="menu">
          <ul
            class="
              pt-4
              text-base text-gray-700
              md:flex
              md:justify-between 
              md:pt-0">
              <li>
              <a class="md:hidden lg:hidden py-2 block hover:text-primarycolor" href="index.php"
                >Home</a>
            </li>
            <li>
              <a class="md:p-4 py-2 block hover:text-primarycolor" href="jaarboek.php"
                >Jaarboek</a>
            </li>
            <li>
              <a class="md:p-4 py-2 block hover:text-primarycolor" href="signup.php"
                >Aanmelden</a>
            </li>
          </ul>
      </div>
    </nav>
  </header>
</body>

<script src="js/script.js"></script>
