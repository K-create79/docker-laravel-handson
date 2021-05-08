<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;
    //テーブル明
    protected $table = "memos";
    
    //可変項目
    protected $fillable =
    [
        'title',
        'memo',
        'id',
        'timestamps'
    ];
}
