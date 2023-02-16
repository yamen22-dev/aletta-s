<?php
    require("components/header.php");
    head("Home");
?>

<body>
    <?php require("components/navbar.php"); ?>
    <main>
        <section class="dark:bg-gray-900">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1
                        class="text-black max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                        Aletta Jacobs School of Public Health</h1>
                    <p class="text-black max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                        Together for more healthy years</p>
                </div>
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                    <img src="img/aletta-transparent-logo.png"
                        alt="Aletta-Jacobs">
                </div>
            </div>
        </section>
        <section>
            <div class="relative h-[100vh] w-screen overflow-x-hidden -top-32 md:-top-56 flex items-center justify-center">
                <svg class="absolute w-[200%] fill-secondarycolor h-full -left-3/4" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true" fill="">
                    <polygon points="0 40, 100 0, 100 100, 0 70">
                </svg>
                <div class="container mx-auto text-center md:text-3xl">
                <section class="mx-auto px-6 md:px-8 py-20">
                    <h1 class="text-white mx-auto relative max-w-2xl mb-4 text-3xl font-extrabold tracking-tight leading-none md:text-4xl xl:text-5xl dark:text-white">Over ons</h1>
                    <p class="text-white mx-auto relative md:leading-10">Hoe kan de inspanning van studenten in het volksgezondheidsonderwijs tot impact leiden? Dat was de kernvraag die leidde tot Aletta’s Regional Year Challenge. Het antwoord: door de inspanningen op elkaar af te stemmen en de organisaties te verbinden rond één volksgezondheidsuitdaging. Om hun werk te ondersteunen, ontvangen studenten een Lifelines-dataset die speciaal is ontwikkeld voor het betreffende onderwerp. Vorig jaar hebben we met succes de eerste ronde van Aletta's Regional Year Challenge getest.</p>
                </section>
                </div>
            </div>
        </section>
        <section>
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
    <div class="rounded overflow-hidden shadow-lg relative">
      <img class="w-full" src="img/card/card-1.png" alt="card-1">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Lifelines</div>
        <p class="text-gray-700 text-base mb-24 relative">
            Lifelines verzamelt en deelt gezondheidsdata van duizenden mensen, zodat we steeds beter weten hoe we gezond oud worden. 
            Onze schat van data stellen we wereldwijd beschikbaar aan iedereen die middels onderzoek een relevante bijdrage wil leveren aan het gezonder oud worden van mensen.
        </p>
      </div>
      <div class="px-6 pb-3 relative bottom-3">
            <a href="https://www.lifelines.nl/" class="flex justify-center bg-secondarycolor p-4 text-white text-lg">Meer informatie</a>
      </div>
    </div>
    <div class="rounded overflow-hidden shadow-lg relative">
      <img class="w-200" src="img/card/card-2.png" alt="card-2">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">UMCG</div>
        <p class="text-gray-700 text-base mb-16 relative">
            Het Universitair Medisch Centrum Groningen (UMCG of UMC Groningen) is een ziekenhuis in de stad Groningen. De drie kerntaken zijn gezondheidszorg, onderwijs en onderzoek. Het ziekenhuis staat in de Groningse wijk Centrum. 
            Het UMCG is het samenwerkingsverband dat op 13 januari 2005 is ontstaan tussen het voormalige Academisch Ziekenhuis Groningen (AZG) en de faculteit der Medische Wetenschappen van de Rijksuniversiteit Groningen.
        </p>
      </div>
      <div class="px-6 pt-4 pb-3 relative bottom-1">
            <a href="https://www.umcg.nl/" class="flex justify-center bg-secondarycolor p-4 text-white text-lg">Meer informatie</a>
      </div>
    </div>
    <div class="rounded overflow-hidden shadow-lg relative">
      <img class="w-200" src="img/card/card-3.png" alt="card-3">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">NHL Stenden</div>
        <p class="text-gray-700 text-base mb-14 relative">
            NHL Hogeschool was van 1987 tot 2018 een onderwijsinstelling voor het hoger onderwijs in Nederland. De hogeschool is na samengaan met Stenden Hogeschool opgegaan in NHL Stenden Hogeschool. De NHL telde meer dan 11.000 studenten en ruim 1.000 medewerkers in Leeuwarden, Groningen, Zwolle en West-Terschelling.
        </p>
      </div>
      <div class="px-6 pt-4 pb-3 relative bottom-0">
            <a href="https://www.nhlstenden.com/" class="flex justify-center bg-secondarycolor p-4 text-white text-lg">Meer informatie</a>
      </div>
    </div>
  </div>
</div>
        </section>


        
    <?php
        require("components/footer.php");
    ?>
</body>

</html>