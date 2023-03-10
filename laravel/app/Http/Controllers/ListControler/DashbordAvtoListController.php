<?php

namespace App\Http\Controllers\ListControler;

use App\Http\Controllers\Controller;
use App\Models\dashbord_list;
use Illuminate\Http\Request;

class DashbordAvtoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**передаю модель в переменнную*/
        $avtoList = dashbord_list::orderBy('created_at','desc')->get();

        /**передаю перменную в шаблон*/
        return view('main_menu.index',[
            'avtoList' => $avtoList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main_menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_avtoList = new dashbord_list();

        $new_avtoList -> number = $request ->number;
        $new_avtoList -> type_avto = $request ->type_avto;
        $new_avtoList -> seson_year = $request ->seson_year;


        $new_avtoList -> save();

        return redirect()->back()->withSuccess('Запись добаленна');
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
    public function edit(dashbord_list $avtoList)
    {
        return view('main_menu.edit',[
            'avtoList' => $avtoList
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Models\dashbord_list $avtoList
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dashbord_list $avtoList)
    {
        $avtoList -> number = $request ->number;
        $avtoList -> type_avto = $request ->type_avto;
        $avtoList -> seson_year = $request ->seson_year;

        $avtoList -> save();

        return redirect()->back()->withSuccess('Запись обновленна');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(dashbord_list $avtoList)
    {
        $avtoList -> delete();

        return redirect()->back()->withSuccess('Запись удалена');
    }
}
