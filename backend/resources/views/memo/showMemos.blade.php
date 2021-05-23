<?php use App\Models\Memo;?>
<?php use App\Http\Controllers\MemoController;?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>メモ一覧</title>
  <link href="css/memo.css" rel="stylesheet">
</head>

<body>

<form action="{{url('/createMemo')}}" method="get">
<button> メモ作成 </button>
</form>

<h1>メモ一覧</h1> 
<table>
  <tr>
    <th>タイトル</th>
    <th>メモ内容</th>
    <th>削除リクエスト</th>
  </tr>
<?php 
  $all = Memo::all();
  for($i=1; $i<=count($all); $i++ ){
   $memo = Memo::find($i);?>
   <tr>
   <!--　一旦　createMemo.blade.php に直接.memo.title.のデータを送り、表示してみる-->
     <!-- <form action="{{ url('/createMemo') }}" method="post"> -->
     <form action="./createMemo" method="post">
      @csrf
      <!--一回ボタンを押すとtitleとmemoの両方がpostメソッドでurlに送信される方法を考える-->
          <td> <button name="title" value="{{$memo->title}}">{{$memo -> title}} </button>　</td>
          <td> <button name="memo" value="{{$memo->memo}}">{{$memo -> memo}} </button> </td>          
      </form>
      <form action="{{url('/deleteMemo')}}" method="post">
      @csrf
          <td>  <button name="delete"> 削除する </button> </td>
      </form>
   </tr>
<?php } ?>
</table> 

</body>
</html>