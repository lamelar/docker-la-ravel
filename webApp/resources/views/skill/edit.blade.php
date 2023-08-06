<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/skill/edit.css">
</head>
<body>
<form method="POST" action="/update">
    @csrf
    <div>
        <label for="category_code">Category</label>
        <input id="category_code" type="text" name="category_code" value="{{$item->category_code}}">
    </div>
    <div>
        <label for="content">Content</label>
        <input id="content" type="text" name="content" value="{{$item->content}}">
    </div>

    <input type="hidden" name="id" value="{{$item->id}}">
    <button type="submit">更新</button>
    <input type="submit" formaction="/delete" value="削除">

</form>
</body>
</html>