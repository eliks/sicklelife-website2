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
            Edit User Password
            <a href="{{ route('dashboard.user.index') }}" class="btn btn-default pull-right">User List</a>
        </h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Edit User Password Form</h4>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('dashboard.user.update_password') }}" class="form-horizontal">
                            @csrf
                            <div class="form-group @error('password') has-error  @enderror">
                                <label for="password" class="col-sm-4 control-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="password" name="password">
                                    @error('password')
                                        <p class="help-block" style="margin-bottom:0;">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('password_confirmation') has-error  @enderror">
                                <label for="password_confirmation" class="col-sm-4 control-label">Password Confirmation</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                    @error('password_confirmation')
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
                                    <button type="submit" class="btn btn-block btn-success">Update</button>
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