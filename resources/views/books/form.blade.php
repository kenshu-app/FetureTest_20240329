@csrf
<dl>
    <td>タイトル（必須）</td>
    <dd><input type="text" name="title" value="{{ old('title', $book->title) }}"></dd>
    <td>著者</td>
    <dd><input type="text" name="author" value="{{ old('author', $book->author) }}"></dd>
    <td>出版社</td>
    <dd><input type="text" name="publisher" value="{{ old('publisher', $book->publisher) }}"></dd>
    <td>感想文</td>
    <dd>
        <textarea name="review" rows="5">{{ old('review', $book->review) }}</textarea>
    </dd>
</dl>
