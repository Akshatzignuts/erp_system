<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class='right'>
        <div class="top">
            <button id="menu-bar">
                <span class="material-symbols-outlined">menu</span>
            </button>
        
        <div class="theme-toggler">
            <span class="material-symbols-outlined active">light_mode</span>
            <span class="material-symbols-outlined">dark_mode</span>
        </div>
        
        <div class="profile">
            <div class="info">
              
                <p><b>{{ $user->first_name }} {{ $user->last_name }}</b></p>
                <p>{{$user->email}}</p>
                <small class="text-muted"></small>
              
            </div>
        
            <div class="profile-photo">
                <img src="https://i.postimg.cc/k5kz0TjQ/1381511-588644811197844-1671954779-n.jpg" alt="image">
            </div>
        </div>
        </div>
        </div>
</body>
</html>
