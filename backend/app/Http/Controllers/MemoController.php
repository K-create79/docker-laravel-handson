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
    public function createMemo(){
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
}
