@extends('dashboard.layout-main')

@section("extra_styles")

    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet"/>  
    <link href="{{ asset('assets/plugins/summernote-master/summernote.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

<!-- Page Inner -->
<div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">
            Add New User
            <a href="{{ route('dashboard.user.index') }}" class="btn btn-default pull-right">User List</a>
        </h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">New User Form</h4>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('dashboard.user.store') }}" class="form-horizontal">
                            @csrf
                            <div class="form-group @error('name') has-error  @enderror">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('email') has-error  @enderror">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('user_type') has-error  @enderror">
                                <label class="col-sm-2 control-label">User Type</label>
                                <div class="col-sm-10">
                                    <select style="margin-bottom:15px;" class="form-control" name="user_type">
                                        @foreach($user_types as $user_type)
                                            <option value="{{ $user_type->id }}" {{ old('user_type') == $user_type->id ? "selected" : "" }}>{{ $user_type->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_type')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('password') has-error  @enderror">
                                <label for="password" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="password" name="password" value="{{ old('password') }}">
                                    @error('password')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <button type="reset" class="btn btn-block btn-warning">Clear</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-block btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
    @include("dashboard.subs.footer")
</div><!-- /Page Inner -->

@endsection

@section("extra_scripts")

    <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/summernote-master/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/ecaps.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-elements.js') }}"></script>
    
@endsection