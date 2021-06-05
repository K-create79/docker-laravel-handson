<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/')}}/memo/memo.css" rel="stylesheet">
    <title>編集</title>
</head>
<body>
<table>
  <tr>
    <th>タイトル</th>
    <th>メモ内容</th>
  </tr>
  <form action="/deletedMemo/{{$id}}" method="POST">
  @csrf
  <tr>
    <td> <?php echo $title; ?> </td>
    <td> <?php echo $body; ?> </td>
  </tr>
  
    <h1>削除します よろしいですか？</h1>
    
      <button>削除する</button><br>
    </form>
    <a href="/">一覧に戻る</a>
</body>
</html>