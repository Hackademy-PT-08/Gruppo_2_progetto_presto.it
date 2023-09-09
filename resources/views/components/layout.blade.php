<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- importo i file js e css presenti in resources -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- blade per lo stile livewire -->
    @livewireStyles
    <script src="https://kit.fontawesome.com/b8bf2cd9cb.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <x-navbar/>

    </header> 
    <main>
        {{$slot}}
    </main>
    
    @include('components.footer')
   
    <!-- blade per il javascript di livewire -->
    @livewireScripts 
</body>
</html>