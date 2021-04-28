@extends('Page_Views.Pages_Layout')
@section('content')
    <div class="destination_banner_wrap overlay" style="background-image: url('{{asset('uploads/tours/banner/'.$tour->tour_banner)}}') ">
        <div class="destination_text text-center">
            <?php $lang_status = Session::get('language');
            if($lang_status!="en"){
            ?>
            <h3>{{$tour->tour_name_VI}}</h3>
                <p>{{$tour->tour_desc_VI}}</p>
            <?php
            }else {
            ?>
            <h3>{{$tour->tour_name_EN}}</h3>
                <p>{{$tour->tour_desc_EN}}</p>
            <?php
            }
            ?>

        </div>
    </div>
    <div class="destination_details_info" style="padding-bottom: 40px;padding-top: 40px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-9">
                    <div class="row">
                        <?php $lang_status = Session::get('language');
                        if($lang_status!="en"){
                        ?>
                        <h2>{{$tour->tour_name_VI}}</h2>
                        <?php
                        }else {
                        ?>
                        <h2>{{$tour->tour_name_EN}}</h2>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-2 icon_tour">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 width="24" height="24"
                                 viewBox="0 0 172 172"
                                 style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ff4a52"><path d="M64.5,7.16667v14.33333h43v-14.33333zM135.87272,20.01628l-9.26627,10.93197l21.13606,17.91667l9.26628,-10.93197zM86,28.66667c-35.561,0 -64.5,28.939 -64.5,64.5c0,35.561 28.939,64.5 64.5,64.5c35.561,0 64.5,-28.939 64.5,-64.5c0,-35.561 -28.939,-64.5 -64.5,-64.5zM78.83333,50.16667h14.33333v50.16667h-14.33333z"></path></g></g></svg>
                            <span class="tour_name">{{__('Duration')}}: </span><span> {{$tour->tour_day}} {{__('days')}} {{$tour->tour_night}} {{__('nights')}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-2 icon_tour">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 width="24" height="24"
                                 viewBox="0 0 172 172"
                                 style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ff4a52"><path d="M57.92122,22.31185l-12.97559,3.91927l28.65267,49.9987l-36.50521,9.63021l-12.96159,-10.88997l-9.79818,2.92545l18.36458,31.34017l116.05241,-30.55632c0.01401,-0.00464 0.02801,-0.00931 0.042,-0.014c5.13237,-0.90944 8.87286,-5.36971 8.87435,-10.58203c0,-5.93706 -4.81294,-10.75 -10.75,-10.75c-0.93573,0.00017 -1.86743,0.12252 -2.77149,0.36393v-0.014l-37.48503,9.86816zM21.5,129v14.33333h129v-14.33333z"></path></g></g></svg>
                            <span class="tour_name">{{__('Departure')}}: </span> <span> {{$tour->tour_departure}}</span>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-2 icon_tour">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 width="24" height="24"
                                 viewBox="0 0 172 172"
                                 style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ff4a52"><path d="M71.66667,17.2028v57.5013l-35.23145,-9.28027l-5.9069,-15.88704l-9.02832,-2.04362v36.21127l115.73047,30.68229v-0.028c0.82473,0.20179 1.67047,0.30516 2.51953,0.30794c5.93706,0 10.75,-4.81294 10.75,-10.75c-0.00126,-5.15347 -3.65959,-9.58105 -8.72038,-10.55403l-35.79134,-9.57422l-20.10026,-63.3942zM21.5,136.16667v14.33333h129v-14.33333z"></path></g></g></svg>
                            <span class="tour_name">{{__('Arrival')}}: </span> <span> {{$tour->tour_arrival}}</span>
                        </div>
                    </div>
                    <div class="tour_location">
                        <div class="tour_hightlight_body">
                            <ul class="tour_item">
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                         width="24" height="24"
                                         viewBox="0 0 172 172"
                                         style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ff4a52"><path d="M86,14.33333c-27.70633,0 -50.16667,22.46033 -50.16667,50.16667c0,35.83333 50.16667,93.16667 50.16667,93.16667c0,0 50.16667,-57.33333 50.16667,-93.16667c0,-27.70633 -22.46033,-50.16667 -50.16667,-50.16667zM86,82.41667c-9.89717,0 -17.91667,-8.0195 -17.91667,-17.91667c0,-9.89717 8.0195,-17.91667 17.91667,-17.91667c9.89717,0 17.91667,8.0195 17.91667,17.91667c0,9.89717 -8.0195,17.91667 -17.91667,17.91667z"></path></g></g></svg>
                                </li>
                                <li>
                                    {{$tour->tour_sche}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr id="fix_form">
    <div style="padding-bottom: 0px" class="destination_details_info">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-9">

                        {{--overview--}}
                        <div class="destination_info">
                            <h2>{{__('Overview')}}</h2>
                            <?php $lang_status = Session::get('language');
                            if($lang_status!="en"){
                            ?>
                            <p>{{$tour->tour_overview_VI}}</p>
                            <?php
                            }else {
                            ?>
                            <p>{{$tour->tour_overview_EN}}</p>
                            <?php
                            }
                            ?>


                        </div>
                        {{--end overview--}}
                        <div class="bordered_1px"></div>
                        {{--highlight--}}
                        <div class="destination_info">
                            <h2>{{__('Highlight')}}</h2>
                            <div class="row" style="padding-left: 20px">

                                @foreach($tour_highlight as $Tour_highlight)
                                    <?php $lang_status = Session::get('language');
                                    if($lang_status!="en"){
                                    ?>
                                        <div class="col-lg-3 col-sm-4" >
                                            <img style="margin-top: -8px" src="{{asset('uploads/highlight/'.$Tour_highlight->highlight_img)}}"/>
                                            {{$Tour_highlight->highlight_name_VI}}
                                        </div>
                                    <?php
                                    }else {
                                    ?>
                                        <div class="col-lg-3 col-sm-4">
                                            <img style="margin-top: -8px" src="{{asset('uploads/highlight/'.$Tour_highlight->highlight_img)}}"/>
                                            {{$Tour_highlight->highlight_name_EN}}
                                        </div>
                                    <?php
                                    }
                                    ?>
                                @endforeach
                            </div>


                        </div>
                        {{--end highlight--}}
                        <div class="bordered_1px"></div>
                        {{--service--}}
                        <div class="destination_info">
                            <h2>{{__('Service')}}</h2>
                            <div class="row" style="padding-left: 20px">
                                <div class="col-4">
                                    <h4>{{__('Service included')}}:</h4>
                                </div>
                                <div class="col-8">
                                    {!! nl2br(e($tour->tour_service_ex))!!};
                                </div>
                            </div>
                            <br> <br>
                            <div class="row" style="padding-left: 20px">
                                <div class="col-4">
                                    <h4>{{__('Service excluded')}}:</h4>
                                </div>
                                <div class="col-8">
                                    {!! nl2br(e($tour->tour_service_ex))!!};
                                </div>

                            </div>


                        </div>
                        {{--end service--}}
                        <div class="bordered_1px"></div>
                        {{--schedule--}}
                        <div class="detail-tour">
                            <section>
                                <div class="accordion-container block ">
                                    <div class="category-faq"><h3>{{__('Tour Details')}}</h3></div>
                                    <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                        @foreach($schedule as $key=>$Schedule)
                                            <div class="panel panel-default">
                                                <a role="button" class="item-question collapsed" data-toggle="collapse" href="#{{$Schedule->tour_schedule_number}}" aria-expanded="false" aria-controls="collapse1a">
                                                    {{__('Day-')}} {{$key+1}}
                                                </a>
                                                <div id="{{$Schedule->tour_schedule_number}}" class="panel-collapse collapse" role="tabpanel">
                                                    <div class="panel-body">
                                                        {!! nl2br(e($Schedule->tour_schedule_content))!!};

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>

                        </div>
                        {{--end schedule--}}
                        <div class="bordered_1px" id="fix2_form"></div>

                        <div class="map-on-google">
                            <iframe src="{{$tour->tour_map}}" width="100%" height="480"></iframe>
                        </div>
                        <div style="padding: 25px"></div>
                        {{--picture--}}
                        <div class="section-top-border">
                            <h3>{{__('Some pictures')}}</h3>
                            <div class="row gallery-item">
                                <div class="col-md-6">
                                    <a href="{{asset('uploads/tours/img/'.$tour->tour_img1)}}" class="img-pop-up">
                                        <div class="single-gallery-image" style="background-image: url('{{asset('uploads/tours/img/'.$tour->tour_img1)}}')"></div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{asset('uploads/tours/img/'.$tour->tour_img2)}}" class="img-pop-up">
                                        <div class="single-gallery-image" style="background: url('{{asset('uploads/tours/img/'.$tour->tour_img2)}}');"></div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{asset('uploads/tours/img/'.$tour->tour_img3)}}" class="img-pop-up">
                                        <div class="single-gallery-image" style="background: url('{{asset('uploads/tours/img/'.$tour->tour_img3)}}');"></div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{asset('uploads/tours/img/'.$tour->tour_img4)}}" class="img-pop-up">
                                        <div class="single-gallery-image" style="background: url('{{asset('uploads/tours/img/'.$tour->tour_img4)}}');"></div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{asset('uploads/tours/img/'.$tour->tour_img5)}}" class="img-pop-up">
                                        <div class="single-gallery-image" style="background: url('{{asset('uploads/tours/img/'.$tour->tour_img5)}}');"></div>
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="{{asset('uploads/tours/img/'.$tour->tour_img6)}}" class="img-pop-up">
                                        <div class="single-gallery-image" style="background: url('{{asset('uploads/tours/img/'.$tour->tour_img6)}}');"></div>
                                    </a>
                                </div>

                            </div>
                        </div>
                        {{-- end picture--}}
                        {{--Giá chỉ từ--}}

                    </div>
                    {{--form booking--}}
                    <div class="col-lg-4 col-md-9" >
                        <div id="form_to_book" style="position: sticky;top: -100px">
                            <div class="container">
                                <div class="cost_from">
                                    <div class="sample-text">
                                        {{__('No')}} <del>{{__('bank fee')}}.</del> {{__('Travelling with us The Real Deal with Personal Service')}}
                                        <h3><b>{{__('From')}}: ${{$tour->tour_price}}</b></h3>

                                        <sup>{{__('The price includes all services')}}</sup>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_join" >
                                <h3>{{__('BOOK NOW')}}</h3>
                                <form role="form" action="{{URL::to('/booking')}}" method="post">
                                    {{csrf_field() }}
                                    <input type="hidden" name="tour_id" value="{{$tour->tour_id}}">
                                    <input type="hidden" name="destination_name_EN" value="{{$tour->destination_name_EN}}">
                                    <input type="hidden" name="typetour_id" value="{{$tour->typetour_id}}">
                                    <div class="mt-10">
                                        <input type="text" name="booking_customer_name" placeholder="{{__('Full Name')}}"
                                               onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Full Name')}}'" required
                                               class="single-input">
                                    </div>
                                    <div class="mt-10">
                                        <input type="email" name="booking_customer_email" placeholder="{{__('Email address')}}"
                                               onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Email address')}}'" required
                                               class="single-input">
                                    </div>
                                    <div class="input-group-icon mt-10">
                                        <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                                        <input type="text" name="booking_customer_address" placeholder="{{__('Address')}}" onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = '{{__('Address')}}'" required class="single-input">
                                    </div>
                                    <div class="input-group-icon mt-10 ">
                                        <div class="row">
                                            <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                            <div class="form-select col-5" id="default-select">
                                                <select name="booking_customer_phone_domain">
                                                    <option value="+84">+ 84 (Vietnam)</option>
                                                    <option value="+86">+86 (China)</option>
                                                    <option value="+1">+1 (USA)R</option>
                                                    <option value="1">England</option>
                                                    <option value="1">Islamabad</option>
                                                </select>
                                            </div>
                                            <div class="col-7">
                                                <input onkeypress="return onlyNumberKey(event)" id="phone_numb" type="text" name="booking_customer_phone_number" placeholder="{{__('Phone Number')}}"
                                                       onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Phone Number')}}'" required
                                                       class="single-input" style="padding-left: 20px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group-icon mt-10">
                                        <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                        <div class="form-select" id="default-select">
                                            <select name="booking_customer_nationality">
                                                <option value="1">{{__('Nationality')}}</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="India">India</option>
                                                <option value="England">England</option>
                                                <option value="Srilanka">Srilanka</option>
                                                <option value="America">America</option>
                                                <option value="China">China</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-10">
                                        <div class="form-group row">
                                            <label style="padding-left: 30px;font-weight: 500;padding-top: 10px" for="example-datetime-local-input" class="col-2 col-form-label">DATE</label>
                                            <div class="col-10">
                                                <input style="display: block;
                                                          width: 100%;
                                                          line-height: 40px;
                                                          border: none;
                                                          outline: none;
                                                          background: #f9f9ff;
                                                          padding: 0 20px;
                                                          resize: none;"
                                                       class="form-control" type="date" placeholder="DATE" id="example-datetime-local-input"
                                                name="booking_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group-icon mt-10">
                                        <div class="row">
                                            <div class="col-4">
                                                <input type="number" name="booking_customer_adult" placeholder="{{__('ADULT')}}" min="1"
                                                       onfocus="this.placeholder = '1'" onblur="this.placeholder = '{{__('ADULT')}}'" required
                                                       class="single-input" style="padding-left: 20px">
                                            </div>
                                            <div class="col-4">
                                                <input type="number" name="booking_customer_child" placeholder="CHILD" min="0"
                                                       onfocus="this.placeholder = '0'" onblur="this.placeholder = 'CHILD'" required
                                                       class="single-input" style="padding-left: 20px">
                                            </div>
                                            <div class="col-4">
                                                <input type="number" name="booking_customer_ifant" placeholder="INFANT" min="0"
                                                       onfocus="this.placeholder = '0'" onblur="this.placeholder = 'INFANT'" required
                                                       class="single-input" style="padding-left: 20px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-10">
                                <textarea class="single-textarea" placeholder="{{__('Message')}}" onfocus="this.placeholder = ''"
                                          onblur="this.placeholder = '{{__('Message')}}'" name="booking_customer_message" ></textarea>
                                    </div>
                                    <div class="mt-10" style="margin-top:20px;">
                                        <div class="submit_btn">
                                            <button class="boxed-btn4" type="submit">{{__('Submit')}}</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="how-it-work"style="margin-top: 20px">
                                <div class="container">
                                    <div class="cost_from">
                                        <div class="sample-text">
                                            <h3><b>{{__('HOW IT WORK')}}</b></h3>
                                            <sup>{{__('fast and simple')}}</sup>
                                            <div class="how-it-work-item">
                                                <ul>
                                                    <li class="row">
                                                        <div class="work-number">1</div>
                                                        <p>{{__('Send us your inquiry')}}</p>
                                                    </li>
                                                    <li class="row">
                                                        <div class="work-number">2</div>
                                                        <p>{{__('we will reply and advice soon')}}</p>
                                                    </li>
                                                    <li class="row">
                                                        <div class="work-number">3</div>
                                                        <p>{{__('Confirm booking and deposit')}}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div>
        <hr >
        <div class="container">
            <div class="category-faq">
                <h3>
                    <div class="row">
                        {{__('Comments and Rates')}}
                        <?php $rate =(int)$rate ?>
                        <div style="padding-left: 10px">
                            @if($rate==1)
                                <div class="comment-footer" style="color: red">

                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>


                                </div>
                            @elseif($rate==2)
                                <div class="comment-footer" style="color: red">

                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>

                                </div>
                            @elseif($rate==3)
                                <div class="comment-footer" style="color: red">


                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>

                                </div>

                            @elseif($rate==4)
                                <div class="comment-footer" style="color: red">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>

                                </div>
                            @else
                                <div class="comment-footer" style="color: red">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                </div>
                            @endif
                        </div>
                    </div>
                </h3>
            </div>
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                @foreach($review as $review)
                    <hr>
                    <div class="d-flex flex-row comment-row m-t-0">
                        <div class="comment-text w-100">
                            <span class="m-b-15 d-block"><i>{{$review->review_comment}}</i></span>
                            <div class="row" style="padding-left: 15px">
                                @if($review->review_rating==1)
                                    <div class="comment-footer" style="color: red">

                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>


                                    </div>
                                @elseif($review->review_rating==2)
                                    <div class="comment-footer" style="color: red">

                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>

                                    </div>
                                @elseif($review->review_rating==3)
                                    <div class="comment-footer" style="color: red">


                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>

                                    </div>

                                @elseif($review->review_rating==4)
                                    <div class="comment-footer" style="color: red">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>

                                    </div>
                                @else
                                    <div class="comment-footer" style="color: red">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>

                                    </div>
                                @endif
                                    <span style="margin-left: 20px" class="text-muted float-left"> {{date('d-m-Y', strtotime($review->created_at))}}</span>
                            </div>

                            <h6 style="font-weight: bolder;" class="font-medium">{{$review->customer_name}}</h6>
                        </div>
                    </div>
                    <hr>
                @endforeach

            </div>
        </div>
        <hr>
        @if($related_tour->count()==6)
    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>{{__('Other Tours')}}</h3>
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="container">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single_place">
                                                <div class="thumb">
                                                    <img src="{{asset('uploads/tours/thumb/'.$related_tour[0]->tour_thumb)}}" alt="">
                                                    <a href="#" class="prise">{{$related_tour[0]->tour_price}}</a>
                                                </div>
                                                <div class="place_info">
                                                    <?php $lang_status = Session::get('language');
                                                    if($lang_status!="en"){
                                                    ?>
                                                    <a href="{{URL::to('/tour/'.$related_tour[0]->tour_name_EN)}}"><h3>{{$related_tour[0]->tour_name_VI}}</h3></a>
                                                    <div class="row">
                                                        <p class="col-6">{{$related_tour[0]->destination_name_VI}}</p>
                                                        <p class="col-6" style="text-align: center">{{$related_tour[0]->typetour_name_VI}}</p>
                                                    </div>
                                                    <?php
                                                    }else {
                                                    ?>
                                                    <a href="{{URL::to('/tour/'.$related_tour[0]->tour_name_EN)}}"><h3>{{$related_tour[0]->tour_name_EN}}</h3></a>
                                                    <p class="col-6">{{$related_tour[0]->destination_name_EN}}</p>
                                                    <p class="col-6" style="text-align: center">{{$related_tour[0]->typetour_name_EN}}</p>
                                                    <?php
                                                    }
                                                    ?>

                                                    <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                                        <div class="days">
                                                            <i class="fa fa-clock-o"></i>
                                                            <a href="#">{{$related_tour[0]->tour_day}} {{__('days')}} {{$related_tour[0]->tour_night}} {{__('nights')}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single_place">
                                                <div class="thumb">
                                                    <img src="{{asset('uploads/tours/thumb/'.$related_tour[1]->tour_thumb)}}" alt="">
                                                    <a href="#" class="prise">{{$related_tour[1]->tour_price}}</a>
                                                </div>
                                                <div class="place_info">
                                                    <?php $lang_status = Session::get('language');
                                                    if($lang_status!="en"){
                                                    ?>
                                                    <a href="{{URL::to('/tour/'.$related_tour[1]->tour_name_EN)}}"><h3>{{$related_tour[1]->tour_name_VI}}</h3></a>
                                                    <div class="row">
                                                        <p class="col-6">{{$related_tour[1]->destination_name_VI}}</p>
                                                        <p class="col-6" style="text-align: center">{{$related_tour[1]->typetour_name_VI}}</p>
                                                    </div>
                                                    <?php
                                                    }else {
                                                    ?>
                                                    <a href="{{URL::to('/tour/'.$related_tour[1]->tour_name_EN)}}"><h3>{{$related_tour[1]->tour_name_EN}}</h3></a>
                                                    <p class="col-6">{{$related_tour[1]->destination_name_EN}}</p>
                                                    <p class="col-6" style="text-align: center">{{$related_tour[1]->typetour_name_EN}}</p>
                                                    <?php
                                                    }
                                                    ?>

                                                    <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                                        <div class="days">
                                                            <i class="fa fa-clock-o"></i>
                                                            <a href="#">{{$related_tour[1]->tour_day}} {{__('days')}} {{$related_tour[1]->tour_night}} {{__('nights')}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single_place">
                                                <div class="thumb">
                                                    <img src="{{asset('uploads/tours/thumb/'.$related_tour[2]->tour_thumb)}}" alt="">
                                                    <a href="#" class="prise">{{$related_tour[2]->tour_price}}</a>
                                                </div>
                                                <div class="place_info">
                                                    <?php $lang_status = Session::get('language');
                                                    if($lang_status!="en"){
                                                    ?>
                                                    <a href="{{URL::to('/tour/'.$related_tour[2]->tour_name_EN)}}"><h3>{{$related_tour[2]->tour_name_VI}}</h3></a>
                                                    <div class="row">
                                                        <p class="col-6">{{$related_tour[2]->destination_name_VI}}</p>
                                                        <p class="col-6" style="text-align: center">{{$related_tour[2]->typetour_name_VI}}</p>
                                                    </div>
                                                    <?php
                                                    }else {
                                                    ?>
                                                    <a href="{{URL::to('/tour/'.$related_tour[2]->tour_name_EN)}}"><h3>{{$related_tour[2]->tour_name_EN}}</h3></a>
                                                    <p class="col-6">{{$related_tour[2]->destination_name_EN}}</p>
                                                    <p class="col-6" style="text-align: center">{{$related_tour[2]->typetour_name_EN}}</p>
                                                    <?php
                                                    }
                                                    ?>

                                                    <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                                        <div class="days">
                                                            <i class="fa fa-clock-o"></i>
                                                            <a href="#">{{$related_tour[2]->tour_day}} {{__('days')}} {{$related_tour[2]->tour_night}} {{__('nights')}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single_place">
                                                <div class="thumb">
                                                    <img src="{{asset('uploads/tours/thumb/'.$related_tour[3]->tour_thumb)}}" alt="">
                                                    <a href="#" class="prise">{{$related_tour[3]->tour_price}}</a>
                                                </div>
                                                <div class="place_info">
                                                    <?php $lang_status = Session::get('language');
                                                    if($lang_status!="en"){
                                                    ?>
                                                    <a href="{{URL::to('/tour/'.$related_tour[3]->tour_name_EN)}}"><h3>{{$related_tour[3]->tour_name_VI}}</h3></a>
                                                    <div class="row">
                                                        <p class="col-6">{{$related_tour[0]->destination_name_VI}}</p>
                                                        <p class="col-6" style="text-align: center">{{$related_tour[3]->typetour_name_VI}}</p>
                                                    </div>
                                                    <?php
                                                    }else {
                                                    ?>
                                                    <a href="{{URL::to('/tour/'.$related_tour[3]->tour_name_EN)}}"><h3>{{$related_tour[3]->tour_name_EN}}</h3></a>
                                                    <p class="col-6">{{$related_tour[3]->destination_name_EN}}</p>
                                                    <p class="col-6" style="text-align: center">{{$related_tour[3]->typetour_name_EN}}</p>
                                                    <?php
                                                    }
                                                    ?>

                                                    <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                                        <div class="days">
                                                            <i class="fa fa-clock-o"></i>
                                                            <a href="#">{{$related_tour[3]->tour_day}} {{__('days')}} {{$related_tour[3]->tour_night}} {{__('nights')}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single_place">
                                                <div class="thumb">
                                                    <img src="{{asset('uploads/tours/thumb/'.$related_tour[4]->tour_thumb)}}" alt="">
                                                    <a href="#" class="prise">{{$related_tour[4]->tour_price}}</a>
                                                </div>
                                                <div class="place_info">
                                                    <?php $lang_status = Session::get('language');
                                                    if($lang_status!="en"){
                                                    ?>
                                                    <a href="{{URL::to('/tour/'.$related_tour[4]->tour_name_EN)}}"><h3>{{$related_tour[4]->tour_name_VI}}</h3></a>
                                                    <div class="row">
                                                        <p class="col-6">{{$related_tour[4]->destination_name_VI}}</p>
                                                        <p class="col-6" style="text-align: center">{{$related_tour[4]->typetour_name_VI}}</p>
                                                    </div>
                                                    <?php
                                                    }else {
                                                    ?>
                                                    <a href="{{URL::to('/tour/'.$related_tour[4]->tour_name_EN)}}"><h3>{{$related_tour[4]->tour_name_EN}}</h3></a>
                                                    <p class="col-6">{{$related_tour[4]->destination_name_EN}}</p>
                                                    <p class="col-6" style="text-align: center">{{$related_tour[4]->typetour_name_EN}}</p>
                                                    <?php
                                                    }
                                                    ?>

                                                    <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                                        <div class="days">
                                                            <i class="fa fa-clock-o"></i>
                                                            <a href="#">{{$related_tour[4]->tour_day}} {{__('days')}} {{$related_tour[4]->tour_night}} {{__('nights')}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single_place">
                                                <div class="thumb">
                                                    <img src="{{asset('uploads/tours/thumb/'.$related_tour[5]->tour_thumb)}}" alt="">
                                                    <a href="#" class="prise">{{$related_tour[5]->tour_price}}</a>
                                                </div>
                                                <div class="place_info">
                                                    <?php $lang_status = Session::get('language');
                                                    if($lang_status!="en"){
                                                    ?>
                                                    <a href="{{URL::to('/tour/'.$related_tour[5]->tour_name_EN)}}"><h3>{{$related_tour[5]->tour_name_VI}}</h3></a>
                                                    <div class="row">
                                                        <p class="col-6">{{$related_tour[5]->destination_name_VI}}</p>
                                                        <p class="col-6" style="text-align: center">{{$related_tour[5]->typetour_name_VI}}</p>
                                                    </div>
                                                    <?php
                                                    }else {
                                                    ?>
                                                    <a href="{{URL::to('/tour/'.$related_tour[5]->tour_name_EN)}}"><h3>{{$related_tour[5]->tour_name_EN}}</h3></a>
                                                    <p class="col-6">{{$related_tour[5]->destination_name_EN}}</p>
                                                    <p class="col-6" style="text-align: center">{{$related_tour[5]->typetour_name_EN}}</p>
                                                    <?php
                                                    }
                                                    ?>

                                                    <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <a href="#">(20 Review)</a>
                                </span>
                                                        <div class="days">
                                                            <i class="fa fa-clock-o"></i>
                                                            <a href="#">{{$related_tour[5]->tour_day}} {{__('days')}} {{$related_tour[5]->tour_night}} {{__('nights')}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

        </div>
    </div>
        @endif
    <div class="why_book_us">
            <div class="why_book_us_text"><h1>Why Book Us</h1></div>
            <div class="why_book_us_background">
                <div class="container">
                    <div class="row" >
                        <div class=" col-md-3 col-sm-6  best_price wow fadeInUp " data-wow-duration="2500ms">
                            <img data-src="https://www.asiaeyestravel.com/template/public/images/whybook/Icon_bestprice.png" alt="" class=" ls-is-cached lazyloaded" src="https://www.asiaeyestravel.com/template/public/images/whybook/Icon_bestprice.png">
                            <div class="review-content">{{__('Best Price')}} </div>
                            <div class="review-content2" >{{__('Save your costs')}}</div>
                        </div>
                        <div class=" col-md-3 col-sm-6  best_price wow fadeInUp " data-wow-duration="2500ms">
                            <img data-src="https://www.asiaeyestravel.com/template/public/images/whybook/icon_support.png" alt="" class=" ls-is-cached lazyloaded" src="https://www.asiaeyestravel.com/template/public/images/whybook/icon_support.png">
                            <div class="review-content">{{__('Always support')}}</div>
                            <div class="review-content2">{{__('Close and continuous attention throughout the trip')}}</div>
                        </div>
                        <div class=" col-md-3 col-sm-6  best_price wow fadeInUp " data-wow-duration="2500ms">
                            <img data-src="https://www.asiaeyestravel.com/template/public/images/whybook/icon_circlestar.png" alt="" class=" lazyloaded" src="https://www.asiaeyestravel.com/template/public/images/whybook/icon_circlestar.png">
                            <div class="review-content">{{__('Easy customize')}}</div>
                            <div class="review-content2">{{__('Exclusive customized trips so that nothing is missing')}}</div>
                        </div>
                        <div class=" col-md-3 col-sm-6  best_price wow fadeInUp " data-wow-duration="2500ms">
                            <img data-src="https://www.asiaeyestravel.com/template/public/images/whybook/icon_verified.png" alt="" class=" lazyloaded" src="https://www.asiaeyestravel.com/template/public/images/whybook/icon_verified.png">
                            <div class="review-content">{{__('Indigenous collaborators')}}</div>
                            <div class="review-content2">{{__('Local agency with a professional and accessible team')}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script>

       function onlyNumberKey(evt) {
           var ASCIICode = (evt.which) ? evt.which : evt.keyCode
           if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
               return false;
           return true;
       }
    </script>
@endsection
