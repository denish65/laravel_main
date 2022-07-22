<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\Product as ProductResource;
use App\Models\Products;
use Validator;

class ProductController extends BaseController
{
  

      //http://localhost:8000/api/register
    // this is an api to register a data

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),
        [
          'name'=>'required',
          'details'=>'required' 
         
        ]);

        if($validator->fails()){

            return $this->sendError('Validation Error',$validator->errors());
        }

        $input=$request->all();
        $data=Products::create($input);
        $success['token']=$data->createToken('token')->accessToken;
        $success['name']=$data->name;
        return $this->sendResponse($success,'Products Added  successfully');

    }


}
