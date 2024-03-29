<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
<header>
    <div class="container"><a href="/" class="brand">{{ config('app.name') }}</a></div>
</header>
<main>
    <div class="container">
        <h1>会員登録</h1>
        <form action="{{ route('register') }}" method="post" novalidate>
            @csrf
            <p><lavel>名前</lavel><br><input type="text" name="name" value="{{ old('name') }}"></p>
            <p><lavel>メールアドレス</lavel><br><input type="email" name="email" value="{{ old('email') }}"></p>
            <p><lavel>パスワード</lavel><br><input type="password" name="password" value=""></p>
            <p><lavel>パスワード確認</lavel><br><input type="password" name="password_confirmation" value=""></p>
            <p><input type="submit" value="会員登録"></p>
            <p>または</p>
            <p><a href="{{ route('login') }}">ログイン</a></p>
        </form>
    </div>
</main>
</body>
</html>
