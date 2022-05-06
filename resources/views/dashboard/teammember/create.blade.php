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
        <h3 class="breadcrumb-header">Add New Team Member</h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">New Team Member Form</h4>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bio" class="col-sm-2 control-label">Bio</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="bio" name="bio">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sm_facebook" class="col-sm-2 control-label">Facebook Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sm_facebook" name="sm_facebook">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sm_twitter" class="col-sm-2 control-label">Twitter Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sm_twitter" name="sm_twitter">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sm_twitter" class="col-sm-2 control-label">LinkedIn Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sm_twitter" name="sm_twitter">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sm_instagram" class="col-sm-2 control-label">Instagram Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sm_instagram" name="sm_instagram">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="reset" class="btn btn-warning">Clear</button>
                                </div>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-success">Submit</button>
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