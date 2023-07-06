<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    function payment(){
        return view('payment');
    }

    function verify_payment(Request $request, $transaction_id){
       $request->session()->put('transaction_id',$transaction_id);
       return redirect('/complete_payment');
    }
    function complete_payment(Request $request){

      if($request->session()->has('order_id') && $request->session()->has('transaction_id') ){
             $order_id = $request->session()->get('order_id');
             $transaction_id = $request->session()->get('transaction_id');
             $order_status = 'paid';
             $order_date = date('Y-m-d');
            //update status
        $affected = DB::table('orders')->where('id',$order_id)->update([
                        'status'=>$order_status
         ]);
            //insert data to payment table
              DB::table('payments')->insert([
                          'transaction_id'=>$transaction_id,
                          'order_id'=>$order_id,
                          'date'=>$order_date
              ]);
             //remove all from session
             $request->session()->flush();

             return redirect('thank_you')->with('order_id',$order_id);


      }else{

         return redirect('/');

      }

    }

    function thank_you(){
        return view('thank_you');
    }



}
