<?php

namespace App\Http\Controllers;

use App\contact;
use App\image;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class contactController extends Controller
{
    public function store(Request $request)
    {

        $RecordContact = new contact;
        $RecordContact->address = $request->get('address');
        $RecordContact->email = $request->get('email');
        $RecordContact->personInCharge = $request->get('name');
        $RecordContact->telephone = $request->get('tel');
        $RecordContact->website = $request->get('web');
        $RecordContact->longitude = $request->get('lng');
        $RecordContact->latitude = $request->get('lat');



        $user_type = Auth::user()->type;
        $user_name=Auth::user()->name;

        $user = DB::table('contacts')->where('name', $user_name)->where('type',$user_type)->first();
        if($user==null){
            $RecordContact->type=$user_type;
            $RecordContact->name=$user_name;
            $RecordContact->save();

         }
        elseif ($user){
            DB::update("update contacts 
        set address = ' $RecordContact->address' , email=' $RecordContact->email' , personInCharge='$RecordContact->personInCharge'  , telephone= ' $RecordContact->telephone' 
        , website= '$RecordContact->website' , longitude='$RecordContact->longitude' , latitude = ' $RecordContact->latitude'  where id = $user->id");

        }




      /*  \Session::flash('flash_message', 'New Retailer registerd Successfully.'); //<--FLASH MESSAGE*/
        return redirect()->back();

    }

    public function imageSave(Request $request){
        $image=new image;
        $image->serviceProviderId=Auth::user()->id;
        if ($file = $request->hasFile('hotelImage')) {
            $file = $request->file('hotelImage');

            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/images/hotels';
            $file->move($destinationPath, $fileName);
            $image->imagePath = $fileName;

        }
        $image->save();
        return redirect()->back();

    }

}
