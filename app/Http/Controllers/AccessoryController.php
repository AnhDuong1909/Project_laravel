<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = DB::table('products')->where('classify', 'accessory')->paginate(12);
        return view('admin.accessory.index', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view('admin.accessory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'classify' => 'required',
            'name' => 'required',
            'manufacturer' => 'required',
            'nsx' => 'date',
            'price' =>'required|numeric',
            'status' => 'required',

            'man_hinh' => '',
            'he_dieu_hanh' => '',
            'camera_truoc' => '',
            'camera_sau' => '',
            'ram' => '',
            'bo_nho_trong' => '',
            'dung_luong_pin' => '',
          
            'sale_off_status' => 'required',
            'sale_off_percent' => 'numeric|min:0|max:100',
            'sale_off_start' => 'date',
            'sale_off_end' => 'date',
           
            'introduce' => 'required|max:5000'
        ]);

        $phone = new Product();
        $phone->classify = $request->classify;
        $phone->name = $request->name;
        $phone->manufacturer = $request->manufacturer;
        $phone->nsx = $request->nsx;
        $phone->price = $request->price;
        $phone->status = $request->status;

        $phone->man_hinh = 'null';
        $phone->he_dieu_hanh = 'null';
        $phone->camera_truoc = 'null';
        $phone->camera_sau = 'null';
        $phone->ram = 'null';
        $phone->bo_nho_trong = 'null';
        $phone->dung_luong_pin = 'null';

        $phone->sale_off_status = $request->sale_off_status;
        $phone->sale_off_percent = $request->sale_off_percent;
        $phone->sale_off_start = $request->sale_off_start;
        $phone->sale_off_end = $request->sale_off_end;

        $phone->introduce = $request->introduce;


        $phone->save();

        return redirect()->route('accessory.create')->with('success','insert new record success');
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
        $accessory = Product::find($id);
        echo view('admin.accessory.edit',compact('accessory','id'));

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
        $this->validate($request,[
            // 'classify' => 'required',
            'name' => 'required',
            'manufacturer' => 'required',
            'nsx' => 'date',
            'price' =>'required|numeric',
            'status' => 'required',

            'man_hinh' => '',
            'he_dieu_hanh' => '',
            'camera_truoc' => '',
            'camera_sau' => '',
            'ram' => '',
            'bo_nho_trong' => '',
            'dung_luong_pin' => '',
          
            'sale_off_status' => 'required',
            'sale_off_percent' => 'numeric|min:0|max:100',
            'sale_off_start' => 'date',
            'sale_off_end' => 'date',
           
            'introduce' => 'required|max:5000'
        ]);

        $phone = Product::find($id);
        // $phone->classify = $request->classify;
        $phone->name = $request->name;
        $phone->manufacturer = $request->manufacturer;
        $phone->nsx = $request->nsx;
        $phone->price = $request->price;
        $phone->status = $request->status;

        $phone->man_hinh = 'null';
        $phone->he_dieu_hanh = 'null';
        $phone->camera_truoc = 'null';
        $phone->camera_sau = 'null';
        $phone->ram = 'null';
        $phone->bo_nho_trong = 'null';
        $phone->dung_luong_pin = 'null';

        $phone->sale_off_status = $request->sale_off_status;
        $phone->sale_off_percent = $request->sale_off_percent;
        $phone->sale_off_start = $request->sale_off_start;
        $phone->sale_off_end = $request->sale_off_end;

        $phone->introduce = $request->introduce;


        $phone->save();

        return redirect()->route('accessory.index')->with('success','update record success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phone = Product::find($id);
        $phone->delete();

        return redirect(url()->previous())->with('success','Delete success');
    }
}
