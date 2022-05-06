@extends('dashboard.layout-main')

@section("extra_styles")

    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet"/>  

@endsection

@section('content')

<!-- Page Inner -->
<div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">Blog Article</h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Blog Article Details</h4>
                    </div>
                    <div class="panel-body">
                        <table>
                            <tr>
                                <th class="text-primary">Title</th>
                                <td>{{ $blogitem->title }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Brief</th>
                                <td>{{ $blogitem->brief }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Category</th>
                                <td>{{ $blogitem->category_str }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Authors</th>
                                <td>@foreach($blogitem->authors as $author) {{ $author->name }}, @endforeach</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Listing Date</th>
                                <td>{{ $blogitem->listing_date }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Status</th>
                                <td>@if($blogitem->published) <span class="text-info">PUBLISHED</span> @else <span class="text-warning">NOT PUBLISHED</span>@endif</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Added By</th>
                                <td>{{ $blogitem->author_name }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Created At</th>
                                <td>{{ $blogitem->created_at }}</td>
                            </tr>
                        </table>
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
    <script src="{{ asset('assets/js/ecaps.min.js') }}"></script>
    
@endsection