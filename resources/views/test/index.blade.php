<!DOCTYPE HTML>
<html>

<head>
    <title>データベース</title>
</head>

<body>

    <!-- フォームエリア -->
    <h2>入力フォーム</h2>
    <form action="/test" method="POST">
        @csrf
        ID:
        <input name="id">
        名前:
        <input name="name">
        コメント:
        <textarea name="comment" rows="1" cols="40"></textarea>
        <button class="btn btn-success"> 送信 </button>
    </form>
    <hr>

    <!-- 表示エリア -->
    <h1>データベース</h1>
    @isset($test)
    <table>
        <tr>
            <th>id</th>
            <th>name</tH>
            <th>comment</tH>
            <th>insert</tH>
            <th>update</tH>
        </tr>
        @foreach ($test as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->comment }}</td>
            <td>{{ $data->insert_date }}</td>
            <td>{{ $data->update_date }}</td>
        </tr>
        @endforeach
    </table>
    @endisset

</body>

</html>
