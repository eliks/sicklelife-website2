@extends('dashboard.layout-main')

@section("extra_styles")

    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet"/>  

@endsection

@section('content')

<!-- Page Inner -->
<div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">
            User
            <a href="{{ route('dashboard.user.index') }}" class="btn btn-default pull-right">User List</a>
            <a href="{{ route('dashboard.user.edit', ['user' => $user]) }}" class="btn btn-default pull-right">Edit User</a>
        </h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">User Details</h4>
                    </div>
                    <div class="panel-body">
                        <table>
                            <tr>
                                <th class="text-primary">Name</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Email</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">User Type</th>
                                <td>{{ $user->type_name }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Listing Date</th>
                                <td>{{ $user->listing_date }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Status</th>
                                <td>@if(true || $user->published) <span class="text-info">ACTIVE</span> @else <span class="text-warning">NOT PUBLISHED</span>@endif</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Added By</th>
                                <td>{{ $user->added_by_name }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Created At</th>
                                <td>{{ $user->created_at }}</td>
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