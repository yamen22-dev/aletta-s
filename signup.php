<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php require('./php/aanmelding.php'); ?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARYC | Aanmelden</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/tailwind.js"></script>
</head>

<body>
    <header>
        <div>
	        <a href="index.php" class="flex justify-center mt-4">
		        <img class="h-28 mr-19" src="img/aletta-blue-logo.png" alt="Logo">
	        </a>
        </div>
    </header>
    <main>
        <div class="flex justify-center items-center">
            <div class="container mx-auto my-4 px-4 lg:px-20">
                <form method="POST">
                <div
                    class="bg-primarycolor w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
                    <div class="flex">
                        <h1 class="font-bold uppercase text-5xl text-white">Aanmelden</h1>
                    </div>
                    <div>
                        <p class="text-white font-bold mt-3">Informatie:</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="text" name="teamnaam" placeholder="Teamnaam*" />
                        </div>
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="text" name="school-opleiding" placeholder="School en Opleiding*" />
                        </div>
                    </div>
                    <div>
                        <p class="text-white font-bold mt-3">Studenten:</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-2">
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="text" name="name_1" placeholder="Naam*" />
                        </div>
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="email" name="email_1" placeholder="Email*" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-2">
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="text" name="name_2" placeholder="Naam*" />
                        </div>
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="email" name="email_2" placeholder="Email*" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-2">
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="text" name="name_3" placeholder="Naam*" />
                        </div>
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="email" name="email_3" placeholder="Email*" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-2">
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="text" name="name_4" placeholder="Naam*" />
                        </div>
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="email" name="email_4" placeholder="Email*" />
                        </div>
                    </div>
                    <div class="my-4">
                        <textarea placeholder="Opmerking"
                            class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
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
                            <a href="https://www.facebook.com/ENLIGHTENEERING/" target="_blank" rel="noreferrer"
                                class="rounded-full bg-white h-8 w-8 inline-block mx-1 text-center pt-1">
                                <i class="fab fa-facebook-f text-blue-900" />
                            </a>
                            <a href="https://www.linkedin.com/company/enlighteneering-inc-" target="_blank"
                                rel="noreferrer"
                                class="rounded-full bg-white h-8 w-8 inline-block mx-1 text-center pt-1">
                                <i class="fab fa-linkedin-in text-blue-900" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="p-4 bg-white sm:p-6 dark:bg-gray-900 mt-5">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
            <div>
	            <a href="index.php" class="flex justify-center mt-7">
		            <img class="h-28 mr-19" src="img/aletta-logo-small.svg" alt="Logo">
		            <span class="font-semibold text-black text-lg mt-2 ml-10 absolute">ARYC</span>
	            </a>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Bekijk ons</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="https://nl.linkedin.com/company/ajsph?trk=public_post_feed-actor-name" class="hover:underline ">Linkedin</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/LifelinesNL/" class="hover:underline">Facebook</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-black sm:text-center">© 2023 <a href="index.php" class="hover:underline">ARYC</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="https://nl.linkedin.com/company/ajsph?trk=public_post_feed-actor-name" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <img class="h-4" src="https://www.svgrepo.com/show/108614/linkedin.svg" alt="linkedin">
                <span class="sr-only">Linkedin pagina</span>
            </a>
            <a href="https://www.facebook.com/LifelinesNL/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="black" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Facebook page</span>
            </a>
        </div>
    </div>
</footer>
</body>

</html>