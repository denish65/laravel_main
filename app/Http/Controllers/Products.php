<?php

namespace App\Http\Controllers;
use App\Models\Addproducts;
use Illuminate\Http\Request;
use DB;
class Products extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $category=DB::table('tbl_addcategories')->pluck("catname","id");
       return view('auth.addproduct',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'catname'=>'required',
            'productname'=>'required',
            'productimage'=>'required',
            'qty'=>'required',
            'price'=>'required',
            'descriptions'=>'required',

        ]);
   

        // upload products image here
        $imageName =rand().'.'.$request->productimage->getClientOriginalExtension();  
        $request->productimage->move(public_path('uploads/products/'),$imageName);

        $data=[
            "catid"=>$request->catname,
            "pname"=>$request->productname,
            "pimage"=>$imageName,
            "qty"=>$request->qty,
            "price"=>$request->price,
            "pdescriptions"=>$request->descriptions
        ];
        Addproducts::create($data);
        return redirect('/addproducts')->with('success','Your Products Added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $data=Addproducts::all(); //slect all
        // join addproducts and tbl_addcategories
        
        $data=DB::table("addproducts")->join('tbl_addcategories','addproducts.catid', '=', 'tbl_addcategories.id')->select('addproducts.*','tbl_addcategories.catname')->get();

        return view('auth.manageproduct',['data'=>$data]);
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
        Addproducts::where('id',$id)->delete();
        return redirect('/manageproduct')->with('del','Product deleted successfully');

    }
}
