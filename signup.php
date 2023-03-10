<?php
    require("components/header.php");
    head("Aanmelden");
?>


<body>
    <?php
    // Mail verstuur systeem
    if (isset($_POST['aanmelden'])) {
        require("./php/aanmelding.php");
        sendMail($_POST);
    }

    require("components/navbar.php");
    ?>
    <main>
        <div class="flex justify-center items-center mb-32">
            <div class="container mx-auto my-4 px-4 lg:px-20">
                <form method="POST">
                    <div class="bg-secondarycolor w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
                        <div class="flex">
                            <h1 class="font-bold uppercase text-5xl text-white">Aanmelden</h1>
                        </div>
                        <div>
                            <p class="text-white font-bold mt-3">Informatie:</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col">
                                <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" name="teamnaam" placeholder="Teamnaam*" />
                            </div>
                            <div class="col">
                                <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" name="school-opleiding" placeholder="School en Opleiding*" />
                            </div>
                        </div>
                        <div>
                            <p class="text-white font-bold mt-3">Studenten:</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-2">
                            <div class="col">
                                <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" name="naam_1" placeholder="Naam*" />
                            </div>
                            <div class="col">
                                <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="email" name="email_1" placeholder="Email*" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-2">
                            <div class="col">
                                <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" name="naam_2" placeholder="Naam*" />
                            </div>
                            <div class="col">
                                <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="email" name="email_2" placeholder="Email*" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-2">
                            <div class="col">
                                <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" name="naam_3" placeholder="Naam*" />
                            </div>
                            <div class="col">
                                <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="email" name="email_3" placeholder="Email*" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-2">
                            <div class="col">
                                <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" name="naam_4" placeholder="Naam*" />
                            </div>
                            <div class="col">
                                <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="email" name="email_4" placeholder="Email*" />
                            </div>
                        </div>
                        <div class="my-4">
                            <textarea placeholder="Opmerking" name="opmerkingen" type="text" class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                        </div>
                        <div class="my-2 w-1/2 lg:w-1/4">
                            <button type="submit" name="aanmelden" class="uppercase text-sm font-bold tracking-wide text-gray-100 p-3 rounded-lg w-full 
                              focus:outline-none focus:shadow-outline bg-primarycolor">
                                Aanmelden
                            </button>
                        </div>
                    </div>
                </form>

                <div class="w-full lg:-mt-96 lg:w-2/6 px-8 py-12 ml-auto bg-primarycolor rounded-2xl">
                    <div class="flex flex-col text-white">
                        <h1 class="font-bold uppercase text-4xl my-4 text-white">Vul hier in!</h1>
                        <p class="text-black">Vul in dit formulier uw team em teamleden in zodat wij dit kunnen gebruikten!</p>
                        <div class="flex my-4 w-2/3 lg:w-1/2">
                            <div class="flex flex-col">
                                <h2 class="text-2xl mb-2 font-bold text-white">Contact:</h2>
                                <p class="text-black">Tel: <a href="tel:0612345687">0612345687</a></p>
                                <p class="text-black">Email: <a href="mailto:info@aletta.com">info@aletta.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   <?php
    require("components/footer.php");
    ?>
    </main>
    <script src="js/signup.js">
    </script>
</body>

</html>