<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蔵書アプリ</title>
</head>

<body>
    <h1>書籍一覧</h1>
    <p><a href="{{ route('books.create') }}">+新規作成</a></p>
    @foreach ($books as $book)
        <p><a href="/books/{{ $book->id }}">{{ $book->title }}</a></p>
    @endforeach
</body>

</html>
