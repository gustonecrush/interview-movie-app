<!DOCTYPE html>
<html lang="en">
<head>
    {{-- ========== META TAGS =========== --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- ========== TITLE =========== --}}
    <title>{{ $title }} | Movie App</title>

    {{-- ========== CSS LINKS =========== --}}
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-stream-dark font-poppins">

    <div class="mx-auto max-w-screen hidden lg:block">
        @include('layouts.sidebar')
        @include('layouts.content')
    </div>

    <div class="mx-auto px-4 w-full md:w-7/12 h-screen text-red-900 block lg:hidden flex">
        <div class="text-white text-2xl text-center leading-snug font-medium my-auto">
            Sorry, this page only supported on 1024px screen or above
        </div>
    </div>


    {{-- ========== SCRITPS =========== --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src={{ asset('assets/js/script.js') }}></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.watched-movies').removeClass('hidden').flickity({
                // options
                "cellAlign": "left",
                "contain": true,
                "groupCells": 1,
                "wrapAround": false,
                "pageDots": false,
                "prevNextButtons": false,
                "draggable": ">1"
            });
        })

        const axios = require('axios');

        async function getMovies() {
            try {
                const response = await axios.get('https://api.themoviedb.org/3/movie/550?api_key=2e856250c0594b8135bd2d581713f693');
                console.log(response);
            } catch (error) {
                console.error(error);
            }
        }

        getMovies()
    </script>
</body>

</html>
    