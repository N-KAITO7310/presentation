<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>presentation</title>
    </head>
    <body>
		<header>
			<!-- サイト名とサイトの説明-Start -->
			<h1>就職プレゼンテーションの練習サイトです</h1>
			<p>他の人の作品に感想やアドバイスなどを入れてください！</p>
			<!-- サイト名とサイトの説明-End -->

			<!-- ログインメニュー-Start -->
			@if (Route::has('login'))
				@auth
					<!-- ログアウトボタン-Start -->
					<a href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();" >
						logout
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
					<!-- ログアウトボタン-Start -->
				@else
					<a href="{{ route('login') }}">Login</a>

					@if (Route::has('register'))
						<a href="{{ route('register') }}">Register</a>
					@endif
				@endauth
			@endif
			<!-- ログインメニュー-End -->
		</header>
    </body>
</html>
