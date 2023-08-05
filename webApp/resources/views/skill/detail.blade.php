<html>
<head>
    <meta charset="utf-8">
</head>
<body>
詳細ページ
<form method="POST" action="/skill">
    @csrf
    <input type="text" name="category_code">
    <input type="text" name="content">

    <button type="submit">登録</button>
</form>
</body>
</html>