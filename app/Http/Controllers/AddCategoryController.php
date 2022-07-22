<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddCategoryModel;
class AddCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.addcategory');
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
            'catdesc'=>'required'
        ]);
     
        $data=[
          
            "catname"=>$request->catname,
            "catdescriptions"=>$request->catdesc
        ];

        AddCategoryModel::create($data);
        return redirect('/addcategory')->with('success','Your Category Added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=AddCategoryModel::all();
        return view('auth.managecategory',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edcat=AddCategoryModel::where('id',$id)->first();
        return view('auth.editcategory',['edcat'=>$edcat])->with('del','Category deleted successfully');
  
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

        $edcat=[
          
            "catname"=>$request->catname,
            "catdescriptions"=>$request->catdesc
        ];

        AddCategoryModel::where('id',$id)->update($edcat);
        return redirect('/managecategory')->with('success','Your Category Updated successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AddCategoryModel::where('id',$id)->delete();
        return redirect('/managecategory')->with('del','Category deleted successfully');

    }
}
