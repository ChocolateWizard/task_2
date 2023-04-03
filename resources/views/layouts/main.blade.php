<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filmoteka</title>
    @vite('resources/css/app.css')
</head>

<body class="font-sans bg-onyx-primary text-onyx-contrast">
    <nav class="border-b border-onyx-tint">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6 ">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="#">
                        <img class="w-10" src="{{ asset('storage/icons/Filmoteka_logo_transparent.svg') }}"
                            alt="Filmoteka_logo" />
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0"><a href="#" class="hover:text-mellon-primary">Filmovi</a></li>
                <li class="md:ml-6 mt-3 md:mt-0"><a href="#" class="hover:text-mellon-primary">Serije</a></li>
                <li class="md:ml-6 mt-3 md:mt-0"><a href="#" class="hover:text-mellon-primary">Glumci</a></li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class="bg-onyx-contrast text-onyx-tint rounded-full w-64 px-4 pl-8 py-1"
                        placeholder="Pronadji">
                    <div class="absolute top-0">
                        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </div>
                </div>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#"><img src="{{ asset('storage/icons/Vuk_profilna.png') }}" alt="profilna"
                            class="rounded-full w-8 h-8"></a>
                </div>

            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>
