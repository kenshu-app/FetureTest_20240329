@extends('layouts.app')

@section('content')
<h1>ログイン</h1>
@include('commons.flash')
<form action="{{ route('login') }}" method="post" novalidate>
    @csrf
    <p>
        <lavel>メールアドレス</lavel><br><input type="email" name="email" value="{{ old('email') }}">
    </p>
    <p>
        <lavel>パスワード</lavel><br><input type="password" name="password" value="">
    </p>
    <p><input type="submit" value="ログイン"></p>
</form>
<p>または</p>
<p><a href="{{ route('register') }}">会員登録</a></p>
@endsection
