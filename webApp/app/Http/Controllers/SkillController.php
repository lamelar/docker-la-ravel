<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Skill;
use App\Http\Requests\SkillRequest;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->skill = new SKill();
    }

    //一覧表示
    function show(Request $request, Response $response){
        \DB::enableQueryLog();
        $items = DB::table('skill')->paginate(10);    
        Log::info(DB::getQueryLog());
        return view('skill.index',compact('items'));
    }

    //ソート
    function sort($key){
        $items = DB::table('skill')->orderBy($key)->paginate(10);
        return view('skill.index',compact('items'));
    }

    //登録画面
    function show_detail(){
        return view('skill.detail');
    }

    //登録処理
    function post(SkillRequest $request, Response $response){
    
        $request->category_code;
        $request->content;
        
        $this->skill->InsertSkill($request);

        $items = DB::table('skill')->paginate(10);
        return view('skill.index',compact('items'));
    }

    //詳細表示
    function edit($id){
        $item = Skill::find((int)$id);
        return view('skill.edit',compact('item'));
    }

    //更新処理
    public function update(SkillRequest $request, Response $response)
    {
        $skill = Skill::find($request->id);

        $skill->category_code = $request->category_code;
        $skill->content = $request->content;

        $skill->save();

        $items = DB::table('skill')->paginate(10);
        return view('skill.index',compact('items'));
    }

    //削除処理
    public function delete(Request $request, Response $response)
    {
        $skill = Skill::find($request->id);

        $skill->delete();

        $items = DB::table('skill')->paginate(10);
        return view('skill.index',compact('items'));
    }

    //検索処理
    
    function index(Request $request, Response $response){

        $items = Skill::where('category_code', '=', $request->category_code)->paginate(10);

        return view('skill.index',compact('items'));
    }
}
