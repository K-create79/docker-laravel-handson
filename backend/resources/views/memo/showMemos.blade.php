<?php use App\Models\Memo;?>
<?php use App\Http\Controllers\MemoController;?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>メモ一覧</title>
  <link href="{{asset('css/')}}/memo/memo.css" rel="stylesheet">
</head>

<body>

<form action="{{url('/createMemo')}}" method="get">
@csrf
<button> メモ作成 </button>
</form>

<h1>メモ一覧</h1> 
<table>
  <tr>
    <th>作成日</th>
    <th>タイトル</th>
    <th>メモ内容</th>
    <th>削除リクエスト</th>
  </tr>
<?php 
  $all = Memo::all();
  for($i=count($all); $i>=1; $i-- ){
    if(null !== Memo::find($i)){
      $memo = Memo::find($i);
    }else{
      continue;
    }
   ?>
   <tr>
   <!--　一旦　createMemo.blade.php に直接.memo.title.のデータを送り、表示してみる-->
     <!-- <form action="{{ url('/createMemo') }}" method="post"> -->
     <form action="/createMemo" method="post">
      @csrf
      <!--一回ボタンを押すとtitleとmemoの両方がpostメソッドでurlに送信される方法を考える-->
          <td> {{$memo->updated_at}} </td>
          <td> <button name="title" value="{{$memo->id}}" >{{$memo -> title}} </button>　</td>
          <td> <button name="memo" value="{{$memo->id}}">{{$memo -> memo}} </button> </td>
      </form>
      <form action="/deleteMemo/{{$memo->id}}" method="post">
      @csrf
          <td>  <button name="{{$memo->id}}" id="{{$memo->id}}"> 削除する </button> </td>
      </form>
   </tr>
<?php } ?>
          
      <td>
        <a href="/">
          <div class="test">
            上に戻る
          </div>
        </a>
      </td>
    
</table> 

</body>
</html>