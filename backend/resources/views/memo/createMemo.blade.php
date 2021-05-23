<?php use App\Models\Memo;?>
<?php use App\Http\Controllers\MemoController;?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="">
  <title>メモ作成</title>
</head>
<body>
<h1>メモ作成</h1>

  <form method="POST" action="{{ url('/createdMemo') }}" enctype="multipart/form-data">
    @csrf
   
    <?php if(isset($_POST['title']) ){
            $title = $_POST['title'];
            $memo = Memo::where('title', $title)->first();
          }elseif(isset($_POST['memo'])){
            $memo = $_POST['memo'];
            $memo = Memo::where('memo', $memo)->first();
          }else{
            echo "<h2>"."メモを作成して下さい！"."</h2>" ;}
    ?> 
    <h2>タイトル</h2><br>
    <textarea name="title" cols="30" rows="10">{{ $memo->title ?? ""}}</textarea>
    <h2>メモ内容</h2><br> 
    <textarea name="memo" cols="30" rows="10">{{ $memo->memo ?? ""}}</textarea>
    <button type="submit" name="createdMemo">メモ作成</button>
  </form>

<a href="/">戻る</a>
</body>
</html>