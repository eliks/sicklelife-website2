@extends('dashboard.layout-main')

@section("extra_styles")

    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet"/>  
    <link href="{{ asset('assets/plugins/datatables/css/jquery.datatables.min.css') }}" rel="stylesheet" type="text/css"/>	
    <link href="{{ asset('assets/plugins/datatables/css/jquery.datatables_themeroller.css') }}" rel="stylesheet" type="text/css"/>	
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

<!-- Page Inner -->
<div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">
            Images List
            <a href="{{ route('dashboard.image.create') }}" class="btn btn-default pull-right">Create Image</a>
        </h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">All Images - latest on top</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="max-width: 180px;">Name</th>
                                    <th style="max-width: 280px;">Description</th>
                                    <th>Added By</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th style="max-width: 180px;">Name</th>
                                    <th style="max-width: 280px;">Description</th>
                                    <th>Added By</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($images as $k => $image)
                                    <tr>
                                        <td>{{ $k + 1 }}</td>
                                        <td style="max-width: 180px;">{{ $image->name }}</td>
                                        <td style="max-width: 280px;">{{ $image->description }}</td>
                                        <td>{{ $image->added_by_name }}</td>
                                        <td>{{ $image->created_at }}</td>
                                        <td>
                                            <a href="{{ route('dashboard.image.show', ['image' => $image]) }}" class="text-info" title="View details">
                                                <i class="fa fa-crosshairs"></i>
                                            </a>
                                            <a href="{{ route('dashboard.image.edit', ['image' => $image]) }}" class="text-warning" title="Edit details">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>  
                        </div>
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
    <script src="{{ asset('assets/plugins/datatables/js/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/ecaps.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/table-data.js') }}"></script>
    
@endsection