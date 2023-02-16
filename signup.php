<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARYC | Aanmelden</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/tailwind.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <?php
    // Mail verstuur systeem
    if (isset($_POST['aanmelden'])) {
        require("./php/aanmelding.php");
        sendMail($_POST);
    }

    require("components/header.php");
    ?>
    <main>
        <div class="flex justify-center items-center">
            <div class="container mx-auto my-4 px-4 lg:px-20">
                <form method="POST">
                    <div class="bg-primarycolor w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
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
                              focus:outline-none focus:shadow-outline bg-secondarycolor">
                                Aanmelden
                            </button>
                        </div>
                    </div>
                </form>

                <div class="w-full lg:-mt-96 lg:w-2/6 px-8 py-12 ml-auto bg-secondarycolor rounded-2xl">
                    <div class="flex flex-col text-white">
                        <h1 class="font-bold uppercase text-4xl my-4">Vul hier in!</h1>
                        <p class="text-black">Vul in dit formulier uw team em teamleden in zodat wij dit kunnen gebruikten!</p>
                        <div class="flex my-4 w-2/3 lg:w-1/2">
                            <div class="flex flex-col">
                                <h2 class="text-2xl mb-2 font-bold">Contact:</h2>
                                <p class="text-black">Tel: <a href="tel:0612345687">0612345687</a></p>
                                <p class="text-black">Email: <a href="mailto:info@aletta.com">info@aletta.com</a></p>
                            </div>
                        </div>
                        <div class="flex my-4 w-2/3 lg:w-1/2">
                            <a href="https://www.facebook.com/ENLIGHTENEERING/" target="_blank" rel="noreferrer" class="rounded-full bg-white h-8 w-8 inline-block mx-1 text-center pt-1">
                                <i class="fab fa-facebook-f text-blue-900" />
                            </a>
                            <a href="https://www.linkedin.com/company/enlighteneering-inc-" target="_blank" rel="noreferrer" class="rounded-full bg-white h-8 w-8 inline-block mx-1 text-center pt-1">
                                <i class="fab fa-linkedin-in text-blue-900" />
                            </a>
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