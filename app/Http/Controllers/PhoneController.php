<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = DB::table('products')->where('classify', 'phone')->paginate(12);
        return view('admin.phone.index', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view('admin.phone.create');
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

        $phone->man_hinh = $request->man_hinh;
        $phone->he_dieu_hanh = $request->he_dieu_hanh;
        $phone->camera_truoc = $request->camera_truoc;
        $phone->camera_sau = $request->camera_sau;
        $phone->ram = $request->ram;
        $phone->bo_nho_trong = $request->bo_nho_trong;
        $phone->dung_luong_pin = $request->dung_luong_pin;

        $phone->sale_off_status = $request->sale_off_status;
        $phone->sale_off_percent = $request->sale_off_percent;
        $phone->sale_off_start = $request->sale_off_start;
        $phone->sale_off_end = $request->sale_off_end;

        $phone->introduce = $request->introduce;


        $phone->save();

        return redirect()->route('phone.create')->with('success','insert new record success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phone = Product::find($id);
        echo view('admin.phone.edit',compact('phone','id'));
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

        $phone->man_hinh = $request->man_hinh;
        $phone->he_dieu_hanh = $request->he_dieu_hanh;
        $phone->camera_truoc = $request->camera_truoc;
        $phone->camera_sau = $request->camera_sau;
        $phone->ram = $request->ram;
        $phone->bo_nho_trong = $request->bo_nho_trong;
        $phone->dung_luong_pin = $request->dung_luong_pin;

        $phone->sale_off_status = $request->sale_off_status;
        $phone->sale_off_percent = $request->sale_off_percent;
        $phone->sale_off_start = $request->sale_off_start;
        $phone->sale_off_end = $request->sale_off_end;

        $phone->introduce = $request->introduce;


        $phone->save();

        return redirect()->route('phone.index')->with('success','update record success');
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
