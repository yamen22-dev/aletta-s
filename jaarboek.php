<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaarboek</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/tailwind.js"></script>
    <link rel="/aletta-s/img/favicon_io/apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/aletta-s/img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/aletta-s/img/favicon_io/apple-touch-icon.png">
    <!-- google material symbols -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.1.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gray-100">
   <div class="container mx-auto p-4">
   <div id="section-overzicht-jaarboek-page" class="my-10">
      <h1 class="text-3xl font-bold my-4 text-center">Overzicht voorgaande jaren</h1>
      <div  class="flex justify-center w-full ">
         <div id="container-overzicht-pagina" class="w-full lg:w-1/2  rounded-lg p-8">
            <div class="gap-4">
               <div id="card-overzicht" class="bg-pink-100 rounded-lg p-4 my-4 flex flex-col md:flex-row md:space-x-20 md:items-center">
                  <h3 class=" text-lg mb-4 md:mb-0">2020</h3>
                  <p>juni</p>
                  <p>De beste gebeurtenissen van mei
                     <a href="#" id="lees-meer-link-1">Lees meer...</a>
                  </p>
               </div>
               <div id="card-overzicht" class="bg-pink-100 rounded-lg p-4 my-4 flex flex-col md:flex-row md:space-x-20 md:items-center">
                  <h3 class=" text-lg mb-4 md:mb-0">2021</h3>
                  <p>feb</p>
                  <p>De beste gebeurtenissen van mei
                     <a href="#" id="lees-meer-link-2">Lees meer...</a>
                  </p>
               </div>
               <div id="card-overzicht" class="bg-pink-100 rounded-lg p-4 my-4 flex flex-col md:flex-row md:space-x-20 md:items-center">
                  <h3 class=" text-lg mb-4 md:mb-0">2022</h3>
                  <p>sep</p>
                  <p>De beste gebeurtenissen van mei
                     <a href="#" id="lees-meer-link-3">Lees meer...</a>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Modals -->
   <div id="modal-1" class="fixed inset-0 bg-gray-500 bg-opacity-75 z-50 hidden">
      <div class="fixed top-0 left-0 w-full h-full flex items-center justify-center">
         <div class="bg-white rounded-lg shadow-lg w-60 md:w-3/4 lg:w-2/3 h-60 md:h-3/4 lg:h-2/3 p-6 relative">
            <h2 class="text-5xl font-semibold mb-10">Titel van het project</h2>
            <p class="overflow-y-auto  mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, in officiis atque eos, pariatur ea omnis amet voluptatibus earum expedita ab totam illum aliquam vel placeat consectetur optio natus sunt.
               Nihil deleniti culpa rem. Modi, asperiores? Nostrum, officia labore. Vero non, cupiditate quibusdam officia facilis ipsam delectus tempora unde, sed facere animi amet quas qui. Fugiat ratione optio repellendus quae!
               Aperiam dolore quia tempore provident quam iure distinctio? In, dignissimos eveniet sequi quidem aut deserunt iste delectus magnam? Voluptas soluta odio maiores, autem animi enim ea numquam culpa quam sed!
               Facere, explicabo, dignissimos tempore quaerat nobis, quo ipsum earum est non aspernatur error odit sunt! Excepturi molestias similique esse eos optio ea et beatae animi incidunt, illum dolorum magni doloremque.
               Maiores aliquid tenetur quibusdam cum doloremque distinctio beatae vitae quod commodi totam, vel odit ipsam itaque veritatis libero quae ratione reiciendis aspernatur quisquam nam quam omnis quaerat in aperiam. Ut.
            </p>
            <button id="sluit-modal-1" class="absolute right-0 top-0 mt-2 mr-5 my-10">x</button>
         </div>
      </div>
   </div>
   
   <div id="modal-2" class="fixed inset-0 bg-gray-500 bg-opacity-75 z-50 hidden ">
      <div class="fixed top-0 left-0 w-full h-screen flex items-center justify-center ">
         <div class="overflow-y-scroll bg-white rounded-lg shadow-lg w-3/4 md:w-3/4 lg:w-2/3 h-5/6 md:h-4/4 lg:h-2/3 p-6 relative">
            <h2 class="text-2xl md:text-4xl lg:text-5xl font-semibold mb-10">Titel van het project</h2>
            <p class=" text-sm md:text-base lg:text-lg mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, in officiis atque eos, pariatur ea omnis amet voluptatibus earum expedita ab totam illum aliquam vel placeat consectetur optio natus sunt.
               Nihil deleniti culpa rem. Modi, asperiores? Nostrum, officia labore. Vero non, cupiditate quibusdam officia facilis ipsam delectus tempora unde, sed facere animi amet quas qui. Fugiat ratione optio repellendus quae!
               Aperiam dolore quia tempore provident quam iure distinctio? In, dignissimos eveniet sequi quidem aut deserunt iste delectus magnam? Voluptas soluta odio maiores, autem animi enim ea numquam culpa quam sed!
               Facere, explicabo, dignissimos tempore quaerat nobis, quo ipsum earum est non aspernatur error odit sunt! Excepturi molestias similique esse eos optio ea et beatae animi incidunt, illum dolorum magni doloremque.
               Maiores aliquid tenetur quibusdam cum doloremque distinctio beatae vitae quod commodi totam, vel odit ipsam itaque veritatis libero quae ratione reiciendis aspernatur quisquam nam quam omnis quaerat in aperiam. Ut.
            </p>
            <button id="sluit-modal-2" class="absolute right-0 top-0 mt-2 mr-5 my-10">x</button>
         </div>
         
         </div>
      </div>
    <div id="modal-3" class="fixed inset-0 bg-gray-500 bg-opacity-75 z-50 hidden">
            <div class="fixed top-0 left-0 w-full h-full flex items-center justify-center">
               <div class="bg-white rounded-lg shadow-lg w-60 md:w-3/4 lg:w-2/3 h-60 md:h-3/4 lg:h-2/3 p-6 relative">
                  <h2 class="text-5xl font-semibold mb-10">Titel van het project</h2>
                  <p class="overflow-y-auto  mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, in officiis atque eos, pariatur ea omnis amet voluptatibus earum expedita ab totam illum aliquam vel placeat consectetur optio natus sunt.
                     Nihil deleniti culpa rem. Modi, asperiores? Nostrum, officia labore. Vero non, cupiditate quibusdam officia facilis ipsam delectus tempora unde, sed facere animi amet quas qui. Fugiat ratione optio repellendus quae!
                     Aperiam dolore quia tempore provident quam iure distinctio? In, dignissimos eveniet sequi quidem aut deserunt iste delectus magnam? Voluptas soluta odio maiores, autem animi enim ea numquam culpa quam sed!
                     Facere, explicabo, dignissimos tempore quaerat nobis, quo ipsum earum est non aspernatur error odit sunt! Excepturi molestias similique esse eos optio ea et beatae animi incidunt, illum dolorum magni doloremque.
                     Maiores aliquid tenetur quibusdam cum doloremque distinctio beatae vitae quod commodi totam, vel odit ipsam itaque veritatis libero quae ratione reiciendis aspernatur quisquam nam quam omnis quaerat in aperiam. Ut.
                  </p>
                  <button id="sluit-modal-3" class="absolute right-0 top-0 mt-2 mr-5 my-10">x</button>
               </div>
        </div>
        </div>


   <!-- Section for displaying teams -->
   <div id="section-overzicht-jaarboek-page" class="container mx-auto px-4">
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
            </p>
         </div>
         <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="img/bloed-buis.jpg" alt="Team 2" class="w-full rounded-lg mb-4">
            <h3 class="text-xl font-bold mb-2">Team 2</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, aperiam?
               Cupiditate, vitae architecto. Voluptatibus accusantium sunt odit molestias vel mollitia similique, fugit
               aliquid suscipit fugiat maxime, earum voluptatem inventore aperiam.
            </p>
         </div>
         <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="img/bloed-buis.jpg" alt="Team 3" class="w-full rounded-lg mb-4">
            <h3 class="text-xl font-bold mb-2">Team 3</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, aperiam?
               Cupiditate, vitae architecto. Voluptatibus accusantium sunt odit molestias vel mollitia similique, fugit
               aliquid suscipit fugiat maxime, earum voluptatem inventore aperiam.
            </p>
         </div>
         <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="img/bloed-buis.jpg" alt="Team 4" class="w-full rounded-lg mb-4">
            <h3 class="text-xl font-bold mb-2">Team 4</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, aperiam?
               Cupiditate, vitae architecto. Voluptatibus accusantium sunt odit molestias vel mollitia similique, fugit
               aliquid suscipit fugiat maxime, earum voluptatem inventore aperiam.
            </p>
         </div>
         <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="img/bloed-buis.jpg" alt="Team 5" class="w-full rounded-lg mb-4">
            <h3 class="text-xl font-bold mb-2">Team 5</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, aperiam?
               Cupiditate, vitae architecto. Voluptatibus accusantium sunt odit molestias vel mollitia similique, fugit
               aliquid suscipit fugiat maxime, earum voluptatem inventore aperiam.
            </p>
         </div>
         <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="img/bloed-buis.jpg" alt="Team 6" class="w-full rounded-lg mb-4">
            <h3 class="text-xl font-bold mb-2">Team 6</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, aperiam?
               Cupiditate, vitae architecto. Voluptatibus accusantium sunt odit molestias vel mollitia similique, fugit
               aliquid suscipit fugiat maxime, earum voluptatem inventore aperiam.
            </p>
         </div>
      </div>
   </div>

   <!-- in cijfers section -->
   <div>
    <h2 class="text-3xl font-bold text-center my-4">Onze werk in cijfers</h2>
    <div id="container-section-cijfers" class="flex md:flex-row flex-col justify-between px-20 py-15">
      <!-- in vijf jaar tijd -->
        <div class="flex flex-col ml-3 mb-10">
            <span class="mdi mdi-calendar-text-outline md:text-9xl text-7xl text-center"></span>
            <h3 class="text-3xl ">In vijf jaar tijd</h3>
            <p>We hebben 100 levens gered <br> of makkelijker gemaakt!!</p>
        </div>
        <!-- drie generaties -->
        <div class="flex flex-col ml-3 mb-10">  
            <span class="mdi mdi-human-male-board-poll md:text-9xl text-7xl text-center"></span>
            <h3 class="text-3xl">Met behulp <br> Deelnemers</h3>
            <p>Met behulp van 167 duizend <br> noorderlingen</p>
        </div>
        <div class="flex flex-col ml-3 mb-10">
            <span class="mdi mdi-account-group md:text-9xl text-7xl text-center"></span>
            <h3 class="text-3xl">Drie generaties</h3>
            <p>We hebben 100 levens gered <br> of makkelijker gemaakt!!</p>
        </div>
    </div>
   </div>


   </div>
        <!-- JavaScript -->
        <script src="js/jaarboek.js"></script>
    </body>

</html>
