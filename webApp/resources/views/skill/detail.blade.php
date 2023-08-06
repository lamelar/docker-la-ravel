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
    @foreach ($errors->get('category_code') as $error)
        <li>{{ $error }}</li>
    @endforeach
    </div>
    @endif
    <div>
        <label for="content">Content</label>
        <input id="content" type="text" name="content" value="{{old('content')}}">
    </div>
    @if ($errors->has('content'))
    <div>
    @foreach ($errors->get('content') as $error)
        <li>{{ $error }}</li>
    @endforeach
    </div>
    @endif
    <button type="submit">登録</button>


    <a href="{{ url('/skill') }}"> 戻る </a>
</form>
</body>
</html>