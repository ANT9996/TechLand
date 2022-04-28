<?php

namespace App\Http\Controllers;

use App\Models\Lang;
use App\Models\Themes;
use Illuminate\Http\Request;

class TechLandController extends Controller
{
    public function catalog() {
        $data = Lang::all();
        return view('catalog', ['data' => $data]);
    }

    public function lang(Request $r) {
        $lang = Lang::find($r->lang);
        $data = Themes::where('lang_id', $r->lang)->get();
        return view('lang_themes_list', ['data' => $data, 'id' => $lang, 'name' => $lang->name]);
    }

    public function create_theme_form(Request $r) {
        return view('create_theme', ['id_lang' => $r->id, 'name_lang' =>$r->name]);
    }

    public function add_lang(Request $r) {
        $t = new Lang();
        $t->id = NULL;
        $t->name = $r->name;
        $t->c_themes = 0;
        $t->c_answers = 0;
        $t->created_at = date('Y-m-d H:i:s');
        $t->updated_at = date('Y-m-d H:i:s');
        $t->save();
        return redirect()->route('catalog');
    }

    public function theme(Request $r) {
        $data = Themes::find($r->theme);
        return view('theme', ['data' => $data]);
    }
}
