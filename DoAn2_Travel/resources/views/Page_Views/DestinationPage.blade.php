@extends('Page_Views.Pages_Layout')
@section('content')

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2" style="background-image: url({{asset('Pages/img/banner/bradcam2.png')}})">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>{{__('Destinations')}}</h3>
                        <p>{{__('Southeast Asia at your feed')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    @include('Page_Views.where_to_go_bar')

    <!-- Destinations -->
    <div class="col-md-12 col-sm-12" style="padding-top:80px">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;text-align: center;font-family: 'Philosopher';font-weight: bolder">
                {{__('It will be easy for you to take a trip with all our suggested ideas that helps your adventure become an unforgettable moment of a lifetime…')}}
            </h2>
        </div>
    </div>
    <div class="best-rooms py-4" >
        <div class="container py-md-4">
            <div class="ban-content-inf row">
                <div class="maghny-gd-1 col-lg-6 Vietnam" style="padding-top: 25px!important;">
                    <div class="maghny-grid">
                        <figure class="effect-lily border-radius  m-0">
                            <a href="{{URL::to('/destination/'.$dest[1]->destination_name_EN)}}">
                            <img  class="img-fluid" src="{{asset('uploads/destinations/thumb/'.$dest[1]->destination_thumb)}}" alt="" />
                                <figcaption>
                                    <div>
                                        <?php $lang_status = Session::get('language');
                                        if ($lang_status!="en"){
                                        ?>
                                        <h4> {{$dest[1]->destination_name_VI}}</h4>
                                        <?php
                                        }
                                        else{
                                        ?>
                                        <h4> {{$dest[1]->destination_name_EN}}</h4>
                                        <?php
                                        } ?>
                                        <p>10 {{__('Places')}} </p>
                                    </div>

                                </figcaption>
                            </a>
                        </figure>

                    </div>
                </div>
                <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                    <div class="row">
                        <div class="maghny-gd-1 col-lg-6 col-12 thailand" style="padding-top: 25px!important;">
                            <div class="maghny-grid">
                                <figure class="effect-lily border-radius">
                                    <a href="{{URL::to('destination/'.$dest[2]->destination_name_EN)}}">
                                    <img class="img-fluid" src="{{asset('uploads/destinations/thumb/'.$dest[2]->destination_thumb)}}" alt="" />
                                    <figcaption>
                                        <div>
                                            <?php $lang_status = Session::get('language');
                                            if ($lang_status!="en"){
                                            ?>
                                            <h4> {{$dest[2]->destination_name_VI}}</h4>
                                            <?php
                                            }
                                            else{
                                            ?>
                                            <h4> {{$dest[2]->destination_name_EN}}</h4>
                                            <?php
                                            } ?>
                                            <p>10 {{__('Places')}} </p>
                                        </div>
                                    </figcaption>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="maghny-gd-1 col-lg-6 col-12 laos" style="padding-top: 25px!important;">
                            <div class="maghny-grid">
                                <figure class="effect-lily border-radius">
                                    <a href="{{URL::to('destination/'.$dest[3]->destination_name_EN)}}">
                                        <img class="img-fluid" src="{{asset('uploads/destinations/thumb/'.$dest[3]->destination_thumb)}}" alt="" />
                                        <figcaption>
                                            <div>
                                                <?php $lang_status = Session::get('language');
                                                if ($lang_status!="en"){
                                                ?>
                                                <h4> {{$dest[3]->destination_name_VI}}</h4>
                                                <?php
                                                }
                                                else{
                                                ?>
                                                <h4> {{$dest[3]->destination_name_EN}}</h4>
                                                <?php
                                                } ?>
                                                <p>10 {{__('Places')}} </p>
                                            </div>
                                        </figcaption>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="maghny-gd-1 col-lg-6 col-12 mt-4 myanmar">
                            <div class="maghny-grid">
                                <figure class="effect-lily border-radius">
                                    <a href="{{URL::to('destination/'.$dest[4]->destination_name_EN)}}">
                                        <img class="img-fluid" src="{{asset('uploads/destinations/thumb/'.$dest[4]->destination_thumb)}}" alt="" />
                                        <figcaption>
                                            <div>
                                                <?php $lang_status = Session::get('language');
                                                if ($lang_status!="en"){
                                                ?>
                                                <h4> {{$dest[4]->destination_name_VI}}</h4>
                                                <?php
                                                }
                                                else{
                                                ?>
                                                <h4> {{$dest[4]->destination_name_EN}}</h4>
                                                <?php
                                                } ?>
                                                <p>10 {{__('Places')}} </p>
                                            </div>
                                        </figcaption>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="maghny-gd-1 col-lg-6 col-12 mt-4 indonesia">
                            <div class="maghny-grid">
                                <figure class="effect-lily border-radius">
                                    <a href="{{URL::to('destination/'.$dest[5]->destination_name_EN)}}">
                                        <img class="img-fluid" src="{{asset('uploads/destinations/thumb/'.$dest[5]->destination_thumb)}}" alt="" />
                                        <figcaption>
                                            <div>
                                                <?php $lang_status = Session::get('language');
                                                if ($lang_status!="en"){
                                                ?>
                                                <h4> {{$dest[5]->destination_name_VI}}</h4>
                                                <?php
                                                }
                                                else{
                                                ?>
                                                <h4> {{$dest[5]->destination_name_EN}}</h4>
                                                <?php
                                                } ?>
                                                <p>10 {{__('Places')}} </p>
                                            </div>
                                        </figcaption>
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="maghny-gd-1 col-lg-4 col-12 cambodia " style="padding-top:  25px">
                    <div class="maghny-grid">
                        <figure class="effect-lily border-radius">
                            <a href="{{URL::to('destination/'.$dest[6]->destination_name_EN)}}">
                                <img class="img-fluid" src="{{asset('uploads/destinations/thumb/'.$dest[6]->destination_thumb)}}" alt="" />
                                <figcaption>
                                    <div>
                                        <?php $lang_status = Session::get('language');
                                        if ($lang_status!="en"){
                                        ?>
                                        <h4> {{$dest[6]->destination_name_VI}}</h4>
                                        <?php
                                        }
                                        else{
                                        ?>
                                        <h4> {{$dest[6]->destination_name_EN}}</h4>
                                        <?php
                                        } ?>
                                        <p>10 {{__('Places')}} </p>
                                    </div>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="maghny-gd-1 col-lg-4 col-12 phillipin " style="padding-top:  25px">
                    <div class="maghny-grid">
                        <figure class="effect-lily border-radius">
                            <a href="{{URL::to('destination/'.$dest[7]->destination_name_EN)}}">
                                <img class="img-fluid" src="{{asset('uploads/destinations/thumb/'.$dest[7]->destination_thumb)}}" alt="" />
                                <figcaption>
                                    <div>
                                        <?php $lang_status = Session::get('language');
                                        if ($lang_status!="en"){
                                        ?>
                                        <h4> {{$dest[7]->destination_name_VI}}</h4>
                                        <?php
                                        }
                                        else{
                                        ?>
                                        <h4> {{$dest[7]->destination_name_EN}}</h4>
                                        <?php
                                        } ?>
                                        <p>10 {{__('Places')}} </p>
                                    </div>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="maghny-gd-1 col-lg-4 col-12 malaysia " style="padding-top:  25px">
                    <div class="maghny-grid">
                        <figure class="effect-lily border-radius">
                            <a href="{{URL::to('destination/'.$dest[8]->destination_name_EN)}}">
                                <img class="img-fluid" src="{{asset('uploads/destinations/thumb/'.$dest[8]->destination_thumb)}}" alt="" />
                                <figcaption>
                                    <div>
                                        <?php $lang_status = Session::get('language');
                                        if ($lang_status!="en"){
                                        ?>
                                        <h4> {{$dest[8]->destination_name_VI}}</h4>
                                        <?php
                                        }
                                        else{
                                        ?>
                                        <h4> {{$dest[8]->destination_name_EN}}</h4>
                                        <?php
                                        } ?>
                                        <p>10 {{__('Places')}} </p>
                                    </div>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Destination end -->

    <!-- customize_area_start  -->
    <div class="bradcam_area overlay bradcam_bg_3">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-10 ">
                                <p style="font-size: 30px;font-weight: initial">If you know what you want. . .</p>
                                <h3 style="color: white; font-size: 50px;font-weight:bolder ">CREATE YOUR BEST TRIP</h3>
                                <a href="#" class="genric-btn danger-border e-large" style="border-radius: 5px;" >Customize tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- customize_area_end  -->
   {{-- <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Recent Trips</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/1.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/2.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/3.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection

