<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CarContact;
//use Mail;
use Mail;
use App\Mail\SendMail;

class CarContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('car.contact');
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
        
        // applied validation
        $request->validate(
            [
                 'FirstName'=>"required",
                 'LastName'=>"required",
                 'Name'=>"required",
                 'Email'=>"required|email",
                 'Phone'=>"required|min:10|max:10",
                 'Subject'=>"required",
                 'Message'=>"required"

            ]
        );

        // store data inside tbl_contacts

        $data=[
              
            "firstname"=>$request->FirstName,
            "lastname"=>$request->LastName,
            "name"=>$request->Name,
            "email"=>$request->Email,
            "phone"=>$request->Phone,
            "subject"=>$request->Subject,
            "message"=>$request->Message
           
        ];

        // write a Elequent ORM Query builder  
        CarContact::create($data);
        //send email    // 
        Mail::to('bkpandey.pandey@gmail.com')->send(new SendMail($data));
        return redirect('/contact-us')->with('success','Thanks for Contact with us We get Mail also our  admin will contact with You Soon!');

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
