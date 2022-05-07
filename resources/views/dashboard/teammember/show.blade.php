@extends('dashboard.layout-main')

@section("extra_styles")

    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet"/>  

@endsection

@section('content')

<!-- Page Inner -->
<div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">
            Team Member
            <a href="{{ route('dashboard.teammember.index') }}" class="btn btn-default pull-right">Team Member List</a>
            <a href="{{ route('dashboard.teammember.edit', ['teammember' => $teammember]) }}" class="btn btn-default pull-right">Edit Team Member</a>
        </h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Team Member Details</h4>
                    </div>
                    <div class="panel-body">
                        <table>
                            <tr>
                                <th class="text-primary">Name</th>
                                <td>{{ $teammember->name }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Role</th>
                                <td>{{ $teammember->role }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Bio</th>
                                <td>{!! $teammember->bio !!}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Displayed As Team Member</th>
                                <td>@if($teammember->displayed_as_teammember) <span class="text-info">Yes</span> @else <span class="text-warning">NO</span>@endif</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Facebook Link</th>
                                <td>{{ $teammember->sm_facebook }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Twitter Link</th>
                                <td>{{ $teammember->sm_twitter }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Linkedin Link</th>
                                <td>{{ $teammember->sm_linkedin }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Instagram Link</th>
                                <td>{{ $teammember->sm_instagram }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Added By</th>
                                <td>{{ $teammember->added_by_name }}</td>
                            </tr>
                            <tr>
                                <th class="text-primary">Created At</th>
                                <td>{{ $teammember->created_at }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset($teammember->image_url) }}" alt="{{ $teammember->name }}" class="img-thumbnail">
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