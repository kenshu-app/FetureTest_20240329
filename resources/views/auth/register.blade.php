@extends('layouts.app')

@section('content')
<h1>会員登録</h1>
@include('commons.flash')
<form action="{{ route('register') }}" method="post" novalidate>
    @csrf
    <p>
        <lavel>名前</lavel><br><input type="text" name="name" value="{{ old('name') }}">
    </p>
    <p>
        <lavel>メールアドレス</lavel><br><input type="email" name="email" value="{{ old('email') }}">
    </p>
    <p>
        <lavel>パスワード</lavel><br><input type="password" name="password" value="">
    </p>
    <p>
        <lavel>パスワード確認</lavel><br><input type="password" name="password_confirmation" value="">
    </p>
    <p><input type="submit" value="会員登録"></p>
</form>
<p>または</p>
<p><a href="{{ route('login') }}">ログイン</a></p>
@endsection
