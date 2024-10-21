<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <aside>
        <div class="top">
            <div class="logo">
                <h2>ERP <span class="primary">SYSTEM</span></h2>
            </div>
            <div class="close" id="close-btn">
                <span class="material-symbols-outlined"> close </span>
            </div>
        </div>
        
        <div class="sidebar">
            @foreach ($menu as $item )
            <a href="#">
                <span class="material-symbols-outlined"> grid_view </span>
                <h3>{{$item->menu_name}}</h3>
            </a>    
            @endforeach
            <a>
              
            <form action="{{ route('logout') }}" method="POST" class="logout-button">
                @csrf
                <button type="submit" style="background: transparent; border: none; cursor: pointer; display: flex; align-items: center;">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Logout</h3>
                </button>
                </form>
            </a>
        </div>
    </aside>
    
</body>
</html>
