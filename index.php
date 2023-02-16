<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/tailwind.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <?php
        require("components/header.php");
    ?>
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
        <!-- <section>
            <div class="kyano-section">
                <div class="kyano-content">
                    <div class="kyano-content-text text-white text-xl">
                        <p>Hoe kan de inspanning van studenten in het volksgezondheidsonderwijs tot impact leiden? Dat was de kernvraag die leidde tot Aletta’s Regional Year Challenge. 
                            Het antwoord: door de inspanningen op elkaar af te stemmen en de organisaties te verbinden rond één volksgezondheidsuitdaging. Om hun werk te ondersteunen, 
                            ontvangen studenten een Lifelines-dataset die speciaal is ontwikkeld voor het betreffende onderwerp. 
                            Vorig jaar hebben we met succes de eerste ronde van Aletta's Regional Year Challenge getest.
                        </p>
                    </div>
                    <div>   
                        <img class="image-1 hidden lg:mt-0 lg:col-span-5 lg:flex" src="img/aletta-trophy-logo.png" alt="aletta-tropy-img">
                    </div>
                </div>
            </div>
        </section>
        <section class="grid grid-cols-1 sm:grid-cols-2">
            <div class="call-to-action h-6">
                <img class="h-180" src="img/Regional-Year-Challenge-AJSPH.jpg" alt="#">
                <div class="call-to-action-overlay opacity-70 w-full h-full bg-secondarycolor"></div>
                <p class="call-to-action-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta mollitia quas fuga aspernatur dolor tenetur, repellendus delectus facilis temporibus perspiciatis quam optio rerum accusamus possimus dolore voluptate molestias officia provident.</p>
            </div>
            <div class="call-to-action-2">
                <img src="img/Wiskunde_1_atrium-small.jpg" alt="#">
                <div class="call-to-action-overlay bg-secondarycolor"></div>
                <p class="call-to-action-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta mollitia quas fuga aspernatur dolor tenetur, repellendus delectus facilis temporibus perspiciatis quam optio rerum accusamus possimus dolore voluptate molestias officia provident.</p>
            </div>
        </section> -->
        <!-- <div class="relative">
            <div class="absolute w-full bg-blue-400 h-80"></div>
            <section class="relative max-w-7xl mx-auto px-6 md:px-8 py-40">
            
                <h1 class="max-w-2xl mb-4 text-3xl font-extrabold tracking-tight leading-none md:text-4xl xl:text-5xl dark:text-white">Over ons</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus at, illum asperiores quis rerum commodi nulla sit explicabo, provident quibusdam nam voluptatum. Ea, alias cupiditate? Dolorem corrupti facilis velit ducimus?</p>
            
            
            </section>
        </div> -->

        <div class="relative outline outline-red-400 h-[100vh] w-screen overflow-x-hidden -top-32 md:-top-56">
            <svg class="absolute w-[200%] fill-secondarycolor h-full -left-3/4" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true" fill="">
                <polygon points="0 40, 100 0, 100 100, 0 70" />
            </svg>
            <section class=" mx-auto px-6 md:px-8 py-20">
                <h1 class="max-w-2xl mb-4 text-3xl font-extrabold tracking-tight leading-none md:text-4xl xl:text-5xl dark:text-white">Over ons</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus at, illum asperiores quis rerum commodi nulla sit explicabo, provident quibusdam nam voluptatum. Ea, alias cupiditate? Dolorem corrupti facilis velit ducimus?</p>
            </section>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus at, illum asperiores quis rerum commodi nulla sit explicabo, provident quibusdam nam voluptatum. Ea, alias cupiditate? Dolorem corrupti facilis velit ducimus?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus at, illum asperiores quis rerum commodi nulla sit explicabo, provident quibusdam nam voluptatum. Ea, alias cupiditate? Dolorem corrupti facilis velit ducimus?</p>
    </main>
    <?php
        require("components/footer.php");
    ?>
</body>

</html>