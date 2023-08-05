<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="POST" action="/update">
    @csrf
    
    <input type="text" name="category_code" value="{{$item->category_code}}">
    <input type="text" name="content" value="{{$item->content}}">

    <input type="hidden" name="id" value="{{$item->id}}">
    <button type="submit">更新</button>
    <input type="submit" formaction="/delete" value="削除">

</form>
</body>
</html>