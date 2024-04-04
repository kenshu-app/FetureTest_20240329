@extends('layouts.app')

@section('content')
    <h1>書籍情報</h1>
    <p>
        @if ($book->user_id == Auth::id())
            <a href="{{ route('books.edit', $book->id) }}">編集する</a>
            |
            <a href="#" onclick="deleteBook()">削除する</a>
            <form action="{{ route('books.destroy', $book) }}" method="post" id="delete-form">
                @csrf
                @method('delete')
            </form>
            <script>
                function deleteBook() {
                    event.preventDefault()
                    if (confirm('本当に削除しますか?')) {
                        document.getElementById('delete-form').submit()
                    }
                }
            </script>
        @else
        @endif
            <dl>
                <dt>タイトル</dt>
                <dd>{{ $book->title }}</dd>
                <dt>著者</dt>
                <dd>{{ $book->author }}</dd>
                <dt>出版社</dt>
                <dd>{{ $book->publisher }}</dd>
                <dt>投稿者</dt>
                <dd>{{ $book->user->name }}</dd>
                <dt>感想文</dt>
                <dd>{!! nl2br(e($book->review)) !!}</dd>
            </dl>
        @endsection
