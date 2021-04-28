<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\Element;
use Session;
use App\Models\Review;

class BookingController extends Controller
{

    public function booking(Request $request){

        $include_chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $charLength = strlen($include_chars);
        $randomString = '';
        for ($i = 0; $i < 5; $i++) {
            $randomString .= $include_chars [rand(0, $charLength - 1)];
        }
        $first_str= $request['destination_name_EN'];
        $last_str= $request['typetour_id'];
        $bookingcode=$first_str.'_'.$randomString.'_'.$last_str;
        $booking = new Booking;
        $booking->tour_id=$request['tour_id'];
        $booking->booking_code= $bookingcode;
        $booking->booking_customer_name=$request['booking_customer_name'];
        $booking->booking_customer_email=$request['booking_customer_email'];
        $booking->booking_customer_address=$request['booking_customer_address'];
        $booking->booking_customer_phone_domain=$request['booking_customer_phone_domain'];
        $booking->booking_customer_phone_number=$request['booking_customer_phone_number'];
        $booking->booking_customer_nationality=$request['booking_customer_nationality'];
        $booking->booking_date=$request['booking_date'];
        $booking->booking_customer_adult=$request['booking_customer_adult'];
        $booking->booking_customer_child=$request['booking_customer_child'];
        $booking->booking_customer_ifant=$request['booking_customer_ifant'];
        $booking->booking_customer_message=$request['booking_customer_message'];
        $booking->save();

        return view('Page_Views.BookingPage');
    }

    public function show_list($status){
        ;
        if(Session::get('position_id')==1 or Session::get('position_id')==4){
            $booking=Booking::where('booking_status',$status)->get();
            return view('Admin_Views.Booking_Management.List_booking')->with(compact('booking'));
        }else{
            Session::put('message','*you not have this permission');
            return redirect()->back();
        }

    }
    public function detail($booking_id){
        if(Session::get('position_id')==4 or Session::get('position_id')==1){
            $booking = Booking::where('booking_id',$booking_id)->join('tbl_tour','tbl_booking.tour_id','=','tbl_tour.tour_id')->first();
            return view('Admin_Views.Booking_management.Detail_booking')->with(compact('booking'));
        }else{
            Session::put('message','*you not have this permission');
            return redirect()->back();
        }

    }
    public function update(Request $request){
        $booking =Booking::find($request['booking_id']);
        if($booking->booking_status==4){
            return redirect()->back();
        }else{
            $booking->booking_customer_name=$request['booking_customer_name'];
            $booking->booking_customer_email=$request['booking_customer_email'];
            $booking->booking_customer_address=$request['booking_customer_address'];
            $booking->booking_customer_phone_domain=$request['booking_customer_phone_domain'];
            $booking->booking_customer_phone_number=$request['booking_customer_phone_number'];
            $booking->booking_customer_nationality=$request['booking_customer_nationality'];
            $booking->booking_date=$request['booking_date'];
            $booking->booking_customer_adult=$request['booking_customer_adult'];
            $booking->booking_customer_child=$request['booking_customer_child'];
            $booking->booking_customer_ifant=$request['booking_customer_ifant'];
            $booking->booking_customer_message=$request['booking_customer_message'];
            $booking->booking_status=$request['booking_status'];
            /*thêm khách hàng khi trạng thái booking =1*/
            /*mô tả tt: tìm điều kiện trùng sdt. nếu trùng thì kiểm tra domain nếu k trùng thì thêm mới customer
                        tìm trùng domain. nếu không trùng thì thêm customer
                        */
            if($request['booking_status']==1)
            {
                $count=Customer::where('customer_phone_number',$request['booking_customer_phone_number'])->count();
                $customer =Customer::where('customer_phone_number',$request['booking_customer_phone_number'])->get();
                if($count!=0)
                {
                    $dulicate=0;
                    foreach ($customer as $customer){
                        if($customer->customer_phone_domain==$request['booking_customer_phone_domain'])
                        {
                            $dulicate++;
                        }
                    }
                    if($dulicate==0){
                        $new_customer= new Customer;
                        $new_customer->customer_name=$request['booking_customer_name'];
                        $new_customer->customer_email=$request['booking_customer_email'];
                        $new_customer->customer_address=$request['booking_customer_address'];
                        $new_customer->customer_phone_domain=$request['booking_customer_phone_domain'];
                        $new_customer->customer_phone_number=$request['booking_customer_phone_number'];
                        $new_customer->customer_nationality=$request['booking_customer_nationality'];
                        $new_customer->save();
                    }
                }
                else
                {
                    $new_customer= new Customer;
                    $new_customer->customer_name=$request['booking_customer_name'];
                    $new_customer->customer_email=$request['booking_customer_email'];
                    $new_customer->customer_address=$request['booking_customer_address'];
                    $new_customer->customer_phone_domain=$request['booking_customer_phone_domain'];
                    $new_customer->customer_phone_number=$request['booking_customer_phone_number'];
                    $new_customer->customer_nationality=$request['booking_customer_nationality'];
                    $new_customer->save();
                }
            }
            $customer = Customer::where('customer_phone_domain',$request['booking_customer_phone_domain'])
                ->where('customer_phone_number',$request['booking_customer_phone_number'])->first();
            $booking->customer_id=$customer->customer_id;
            $booking->save();
            Session::put('message','*successfully updated');
            return Redirect::to('/list-booking/'.$request['booking_status']);
        }
    }
    public function customer_review($booking_code){
        $booking=Booking::where('booking_code',$booking_code)->first();
        $tour=Tour::where('tour_id',$booking->tour_id)->first();
        return view('Page_views.review_customer')->with(compact('booking','tour'));
    }
    public function save_customer_review(Request $request){
        $review= new Review;
        $review->booking_id=$request['booking_id'];
        $review->review_comment=$request['review_comment'];
        $review->review_rating=$request['review_rating'];
        $review->save();
        return view('Page_views.BookingPage');
    }
}
