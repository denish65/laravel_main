<?php
namespace App\Http\Controllers\API;
//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\Products;
use App\Http\Controllers\Controller as Controller; 
class BaseController extends Controller
{


    public function sendResponse($result,$message)
    {

        $resposnse=[

            'success'=>true,
            'data'=>$result,
            'message'=>$message,
        ];

        return response()->json($resposnse,200);

    }


    public function sendError($error, $errorMessage=[],$code=404)
    {
        $resposnse=[

            'success'=>false,
            'message'=>$error,
        ];

        if(!empty($errorMessage))
        {
            $resposnse['data']=$errorMessage;
        }
        return response()->json($resposnse,$code); 

    }

  
}
