<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Sinhvien;

class SinhvienController extends Controller
{
    
    public function index()
    {
        $sinhvien = Sinhvien::paginate(5);
        return view('index',compact('sinhvien'))->with('i',(request()->input('page',1)-1)*5);
        //
    }

    
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sinhvien::create($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao','追加しました!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
