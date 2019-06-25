<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Template;
use App\User;
use Session; 


class TemplateController extends Controller
{
    public function index()
    {
        $template = Template::paginate(10);
        return view('dashboard.template.index', compact('template'));
    }
    public function select($id)
    {
        $template = Template::find($id);
        $template->selected = 1;
        Session::flash('success', 'berhasil merubah template');
        return back();
    }
}
