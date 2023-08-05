<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/skill/index.css">
    </head>
<body>
    <form method="POST" action="/index">
        @csrf
        <input type="text" name="category_code">
        <button type="submit">検索</button>
    </form>

    <a href="{{ url('/detail') }}"> 登録 </a>

    <table>
    <tr><th>ID</th><th>カテゴリーコード</th><th>内容</th>
    <th></th></tr>
    @foreach($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->category_code}}</td>
            <td>{{$item->content}}</td>
            <td><a href="{{ url('/edit')}}/{{$item->id}}">詳細</a></td>
        </tr>
    @endforeach
    </table>

        {{ $items->links() }}

</body>
</html>