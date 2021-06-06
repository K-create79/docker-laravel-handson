<?php use App\Models\Memo;?>
<?php use App\Http\Controllers\MemoController;?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('css/')}}/memo/memo.css" rel="stylesheet">  
  <title>メモ作成</title>
</head>
<body>
<h1>メモ作成</h1>

  
    
   
    <?php if(isset($_POST['title']) ){
            $id = $_POST['title'];
            $memo = Memo::find($id);
            echo "<h2>"."メモを編集して下さい！"."</h2>" ;?>
            <form method="POST" action="/editedMemo/{{$memo->id}}" enctype="multipart/form-data">@csrf
               <h2>タイトル</h2><br>
               <textarea name="title" cols="30" rows="10">{{ $memo->title ?? ""}}</textarea>
               <h2>メモ内容</h2><br> 
               <textarea name="memo" cols="30" rows="10">{{ $memo->memo ?? ""}}</textarea>
               <button type="submit">メモ編集</button>
            </form>
     <?php }elseif(isset($_POST['memo'])){
            $id = $_POST['memo'];
            $memo = Memo::find($id);
            echo "<h2>"."メモを編集して下さい！"."</h2>" ; ?>
            <form method="POST" action="/editedMemo/{{$memo->id}}" enctype="multipart/form-data">@csrf
               <h2>タイトル</h2><br>
               <textarea name="title" cols="30" rows="10">{{ $memo->title ?? ""}}</textarea>
               <h2>メモ内容</h2><br> 
               <textarea name="memo" cols="30" rows="10">{{ $memo->memo ?? ""}}</textarea>
               <button type="submit">メモ編集</button>
            </form>
     <?php }else{
            echo "<h2>"."メモを作成して下さい！"."</h2>" ; ?>
            <form method="POST" action="/createdMemo" enctype="multipart/form-data">@csrf
              <h2>タイトル</h2><br>
              <textarea name="title" cols="30" rows="10">{{ $memo->title ?? ""}}</textarea>
              <h2>メモ内容</h2><br> 
              <textarea name="memo" cols="30" rows="10">{{ $memo->memo ?? ""}}</textarea>
              <button type="submit" name="createdMemo">メモ作成</button>
            </form>
    <?php }?> 
  

<a href="/">戻る</a>
</body>
</html>