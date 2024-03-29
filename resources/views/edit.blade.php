<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蔵書アプリ</title>
</head>

<body>
    <h1>書籍情報の編集</h1>
    <form action="{{ route('books.update', $book->id) }}" method="post" novalidate>
        @csrf
        @method('patch')
        <dl>
            <dt>タイトル</dt>
            <dd><input type="text" name="title" value="{{ $book->title }}"></dd>
            <dt>著者</dt>
            <dd><input type="text" name="author" value="{{ $book->author }}"></dd>
            <dt>出版社</dt>
            <dd><input type="text" name="published_on" value="{{ $book->published_on }}"></dd>
        </dl>
        <p><input type="submit" value="更新する"></p>
    </form>
    <p><a href="/">戻る</a></p>
</body>

</html>
