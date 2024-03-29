@extends('layouts.app')

@section('content')
<form action="{{ route('logout') }}" method="post" novalidate>
    @csrf
    <p><input type="submit" value="ログアウト"></p>
</form>
@endsection
