<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo App</title>
    @yield('styles')
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/">ToDo App</a>
            <div class="my-navbar-control">
                <!-- ログインユーザーの取得 -->
                <!-- Auth::check() :ログイン状態を確認する関数（ログイン状態でtrueを返す） -->
                @if(Auth::check())
                <!-- ログイン時にユーザー名を表示する -->
                <span class="my-navbar-item">ようこそ, {{ Auth::user()->name }}さん</span>
                ｜
                <a href="#" id="logout" class="my-navbar-item">ログアウト</a>
                <!-- ログアウトがクリックされた時にイベントスクリプトと処理を呼び出す -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    <!-- セキュリティ対策：@csrf は、CSRFトークンを含んだ input 要素を出力します -->
                    @csrf
                </form>
                @else
                <a class="my-navbar-item" href="{{ route('login') }}">ログイン</a>
                ｜
                <a class="my-navbar-item" href="{{ route('register') }}">会員登録</a>
                @endif
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    @yield('scripts')
</body>

</html>