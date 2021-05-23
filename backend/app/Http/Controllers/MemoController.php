<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Memo;

class MemoController extends Controller
{
    /*
    メモ一覧を表示
    return@view
    */
    public function showList(){
        $memos = array();
        for($i=1; $i<=4; $i++){
            $memo = Memo::find($i);
            $memos[] = $memo;
        }
        return view('memo.showMemos');
    }

    /*
    メモ作成
    return@view
    */
    public function createMemo ( /* Request $request */){
        //request::all()でデータを取れていない可能性高い
       /* $postData = $request::first();
        if($postData == $request->input('title')){
            $title = $request->input('title');
            $memo = Memo::where('title',$title)->first();
            return view('memo.createMemo' , compact('memo'));
        }else{
            $memo = $request->input('memo');
            $memo = Memo::where('memo',$memo)->first();
            return view('memo.createMemo' , compact('memo')); 
             }*/
        return view('memo.createMemo');
    }

    /*
    メモ作成完了
    param request@title @memo
    create memosTable @title @memo
    return@view
    */

    public function createdMemo(Request $request){

        $title = $request->input('title');
        $memo = $request->input('memo');

        $createdMemo = Memo::create([
            'title' => $title,
            'memo' => $memo           
        ]);

        return view('memo.createdMemo');
    }

    public function deleteMemo(){
        return view('memo.deleteMemo');
    }
}

    
