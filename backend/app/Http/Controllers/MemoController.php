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
    return@view
    */
    public function createdMemo(){
        
        return view('memo.createdMemo');
    }
}
