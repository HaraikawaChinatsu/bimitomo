<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
       
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="crossorigin="anonymous">
        </script>
    </head>
    
  <header>
    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav class="globalMenuSp">
        <ul>
            <li><a href="#">Menu1</a></li>
            <li><a href="#">Menu2</a></li>
            <li><a href="#">Menu3</a></li>
            <li><a href="#">Menu4</a></li>
            <li><a href="#">Menu5</a></li>
        </ul>
    </nav>
　</header>


    <body>
      <div class="logo">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Bimitomo
                </div>
            <div class="sibling-fade">
               <a href="">新規登録</a>
               <a href="">ログイン</a>
             </div>

           <!--           <p>!! link_to_route'signup.get', 'Sign up now!', [], ['class' => 'sibling-fade']) !!}</p>-->
　　　　　　　　　　　<!--<p>!! link_to_route'login', 'Login', [], ['class' => 'sibling-fade']) !!}</p>　-->
            </div>
            </div>
        </div>
      </div>
      <script src="{{ asset('/js/welcome.js') }}"></script>
      <!--jsの読み込み-->
    </body>
</html>
