<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- importo i file js e css presenti in resources -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

{{$slot}}
    
</body>
</html>