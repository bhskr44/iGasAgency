<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;



use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;




use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
use App\Model\AllCustomers;

class ApiController extends Controller
{
    //

    // public function index()
    // {
    //     return User::all();
    // }

    //API to Login
    public function userlogin(Request $request)
    {
        $details = array("message"=>"Login Failed.");
         //validate the form data
         $validate = $this->validate($request,[
            'email'=> 'required|email',
            'password'=> 'required|min:8|max:16'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            //        $userRole = DB::table('role_user')->select(DB::raw()->get();

            $userId = Auth::id();
            $userRole = DB::table('role_user')->where('user_id',$userId)->value('role_id');
            
            if($userRole == 1 || $userRole == 2){
                return  $details = array("message" => "Login Successfull.","userId"=>$userId,"userRole"=>$userRole);
            }
            else{
                return $details = array("message"=>"Please Use the Website. Mobile App is not designed for you.");
            }
            //$role = auth()->user()->role;
            
        }


      
        //$details = array("email"=>$request->email, "password"=>Hash::make($request->password));
        


    return $details;
    }


    //Book gas by Miscall 
    function bookingGasMiscallItanagar(Request $request){

        $jsonResult= array();
        $mobile = $request->key1;
        $ts = $request->key2;

        $isnumberPresent = DB::table('all_customers')->where('mobile','=', $mobile)->get();

        if(count($isnumberPresent)==1){
            $isBookingDone = DB::table('bookings')->where('mobile','=', $mobile)->
            orderByRaw('created_at DESC')->get();
            array_push($jsonResult,array("isCustomer"=>$isnumberPresent));

            if(count($isBookingDone)>=1){
                array_push($jsonResult,array("isBookingDone"=>$isBookingDone));
                $preBookingDone = date_create($isBookingDone[0]->created_at);
                $today = date_create(date('Y-m-d H:i:s'));
                $diff = date_diff($today,$preBookingDone);
                //$diff = strtotime($today) - strtotime($preBookingDone);
                //print_r($diff->d);
                if(($diff->d)<25){
                    array_push($jsonResult,array("isBookingPossible"=>"No"));
                }
                if($diff->d>=25){
                    array_push($jsonResult,array("isBookingPossible"=>"Yes"));
                }
            }
            else{
                array_push($jsonResult,array("isBookingPossible"=>"Yes"));
                DB::table('bookings')->insert([
                    'customerid' => $isnumberPresent[0]->customerid,
                    'mobile' => $mobile,
                    "created_at" =>  date('Y-m-d H:i:s'),
                    "updated_at" => date('Y-m-d H:i:s'),
                ]);
            }

            

        }
        else{

        }

        // array_push($jsonResult,array("mobile"=>$mobile));
        // array_push($jsonResult,array("timestamp"=>$ts));

        return $jsonResult;

    }

   
}
