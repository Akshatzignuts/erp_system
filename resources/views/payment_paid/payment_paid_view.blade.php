<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Webpage</title>
    <link href="{{  asset('assets/css/style.css')  }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <div class="container">
        @include('common.sidebar')     
        <main>
            
        </main>  
        <div class="right">
            @include('common.header')
        </div>
    </div>
    @include('common.footer')
    <script src="{{ asset('assets/script/script.js')  }}"></script>
</body>
</html>