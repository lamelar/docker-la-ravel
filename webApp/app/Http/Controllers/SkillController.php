<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Skill;
use App\Rules\UpperAlpha;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->skill = new SKill();
    }

    function show(Request $request, Response $response){
        $items = DB::table('skill')->paginate(10);
        return view('skill.index',['items' => $items]);
    }

    function show_detail(){
        return view('skill.detail');
    }

    function post(Request $request, Response $response){
        $request->validate([
            'category_code' => ['required', 'max:3', new UpperAlpha],
            'content' => ['required', ] ,
        ]);
    
        $request->category_code;
        $request->content;
        
        $this->skill->InsertSkill($request);

        $items = DB::table('skill')->paginate(10);
        return view('skill.index',['items' => $items]);
    }

    function edit($id){
        $item = Skill::find((int)$id);
        return view('skill.edit',['item' => $item]);

    }

    public function update(Request $request, Response $response)
    {
        $skill = Skill::find($request->id);

        $skill->category_code = $request->category_code;
        $skill->content = $request->content;

        $skill->save();

        $items = DB::table('skill')->paginate(10);
        return view('skill.index',['items' => $items]);
    }

    public function delete(Request $request, Response $response)
    {
        $skill = Skill::find($request->id);

        $skill->delete();

        $items = DB::table('skill')->paginate(10);
        return view('skill.index',['items' => $items]);
    }

    function index(Request $request, Response $response){

        $items = Skill::where('category_code', '=', $request->category_code)->paginate(10);

        return view('skill.index',['items' => $items]);
    }
}
