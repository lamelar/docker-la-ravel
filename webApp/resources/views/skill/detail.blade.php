<html>
<head>
    <meta charset="utf-8">
</head>
<body>
詳細ページ
<form method="POST" action="/skill">
    @csrf
    <div>
        <label for="category_code">Category</label>
        <input id="category_code" type="text" name="category_code">
    </div>
    <div>
        <label for="content">Content</label>
        <input id="content" type="text" name="content">
    </div>

    <button type="submit">登録</button>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>