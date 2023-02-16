<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Specifies the character encoding of the document -->
    <meta charset="UTF-8">

    <!-- Specifies the version of IE that the page should be rendered as -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Sets the viewport width and initial zoom level of the document -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Specifies the title of the document -->
    <title>Jaarboek</title>

    <!-- Loads the TailwindCSS library from a CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Loads a custom TailwindCSS config file -->
    <script src="js/tailwind.js"></script>

    <!-- Specifies a set of icons for the browser to use -->
    <link rel="/aletta-s/img/favicon_io/apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/aletta-s/img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/aletta-s/img/favicon_io/apple-touch-icon.png">

    <!-- Loads the Google Material Design Icons library from a CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.1.96/css/materialdesignicons.min.css">

    <!-- Loads a custom stylesheet for the document -->
    <link rel="stylesheet" href="css/style.css">
</head>


<body class="bg-gray-100">
   <?php
    // Require the header.php file that contains the HTML header information
    require_once "components/header.php";
    ?>
<!-- Start of main content -->
<div class="container mx-auto p-4">
    <section>
        <div id="section-overzicht-jaarboek-page" class="my-10">
            <!-- Main title of the section -->
            <h1 class="text-3xl font-bold my-4 text-center">Overzicht voorgaande jaren</h1>
            <div class="flex justify-center w-full">
                <div id="container-overzicht-pagina" class="w-full lg:w-1/2 rounded-lg p-8">
                    <div class="gap-4">
                        <!-- First card with information -->
                        <div id="card-overzicht" class="bg-pink-100 rounded-lg p-4 my-4 flex flex-col md:flex-row md:space-x-20 md:items-center">
                            <h3 class="text-lg mb-4 md:mb-0">2020</h3>
                            <p>juni</p>
                            <p>De beste gebeurtenissen van mei
                                <a href="#" id="lees-meer-link-1">Lees meer...</a>
                            </p>
                        </div>
                        <!-- Second card with information -->
                        <div id="card-overzicht" class="bg-pink-100 rounded-lg p-4 my-4 flex flex-col md:flex-row md:space-x-20 md:items-center">
                            <h3 class="text-lg mb-4 md:mb-0">2021</h3>
                            <p>feb</p>
                            <p>De beste gebeurtenissen van mei
                                <a href="#" id="lees-meer-link-2">Lees meer...</a>
                            </p>
                        </div>
                        <!-- Third card with information -->
                        <div id="card-overzicht" class="bg-pink-100 rounded-lg p-4 my-4 flex flex-col md:flex-row md:space-x-20 md:items-center">
                            <h3 class="text-lg mb-4 md:mb-0">2022</h3>
                            <p>sep</p>
                            <p>De beste gebeurtenissen van mei
                                <a href="#" id="lees-meer-link-3">Lees meer...</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

   <!-- Modals -->
   <section>
         <div id="modal-1" class="fixed inset-0 bg-gray-500 bg-opacity-75 z-50 hidden ">
         <div class="fixed top-0 left-0 w-full h-screen flex items-center justify-center ">
            <div class="overflow-y-scroll bg-white rounded-lg shadow-lg w-3/4 md:w-3/4 lg:w-2/3 h-5/6 md:h-4/4 lg:h-2/3 p-6 relative">
               <h2 class="text-5xl font-semibold mb-10">Titel van het project</h2>
                  <h3 class="text-xl mb-4">Naam van de opleiding, naam van de school</h3>
                  <p class="overflow-y-auto  mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet fugiat quia repellendus debitis voluptate sunt odit consequatur reiciendis commodi! Earum magnam quis necessitatibus eius beatae nemo ipsam error ea possimus!</p>
               <button id="sluit-modal-1" class="absolute right-0 top-0 mt-2 mr-5 my-10">x</button>
            </div>  
            </div>
         </div>
      <div id="modal-2" class="fixed inset-0 bg-gray-500 bg-opacity-75 z-50 hidden ">
         <div class="fixed top-0 left-0 w-full h-screen flex items-center justify-center ">
            <div class="overflow-y-scroll bg-white rounded-lg shadow-lg w-3/4 md:w-3/4 lg:w-2/3 h-5/6 md:h-4/4 lg:h-2/3 p-6 relative">
               <h2 class="text-5xl font-semibold mb-10">Titel van het project</h2>
                  <h3 class="text-xl mb-4">Naam van de opleiding, naam van de school</h3>
                  <p class="overflow-y-auto  mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet fugiat quia repellendus debitis voluptate sunt odit consequatur reiciendis commodi! Earum magnam quis necessitatibus eius beatae nemo ipsam error ea possimus!</p>
               <button id="sluit-modal-2" class="absolute right-0 top-0 mt-2 mr-5 my-10">x</button>
            </div>  
         </div>
      </div>
      <div id="modal-3" class="fixed inset-0 bg-gray-500 bg-opacity-75 z-50 hidden ">
         <div class="fixed top-0 left-0 w-full h-screen flex items-center justify-center ">
            <div class="overflow-y-scroll bg-white rounded-lg shadow-lg w-3/4 md:w-3/4 lg:w-2/3 h-5/6 md:h-4/4 lg:h-2/3 p-6 relative">
               <h2 class="text-5xl font-semibold mb-10">Titel van het project</h2>
                  <h3 class="text-xl mb-4">Naam van de opleiding, naam van de school</h3>
                  <p class="overflow-y-auto  mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet fugiat quia repellendus debitis voluptate sunt odit consequatur reiciendis commodi! Earum magnam quis necessitatibus eius beatae nemo ipsam error ea possimus!</p>
               <button id="sluit-modal-3" class="absolute right-0 top-0 mt-2 mr-5 my-10">x</button>
            </div>  
         </div>
      </div>
      <div id="modal-4" class="fixed inset-0 bg-gray-500 bg-opacity-75 z-50 hidden ">
         <div class="fixed top-0 left-0 w-full h-screen flex items-center justify-center ">
            <div class="overflow-y-scroll bg-white rounded-lg shadow-lg w-3/4 md:w-3/4 lg:w-2/3 h-5/6 md:h-4/4 lg:h-2/3 p-6 relative">
               <h2 class="text-5xl font-semibold mb-10">Titel van het project</h2>
                  <h3 class="text-xl mb-4">Naam van de opleiding, naam van de school</h3>
                  <p class="overflow-y-auto  mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet fugiat quia repellendus debitis voluptate sunt odit consequatur reiciendis commodi! Earum magnam quis necessitatibus eius beatae nemo ipsam error ea possimus!</p>
               <button id="sluit-modal-4" class="absolute right-0 top-0 mt-2 mr-5 my-10">x</button>
            </div>  
         </div>
      </div>
      <div id="modal-5" class="fixed inset-0 bg-gray-500 bg-opacity-75 z-50 hidden ">
         <div class="fixed top-0 left-0 w-full h-screen flex items-center justify-center ">
            <div class="overflow-y-scroll bg-white rounded-lg shadow-lg w-3/4 md:w-3/4 lg:w-2/3 h-5/6 md:h-4/4 lg:h-2/3 p-6 relative">
               <h2 class="text-5xl font-semibold mb-10">Titel van het project</h2>
                  <h3 class="text-xl mb-4">Naam van de opleiding, naam van de school</h3>
                  <p class="overflow-y-auto  mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet fugiat quia repellendus debitis voluptate sunt odit consequatur reiciendis commodi! Earum magnam quis necessitatibus eius beatae nemo ipsam error ea possimus!</p>
               <button id="sluit-modal-5" class="absolute right-0 top-0 mt-2 mr-5 my-10">x</button>
            </div>  
         </div>
      </div>
      <div id="modal-6" class="fixed inset-0 bg-gray-500 bg-opacity-75 z-50 hidden ">
         <div class="fixed top-0 left-0 w-full h-screen flex items-center justify-center ">
            <div class="overflow-y-scroll bg-white rounded-lg shadow-lg w-3/4 md:w-3/4 lg:w-2/3 h-5/6 md:h-4/4 lg:h-2/3 p-6 relative">
               <h2 class="text-5xl font-semibold mb-10">Titel van het project</h2>
                  <h3 class="text-xl mb-4">Naam van de opleiding, naam van de school</h3>
                  <p class="overflow-y-auto  mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet fugiat quia repellendus debitis voluptate sunt odit consequatur reiciendis commodi! Earum magnam quis necessitatibus eius beatae nemo ipsam error ea possimus!</p>
               <button id="sluit-modal-6" class="absolute right-0 top-0 mt-2 mr-5 my-10">x</button>
            </div>  
         </div>
      </div>
      <div id="modal-7" class="fixed inset-0 bg-gray-500 bg-opacity-75 z-50 hidden ">
         <div class="fixed top-0 left-0 w-full h-screen flex items-center justify-center ">
            <div class="overflow-y-scroll bg-white rounded-lg shadow-lg w-3/4 md:w-3/4 lg:w-2/3 h-5/6 md:h-4/4 lg:h-2/3 p-6 relative">
               <h2 class="text-5xl font-semibold mb-10">Titel van het project</h2>
                  <h3 class="text-xl mb-4">Naam van de opleiding, naam van de school</h3>
                  <p class="overflow-y-auto  mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet fugiat quia repellendus debitis voluptate sunt odit consequatur reiciendis commodi! Earum magnam quis necessitatibus eius beatae nemo ipsam error ea possimus!</p>
               <button id="sluit-modal-7" class="absolute right-0 top-0 mt-2 mr-5 my-10">x</button>
            </div>  
         </div>
      </div>
      <div id="modal-8" class="fixed inset-0 bg-gray-500 bg-opacity-75 z-50 hidden ">
         <div class="fixed top-0 left-0 w-full h-screen flex items-center justify-center ">
            <div class="overflow-y-scroll bg-white rounded-lg shadow-lg w-3/4 md:w-3/4 lg:w-2/3 h-5/6 md:h-4/4 lg:h-2/3 p-6 relative">
               <h2 class="text-5xl font-semibold mb-10">Titel van het project</h2>
                  <h3 class="text-xl mb-4">Naam van de opleiding, naam van de school</h3>
                  <p class="overflow-y-auto  mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet fugiat quia repellendus debitis voluptate sunt odit consequatur reiciendis commodi! Earum magnam quis necessitatibus eius beatae nemo ipsam error ea possimus!</p>
               <button id="sluit-modal-8" class="absolute right-0 top-0 mt-2 mr-5 my-10">x</button>
            </div>  
         </div>
      </div>
      <div id="modal-9" class="fixed inset-0 bg-gray-500 bg-opacity-75 z-50 hidden ">
         <div class="fixed top-0 left-0 w-full h-screen flex items-center justify-center ">
            <div class="overflow-y-scroll bg-white rounded-lg shadow-lg w-3/4 md:w-3/4 lg:w-2/3 h-5/6 md:h-4/4 lg:h-2/3 p-6 relative">
               <h2 class="text-5xl font-semibold mb-10">Titel van het project</h2>
                  <h3 class="text-xl mb-4">Naam van de opleiding, naam van de school</h3>
                  <p class="overflow-y-auto  mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet fugiat quia repellendus debitis voluptate sunt odit consequatur reiciendis commodi! Earum magnam quis necessitatibus eius beatae nemo ipsam error ea possimus!</p>
               <button id="sluit-modal-9" class="absolute right-0 top-0 mt-2 mr-5 my-10">x</button>
            </div>  
         </div>
      </div>
   </section>

   <section>
      <!-- Section for displaying teams -->
   <div id="section-overzicht-jaarboek-page teams" class="container mx-auto px-4">
    <!-- Section header -->
      <h2 class="text-3xl font-bold mb-4 text-center">Teams</h2>


      <!-- Grid container for displaying team cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
        <!-- Individual team card 1 -->
         <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="img/bloed-buis.jpg" alt="Team 1" class="w-full rounded-lg mb-4">
            <h3 class="text-xl font-bold mb-2">Team 1</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, aperiam?
               Cupiditate, vitae architecto. Voluptatibus accusantium sunt odit molestias vel mollitia similique, fugit
               aliquid suscipit fugiat maxime, earum voluptatem inventore aperiam.
               <a href="#team" id="lees-meer-link-4">Lees meer...</a>
            </p>
         </div>
         <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="img/bloed-buis.jpg" alt="Team 2" class="w-full rounded-lg mb-4">
            <h3 class="text-xl font-bold mb-2">Team 2</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, aperiam?
               Cupiditate, vitae architecto. Voluptatibus accusantium sunt odit molestias vel mollitia similique, fugit
               aliquid suscipit fugiat maxime, earum voluptatem inventore aperiam.
               <a href="#team" id="lees-meer-link-5">Lees meer...</a>
            </p>
         </div>
         <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="img/bloed-buis.jpg" alt="Team 3" class="w-full rounded-lg mb-4">
            <h3 class="text-xl font-bold mb-2">Team 3</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, aperiam?
               Cupiditate, vitae architecto. Voluptatibus accusantium sunt odit molestias vel mollitia similique, fugit
               aliquid suscipit fugiat maxime, earum voluptatem inventore aperiam.
               <a href="#team" id="lees-meer-link-6">Lees meer...</a>
            </p>
         </div>
         <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="img/bloed-buis.jpg" alt="Team 4" class="w-full rounded-lg mb-4">
            <h3 class="text-xl font-bold mb-2">Team 4</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, aperiam?
               Cupiditate, vitae architecto. Voluptatibus accusantium sunt odit molestias vel mollitia similique, fugit
               aliquid suscipit fugiat maxime, earum voluptatem inventore aperiam.
               <a href="#team" id="lees-meer-link-7">Lees meer...</a>
            </p>
         </div>
         <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="img/bloed-buis.jpg" alt="Team 5" class="w-full rounded-lg mb-4">
            <h3 class="text-xl font-bold mb-2">Team 5</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, aperiam?
               Cupiditate, vitae architecto. Voluptatibus accusantium sunt odit molestias vel mollitia similique, fugit
               aliquid suscipit fugiat maxime, earum voluptatem inventore aperiam.
               <a href="#team" id="lees-meer-link-8">Lees meer...</a>
            </p>
         </div>
         <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="img/bloed-buis.jpg" alt="Team 6" class="w-full rounded-lg mb-4">
            <h3 class="text-xl font-bold mb-2">Team 6</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, aperiam?
               Cupiditate, vitae architecto. Voluptatibus accusantium sunt odit molestias vel mollitia similique, fugit
               aliquid suscipit fugiat maxime, earum voluptatem inventore aperiam.
               <a href="#team" id="lees-meer-link-9">Lees meer...</a>
            </p>
         </div>
      </div>
   </div>

   </section>
   
   </section>

   <!-- in cijfers section -->
   <section>
      <div class="py-8 px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-center my-4">Onze werk in cijfers</h2>
      <div id="container-section-cijfers" class="flex flex-col md:flex-row md:justify-between">
         <!-- in vijf jaar tijd -->
         <div class="flex flex-col m-10 md:ml-3 text-center">
            <span class="mdi mdi-calendar-text-outline text-7xl md:text-9xl text-center"></span>
            <h3 class="text-3xl">In vijf jaar tijd</h3>
            <p>We hebben 100 levens gered of makkelijker gemaakt!!</p>
         </div>
         <!-- drie generaties -->
         <div class="flex flex-col m-10 md:ml-3 text-center">
            <span class="mdi mdi-human-male-board-poll text-7xl md:text-9xl text-center"></span>
            <h3 class="text-3xl">Met behulp Deelnemers</h3>
            <p>Met behulp van 167 duizend noorderlingen</p>
         </div>
         <div class="flex flex-col m-10 md:ml-3 text-center">
            <span class="mdi mdi-account-group text-7xl md:text-9xl text-center"></span>
            <h3 class="text-3xl">Drie generaties</h3>
            <p>We hebben 100 levens gered of makkelijker gemaakt!!</p>
         </div>
      </div>
   </div>
   </section>


   
   </div>
   <?php
   
      require_once "components/footer.php";
    ?>
        <!-- JavaScript -->
        <script src="js/jaarboek.js"></script>
    </body>

</html>
