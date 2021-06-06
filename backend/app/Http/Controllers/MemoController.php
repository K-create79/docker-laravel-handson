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
    public function createMemo (){
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

    public function deleteMemo($id){
        $memo = Memo::find($id);
        $body = $memo->memo;
        $title = $memo->title;
        $id = $memo->id;
        return view('memo.deleteMemo',compact('id','body','title'));
    }

    public function deletedMemo($id){
        Memo::destroy($id);
        return view('memo.deletedMemo');
    }

    public function main(){
        return view('memo.main');
    }

    public function editedMemo($id , Request $request){
        $title = $request->input('title');
        $body = $request->input('memo');      
        Memo::find($id) -> update(['title' -> $title,
                                    'memo' -> $body
                                  ]);
        return view('memo.editedMemo');
    }
}

    
