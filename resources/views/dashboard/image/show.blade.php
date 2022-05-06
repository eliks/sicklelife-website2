@extends('dashboard.layout-main')

@section("extra_styles")

    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet"/>  

@endsection

@section('content')

<!-- Page Inner -->
<div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">
            Image
            <a href="{{ route('dashboard.image.index') }}" class="btn btn-default pull-right">Image List</a>
            <a href="{{ route('dashboard.image.edit', ['image' => $image]) }}" class="btn btn-default pull-right">Edit Image</a>
        </h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-7">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Image Details</h4>
                    </div>
                    <div class="panel-body">
                        <table>
                            <tr>
                                <th class="text-primary">Name</th>
                                <td>{{ $image->name }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Description</th>
                                <td>{{ $image->description }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Listing Date</th>
                                <td>{{ $image->listing_date }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Added By</th>
                                <td>{{ $image->added_by_name }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Created At</th>
                                <td>{{ $image->created_at }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="thumbnail"><img src="{{ asset($image->image_url) }}" alt="{{ $image->name }}"></div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
    @include("dashboard.subs.footer")
</div><!-- /Page Inner -->

@endsection

@section("extra_scripts")

    <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('assets/js/ecaps.min.js') }}"></script>
    
@endsection