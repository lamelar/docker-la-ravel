<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skill';

    protected $fillable = [
        'category_code',
        'content',
        'created_at',
        'updated_at'
    ];

    public function InsertSkill($request)
    {
        // リクエストデータを基に管理マスターユーザーに登録する
        return $this->create([
            'category_code'             => $request->category_code,
            'content'                   => $request->content,
        ]);
    }
}
