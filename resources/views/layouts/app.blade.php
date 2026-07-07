<!doctype html>
<html lang="lv">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>SIA "GAISMA"</title>
    </head>
    <body>
        @include('partials.header')

        <!-- Galvenā satura sadaļa -->
        <main>
            <h1 data-translate="heading">Par uzņēmumu</h1>
            <p data-translate="text">GAISMA pārtikas piegādes pasūtīšanas sistēma ir moderns risinājums ērtai un ātrai pārtikas produktu iegādei. Sistēma ļauj klientiem pārlūkot plašu pārtikas 
               preču katalogu ar precīziem aprakstiem un cenām, viegli veidot un pārvaldīt iepirkumu grozu, izvēlēties piegādes laiku un adresi, kā arī saņemt pasūtījuma 
               apstiprinājumu un piegādes statusa atjauninājumus.</p>
            <img src="{{ asset('images/main-img-mobile.jpg') }}" alt="Uzņēmuma logo">
        </main>

        <!-- Kājene -->
        <footer>SIA "GAISMA" 2026</footer>

    </body>
</html>
