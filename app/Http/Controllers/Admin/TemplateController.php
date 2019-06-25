<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Template;
use Session;



class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $template = Template::paginate(10);
        return view('dashboard.template.index', compact('template'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('dashboard.template.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $template =  new Template;
        // $template->name = $request->input('name');
        // $template->folder = $request->input('folder');
        // $template->selected = $request->input('selected');
        // $template->save();
        // Session::flash("success", "berhasil menyimpan data");
        // return redirect()->to("dashboard/template");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $template = Template::find($id);
        return view('dashboard/template.edit', compact('template'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $template = Template::find($id);
        $template->name = $request->input('name');
        $template->folder = $request->input('folder');
        $template->selected = $request->input('selected');

        $this->validate($request, [
            'name' => 'required|string|max:100',
            'folder' => 'required|string|max:30',
            'selected' => 'required|string|max:2',
        ]);

        $template->save();
        Session::flash('success', 'berhasil diubah');
        return redirect()->to('dashboard/template');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Template::find($id)->delete();
        Session::flash("success", "berhasil dihapus");
        return back();
    }
    public function selected($id)
    {
        $template = Template::find($id);
        $template->selected = 1;
        Session::flash('success', 'berhasil merubah template');
        return back();
    }
}
