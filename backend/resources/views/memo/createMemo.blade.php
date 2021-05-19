<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>メモ一覧</title>
</head>
<body>
<h1>メモ作成</h1>
  <form method="POST" action="{{ url('/createdMemo') }}">
    {{ csrf_field() }}
    <h2>タイトル</h2><br>
    <input type="text" name="title" value="{{$title ?? ''}}">
    <h2>メモ内容</h2><br>
    <input type="text" name="memo" value="{{$memo ?? ''}}">
    <button type="submit" name="createdMemo">メモ作成</button>
  </form>

<a href="/">戻る</a>
</body>
</html>