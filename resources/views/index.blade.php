<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagination laravel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-100">
    <div class="bg-white w-10/12 mx-auto my-8 rounded-lg">
        <header>
            <p class="text-center font-semibold font-serif text-4xl p-10">Pt Deviano</p>
            <nav class="relative flex w-full flex-wrap items-center justify-between bg-blue-400 py-4 text-white shadow-lg hover:text-neutral-700 focus:text-neutral-700">
                <div class="w-full flex-wrap items-center justify-between px-3">
                <nav class="w-full rounded-md" aria-label="breadcrumb">
                <ol class="list-reset ml-2 flex ">
                <li><a class="text-white transition duration-200 hover:text-neutral-600 hover:ease-in-out motion-reduce:transition mx-4" href="/home">Home </a></li>
                <li><a class="text-white transition duration-200 hover:text-neutral-600 hover:ease-in-out motion-reduce:transition mx-4" href="/about">About </a></li>
                <li><a class="text-white transition duration-200 hover:text-neutral-600 hover:ease-in-out motion-reduce:transition mx-4" href="/contact">Contact </a></li>
                <li><a class="text-white transition duration-200 hover:text-neutral-600 hover:ease-in-out motion-reduce:transition mx-4" href="/pegawai">Member</a></li>
                </ol>
                </nav>
            </div>
            </nav>
        </header>
    @yield('konten')
    <footer>
        <p>&copy; <a href="devichr.github.io/portfolio">DevianoChristian</a>. 2023</p>
    </footer>
</div>
</body>
</html>
