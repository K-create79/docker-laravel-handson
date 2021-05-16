<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>メモ作成完了</title>
</head>
<body>
  <h1>メモ作成完了</h1>
  <h2>タイトル</h2><br>
  <p><?php echo  $_POST["title"] ?? 'error'; ?></p><br>
  <h2>メモ内容</h2><br>
  <p><?php echo  $_POST["memo"] ?? 'error'; ?></p><br>
  <a href="/createMemo">メモを作成する</a><br>
  <a href="/">一覧に戻る</a>
</body>
</html>