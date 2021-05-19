<?php use App\Models\Memo;?>
<?php use App\Http\Controllers\MemoController?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>メモ一覧</title>
  <link rel="stylesheet" href="./../../css/app.css">
</head>
<body>
<a href="/createMemo">メモ作成</a>

<h1>メモ一覧</h1>
<table >
  <tr>
    <th>タイトル</th>
    <th>メモ内容</th>
  </tr>
<?php 
  $all = Memo::all();
  for($i=1; $i<=count($all); $i++ ){
   $memo = Memo::find($i);?>
   <tr>
     <td><?php echo $memo->title;?></td>
     <td><?php echo $memo->memo?></td>
   </tr>
<?php } ?>
</table> 

</body>
</html>