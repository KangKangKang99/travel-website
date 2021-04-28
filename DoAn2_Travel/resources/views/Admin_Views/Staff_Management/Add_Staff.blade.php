@extends('Admin_Views.Admin_Layout')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{__('Add Staff')}}</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Staff')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-lg-6">
            <div class="card">
                <form role="form" action="{{URL::to('/save-staff')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field() }}
                    <div class="card-body">
                        <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span  style="text-align: center;color: red;font-weight: bold;width: 100%;">'.$message.'</span>';
                            Session::put('message',null);
                        }
                        ?>

                        <div class="d-flex no-block align-items-center">
                            <h4 class="card-title">{{__('ADD STAFF')}}</h4>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="" class="control-label col-form-label">{{__("Position")}}</label>
                                    <select name="position_id" class="form-control" required>
                                        <option value="2">{{__('Technical department')}}</option>
                                        <option value="3">{{__('Sales department')}}</option>
                                        <option value="4">{{__('Customer Care department')}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label col-form-label">{{__("Name")}}</label>
                                    <input type="text" class="form-control"  placeholder="{{__("Name here")}}" name="staff_name"required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label  class="control-label col-form-label">{{__("Birth")}}</label>
                                    <input type="date" class="form-control"   name="staff_birth"required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label  class="control-label col-form-label">{{__("Phone number")}}</label>
                                    <input type="text" class="form-control"   name="staff_phone_number"required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label  class="control-label col-form-label">{{__("Nationality")}}</label>
                                    <input type="text" class="form-control"  placeholder="{{__("Nationality")}}" name="staff_nationality"required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label  class="control-label col-form-label">{{__("Address")}}</label>
                                    <input type="text" class="form-control"  placeholder="{{__("Address")}}" name="staff_address" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label col-form-label">{{__("Email")}}</label>
                                    <input type="email" class="form-control"  placeholder="{{__("Email")}}" name="staff_email" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label col-form-label">{{__("Password")}}</label>
                                    <input type="password" class="form-control"  placeholder="{{__("")}}" name="staff_password" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="action-form">
                            <div class="form-group m-b-0 text-center">
                                <div></div>
                                <button type="submit" class="btn btn-info waves-effect waves-light">{{__('Save')}}</button>
                                <a href="{{URL::to('/add-staff')}}" class="btn btn-dark waves-effect waves-light">{{__('Cancel')}}</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
