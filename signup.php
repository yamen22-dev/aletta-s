<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/tailwind.js"></script>
</head>

<body>
    <header>
        <div class="flex justify-center mt-2">
            <div class="flex items-center">
                <div>
                    <img class="h-60" src="img/aletta-logo-small.svg" alt="Aletta's-regional-year-challenge-logo">
                </div>
                <div>
                    <p>Aletta's regional year challenge</p>
                </div>
            </div>

        </div>
    </header>
    <main>
        <div class="flex justify-center items-center w-screen h-screen">
            <div class="container mx-auto my-4 px-4 lg:px-20">
                <div
                    class="bg-primarycolor w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
                    <div class="flex">
                        <h1 class="font-bold uppercase text-5xl text-white">Aanmelden</h1>
                    </div>
                    <div>
                        <p class="text-white font-bold">Informatie:</p>
                    </div>
                    <!-- <div class="grid grid-cols-1 gap-4 md:grid-cols-2 mt-5"> -->
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
                        <p class="text-white font-bold">Studenten:</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-2">
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="text" name="name-1" placeholder="Naam*" />
                        </div>
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="email" name="email-1" placeholder="Email*" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-2">
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="text" name="naam-2" placeholder="Naam*" />
                        </div>
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="email" name="email-2" placeholder="Email*" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-2">
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="text" name="naam-3" placeholder="Naam*" />
                        </div>
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="email" name="email-3" placeholder="Email*" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-2">
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="text" name="naam-4" placeholder="Naam*" />
                        </div>
                        <div class="col">
                            <input
                                class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="email" name="email-4" placeholder="Email*" />
                        </div>
                    </div>
                    <div class="my-4">
                        <textarea placeholder="Opmerking*"
                            class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                    </div>
                    <div class="my-2 w-1/2 lg:w-1/4">
                        <button class="uppercase text-sm font-bold tracking-wide text-gray-100 p-3 rounded-lg w-full 
                              focus:outline-none focus:shadow-outline bg-secondarycolor">
                            Aanmelden
                        </button>
                    </div>
                </div>

                <div class="w-full lg:-mt-96 lg:w-2/6 px-8 py-12 ml-auto bg-secondarycolor rounded-2xl">
                    <div class="flex flex-col text-white">
                        <h1 class="font-bold uppercase text-4xl my-4">Drop in our office</h1>
                        <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                            tincidunt arcu diam,
                            eu feugiat felis fermentum id. Curabitur vitae nibh viverra, auctor turpis sed, scelerisque
                            ex.
                        </p>

                        <div class="flex my-4 w-2/3 lg:w-1/2">
                            <div class="flex flex-col">
                                <i class="fas fa-map-marker-alt pt-2 pr-2" />
                            </div>
                            <div class="flex flex-col">
                                <h2 class="text-2xl">Main Office</h2>
                                <p class="text-gray-400">5555 Tailwind RD, Pleasant Grove, UT 73533</p>
                            </div>
                        </div>

                        <div class="flex my-4 w-2/3 lg:w-1/2">
                            <div class="flex flex-col">
                                <i class="fas fa-phone-alt pt-2 pr-2" />
                            </div>
                            <div class="flex flex-col">
                                <h2 class="text-2xl">Call Us</h2>
                                <p class="text-gray-400">Tel: xxx-xxx-xxx</p>
                                <p class="text-gray-400">Fax: xxx-xxx-xxx</p>
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
</body>

</html>