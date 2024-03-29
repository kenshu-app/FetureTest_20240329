<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蔵書アプリ</title>
</head>

<body>
    <h1>書籍新規作成</h1>
    <form action="{{ route('books.store') }}" method="post" novalidate>
        @csrf
        <dl>
            <dt>タイトル</dt>
            <dd><input type="text" name="title"></dd>
            <dt>著者</dt>
            <dd><input type="text" name="author"></dd>
            <dt>出版社</dt>
            <dd><input type="text" name="published_on"></dd>
        </dl>
        <p><input type="submit" value="登録する"></p>
    </form>
    <p><a href="/">戻る</a></p>
</body>

</html>
