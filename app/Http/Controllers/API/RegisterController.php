<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Auth;
class RegisterController extends BaseController
{


    //http://localhost:8000/api/register
    // this is an api to register a data

    public function register(Request $request)
    {
        $validator=Validator::make($request->all(),
        [
          'firstname'=>'required',
          'lastname'=>'required',  
          'name'=>'required',
          'email'=>'required',
          'password'=>'required',
          'c_password'=>'required|same:password',
          'gender'=>'required',
          'hobby'=>'required',
          'phone'=>'required',
          'address'=>'required',
        ]);

        if($validator->fails()){

            return $this->sendError('Validation Error',$validator->errors());
        }

        $input=$request->all();
        $input["password"]=bcrypt($input['password']);
        $data=User::create($input);
        $success['token']=$data->createToken('MyApp')->accessToken;

        $success['name']=$data->name;

        return $this->sendResponse($success,'User register successfully');


    }
        
        // logoin api call method 

        public function login(Request $request)
        {
             
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
            {
                 $data=Auth::User();
                 $success['token']=$data->createToken('MyApp')->accessToken;
                 $success['name']=$data->name; 

                 return $this->sendResponse($success,'User Logged in  successfully');
            }

            else 

            {
                return $this->sendError('Unauthorised',['error'=>'Unauthorised']);
            }
        }
    

        // display users api 

        public function show()

        {
            $data=User::all();
            if(is_null($data))
            {
                return $this->sendError('No any user are avaialable');
            }

            else 
            {
                // $success['token']=$data->createToken('MyApp')->accessToken;
               // $success['name']=$data->name; 
            $data=User::all();  
            return $this->sendResponse($data,'Data will retrived successfully');
            }
        }


        public function destroy($id)

        {
            User::where('id',$id)->delete();
            if(is_null($id))
            {
                return $this->sendError('No data is avaialable for delete');
            }

            else 
            {
            User::where('id',$id)->delete();  
            return $this->sendResponse($id,'Data will Deleted successfully');
            }
        }
 

}
