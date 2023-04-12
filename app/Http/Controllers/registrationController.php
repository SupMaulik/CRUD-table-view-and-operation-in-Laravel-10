<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class registrationController extends Controller
{
    public function index()
    {

        return view('form');
    }

    public function getregis(Request $req)
    {
        $req->validate(

            [
                'uname'=>'required',
                'uemail'=>'required|email',
                'upassword'=>'required|confirmed',
                'upassword_confirmation'=>'required'

            ]
            );
         print_r($req->all());

    }

    public function getcust()
    {
         $url=url('/getcustomer');
         $title='Customer Registartion';
         $data=compact('url','title');
        return view('customerreg')->with($data);
    }

    public function showcust(Request $req)
    {
         $customer= new Customer;
         $customer->customer_name=$req['uname'];
         $customer->customer_email=$req['uemail'];
         $customer->customer_gender=$req['gender'];
         $customer->customer_address=$req['uaddress'];
         $customer->Customer_State=$req['ustate'];
         $customer->Customer_Country=$req['ucountry'];
         $customer->customer_dob=$req['DOB'];
         $customer->customer_password=$req['cpassword'];
         $customer->save();
         return redirect('/customer/view'); 

    }

    public function viewcust()
    {
         $customer= Customer::all();

         $data=compact('customer');

         
      return view('view-customer')->with($data);
    }

    public function delete_cust($id)
    {
        $customer= Customer::find($id);
        if(!is_null($customer))
         {
            $customer->delete();
         }      
       return redirect()->back();
    }

    public function edit_customer($id)
    {
         $customer=Customer::find($id);
         if(is_null($customer))
         {
              //not found
              return redirect()->back();
        }
        else
        {
             //found
             $title='Update Customer';
             $url=url('/customer/update').'/'.$id;
              $data=compact('customer','url','title');
              return view('customerreg')->with($data);
        }
    }

    public function view_customer($id)
    {
         $customer=Customer::find($id);
        

         if(is_null($customer))
         {

            //not found
            return redirect()->back();

         }
         else
         {
            // find Record
            $title='View Customer';
            $url="/customer/update"."/".$id;
            $status="view";
            $data=compact('customer','title','url','status');
            return view('customerreg')->with($data);


         }

    }
    public function update($id, Request $req)
    {
          $customer=Customer::find($id);
          $customer->customer_name=$req->uname;
          $customer->customer_email=$req->uemail;
          $customer->customer_gender=$req->gender;
          $customer->customer_address=$req->uaddress;
          $customer->Customer_State=$req->ustate;
          $customer->Customer_Country=$req->ucountry;
          $customer->customer_dob=$req->DOB;
          $customer->customer_password=$req->cpassword;
          $customer->save();
          return redirect('/customer/view');
    }
}
