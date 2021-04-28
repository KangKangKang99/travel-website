<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Review;
use App\Models\Tour;
use App\Models\Destination;
use App\Models\Tour_schedule;
use App\Models\Typetour;
use App\Models\Highlight;
use App\Models\tour_highlight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;

class TourController extends Controller
{
    /*CRUD admin*/
    public function index(){
    $type=Typetour::OrderBy('typetour_id','asc')->get();
    $dest= Destination::OrderBy('destination_id','asc')->get();
    $lang_status = Session::get('language');
    if($lang_status!="en"){
        $highlight = Highlight::OrderBy('highlight_name_VI','asc')->get();

    }else {
        $highlight = Highlight::OrderBy('highlight_name_EN','asc')->get();
    }

    return view('Admin_Views.Tour_Management.Add_Tour')->with(compact('type'))->with(compact('dest'))->with(compact('highlight'));
    }
    public function add(Request $request){
        $data=$request->all();
        $tour= new Tour;
        $tour->tour_name_VI=$data['tour_name_VI'];
        $tour->tour_name_EN=$data['tour_name_EN'];
        $tour->destination_id=$data['destination_id'];
        $tour->typetour_id=$data['typetour_id'];
        $tour->tour_price=$data['tour_price'];
        $tour->tour_desc_VI=$data['tour_desc_VI'];
        $tour->tour_desc_EN=$data['tour_desc_EN'];
        $tour->tour_overview_VI=$data['tour_overview_VI'];
        $tour->tour_overview_EN=$data['tour_overview_EN'];
        $tour->tour_day=$data['tour_day'];
        $tour->tour_night=$data['tour_night'];
        $tour->tour_sche=$data['tour_sche'];
        $tour->tour_arrival=$data['tour_arrival'];
        $tour->tour_departure=$data['tour_departure'];
        $tour->tour_service_in=$data['tour_service_in'];
        $tour->tour_service_ex=$data['tour_service_ex'];
        $tour->tour_status=$data['tour_status'];
        $tour->tour_map=$data['tour_map'];

        $get_thumb = $request->file('tour_thumb');
        $get_banner = $request->file('tour_banner');
        $get_img1=$request->file('tour_img1');
        $get_img2=$request->file('tour_img2');
        $get_img3=$request->file('tour_img3');
        $get_img4=$request->file('tour_img4');
        $get_img5=$request->file('tour_img5');
        $get_img6=$request->file('tour_img6');

        $get_name_thumb = $get_thumb->getClientOriginalName();
        $name_thumb = current(explode('.',$get_name_thumb));
        $new_thumb =  $name_thumb.rand(0,99).'.'.$get_thumb->getClientOriginalExtension();
        $get_thumb->move('uploads/tours/thumb',$new_thumb);
        $get_name_banner = $get_banner->getClientOriginalName();
        $name_banner = current(explode('.',$get_name_banner));
        $new_banner =  $name_banner.rand(0,99).'.'.$get_banner->getClientOriginalExtension();
        $get_banner->move('uploads/tours/banner',$new_banner);
        $get_name_img1 = $get_img1->getClientOriginalName();
        $name_img1 = current(explode('.',$get_name_img1));
        $new_img1 =  $name_img1.rand(0,99).'.'.$get_img1->getClientOriginalExtension();
        $get_img1->move('uploads/tours/img',$new_img1);
        $get_name_img2 = $get_img2->getClientOriginalName();
        $name_img2 = current(explode('.',$get_name_img2));
        $new_img2 =  $name_img2.rand(0,99).'.'.$get_img2->getClientOriginalExtension();
        $get_img2->move('uploads/tours/img',$new_img2);
        $get_name_img3 = $get_img3->getClientOriginalName();
        $name_img3 = current(explode('.',$get_name_img3));
        $new_img3 =  $name_img3.rand(0,99).'.'.$get_img3->getClientOriginalExtension();
        $get_img3->move('uploads/tours/img',$new_img3);
        $get_name_img4 = $get_img4->getClientOriginalName();
        $name_img4 = current(explode('.',$get_name_img4));
        $new_img4 =  $name_img4.rand(0,99).'.'.$get_img4->getClientOriginalExtension();
        $get_img4->move('uploads/tours/img',$new_img4);
        $get_name_img5 = $get_img5->getClientOriginalName();
        $name_img5 = current(explode('.',$get_name_img5));
        $new_img5 =  $name_img5.rand(0,99).'.'.$get_img5->getClientOriginalExtension();
        $get_img5->move('uploads/tours/img',$new_img5);
        $get_name_img6 = $get_img6->getClientOriginalName();
        $name_img6 = current(explode('.',$get_name_img6));
        $new_img6 =  $name_img6.rand(0,99).'.'.$get_img6->getClientOriginalExtension();
        $get_img6->move('uploads/tours/img',$new_img6);

        $tour->tour_thumb=$new_thumb;
        $tour->tour_banner=$new_banner;
        $tour->tour_img1=$new_img1;
        $tour->tour_img2=$new_img2;
        $tour->tour_img3=$new_img3;
        $tour->tour_img4=$new_img4;
        $tour->tour_img5=$new_img5;
        $tour->tour_img6=$new_img6;
        $tour->save();
        $tour_id=$tour->tour_id;
        $day=$data['tour_day'];
        for($i=1;$i<=$day;$i++){
            $tour_schedule= new Tour_schedule;
            $tour_schedule->tour_id=$tour_id;
            $tour_schedule->tour_schedule_number=$i;
            $tour_schedule->tour_schedule_content=$data['tour_day_'.$i];
            $tour_schedule->save();

        }
        foreach ($data['highlight'] as $value){

                $tour_highlight= new tour_highlight;
                $tour_highlight->tour_id=$tour_id;
                $tour_highlight->highlight_id=$value;
                $tour_highlight->save();

        }

        Session::put('message','*successfully added');
        return Redirect::to('add-tour');

    }
    public function edit($tour_id){
        $type=Typetour::OrderBy('typetour_id','asc')->get();
        $dest= Destination::OrderBy('destination_id','asc')->get();
        $lang_status = Session::get('language');
        if($lang_status!="en"){
            $highlight = Highlight::OrderBy('highlight_name_VI','asc')->get();

        }else {
            $highlight = Highlight::OrderBy('highlight_name_EN','asc')->get();
        }
        $tour= Tour::where('tour_id',$tour_id)->first();
        $tour_schedule =Tour_schedule::where('tour_id',$tour_id)->get();
        return view('Admin_Views.Tour_Management.Edit_Tour')->with(compact('type','highlight','dest','tour','tour_schedule'));
    }
    public function update(Request $request){
        $tour =Tour::find($request['tour_id']);
        if($request['tour_name_VI']){
            $tour->tour_name_VI=$request['tour_name_VI'];
        }
        if($request['tour_name_EN']){
            $tour->tour_name_EN=$request['tour_name_EN'];
        }
        if($request['destination_id']){
            $tour->destination_id=$request['destination_id'];
        }
        if($request['typetour_id']){
            $tour->typetour_id=$request['typetour_id'];
        }
        if($request['tour_dest_VI']){
            $tour->tour_dest_VI=$request['tour_dest_VI'];
        }
        if($request['tour_dest_EN']){
            $tour->tour_dest_EN=$request['tour_dest_EN'];
        }
        if($request['tour_over_view_VI']){
            $tour->tour_over_view_VI=$request['tour_over_view_VI'];
        }
        echo $request['tour_id'];
        /*$tour =[
            'tour_name_VI'=>$request['tour_name_VI'],
            'tour_name_EN'=>$request['tour_name_EN'],
            'destination_id'=>$request['destination_id'],
            'typetour_id'=>$request['typetour_id'],
            'tour_dest_VI'=>$request['tour_dest_VI'],
            'tour_dest_EN'=>$request['tour_dest_EN'],
            'tour_over_view_VI'=>$request['tour_over_view_VI'],
            'tour_over_view_EN'=>$request['tour_over_view_EN'],
            'tour_price'=>$request['tour_price'],
            'tour_night'=>$request['tour_night'],
            'tour_sche'=>$request['tour_sche'],
            'tour_day'=>$request['tour_day'],
            'tour_arrival'=>$request['tour_arrival'],
            'tour_depature'=>$request['tour_depature'],
            'tour_service_in'=>$request['tour_service_in'],
            'tour_service_ex'=>$request['tour_service_ex'],
            'tour_status'=>$request['tour_status'],
            'tour_map'=>$request['tour_map']

        ];*/
        /*$tour->save();*/
        Session::put('message','*successfully Update');
        return redirect('list-tour');
    }
    public function delete($tour_id){
        $tour=Tour::Where('tour_id',$tour_id);
        $tour_sche = Tour_schedule::where('tour_id',$tour_id);
        $tour_highlight =tour_highlight::where('tour_id',$tour_id);
        $tour_sche->delete();
        $tour_highlight->delete();
        $tour->delete();
        Session::put('message','*successfully deleted');
        return back();
    }
    /*..............................................................................*/
    /*view*/
    function show_tour_detail($tour_name_EN){
        $tour=Tour::where('tour_name_EN',$tour_name_EN)
            ->join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
            ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->first();
        $tour_id=$tour->tour_id;
        $related_tour =Tour::where('tbl_tour.destination_id',$tour->destination_id)
            ->join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
            ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->limit(6)->get();
        $tour_highlight=tour_highlight::where('tour_id',$tour->tour_id)
            ->join('tbl_highlight','tbl_tour_highlight.highlight_id','=','tbl_highlight.highlight_id')->get();
        $schedule =Tour_schedule::where('tour_id',$tour->tour_id)->get();
        $review =Booking::where('tour_id',$tour_id)->join('tbl_customer','tbl_customer.customer_id','=','tbl_booking.customer_id')
            ->join('tbl_review','tbl_review.booking_id','=','tbl_booking.booking_id')->distinct('tbl_review.review_id')
            ->get();
        /*dd($review);*/
        $rate=$review->avg('review_rating');
        return view('Page_Views.DetailsTourPage')->with(compact('tour'))
                    ->with(compact('schedule'))
                    ->with(compact('tour_highlight'))->with(compact('related_tour'))->with(compact('review','rate'));

    }
    function show_list(){
        $tour=Tour::orderby('tour_id','desc')->paginate(8);
        return view('Admin_Views.Tour_Management.List_Tour')->with(compact('tour'));
    }
}
