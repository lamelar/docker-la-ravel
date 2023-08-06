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
        <input id="category_code" type="text" name="category_code" value="{{old('category_code')}}">
    </div>
    @if ($errors->has('category_code'))
    <div>
        {{$errors->first('category_code')}}
    </div>
    @endif
    <div>
        <label for="content">Content</label>
        <input id="content" type="text" name="content" value="{{old('content')}}">
    </div>
    @if ($errors->has('content'))
    <div>
        {{$errors->first('content')}}
    </div>
    @endif
    <button type="submit">登録</button>


    <a href="{{ url('/skill') }}"> 戻る </a>
</form>
</body>
</html>