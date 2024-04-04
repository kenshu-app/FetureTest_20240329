@extends('layouts.app')

@section('content')
    <h1>書籍情報編集</h1>
    <form action="{{ route('books.update', $book->id) }}" method="post" novalidate>
        @method('patch')
        @include('books.form')
        <p><input type="submit" value="更新"></p>
    </form>
@endsection
