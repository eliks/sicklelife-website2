@extends('dashboard.layout-main')

@section("extra_styles")

    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/nvd3/nv.d3.min.css') }}" rel="stylesheet"> 

@endsection

@section('content')

    <!-- Page Inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Dashboard</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('dashboard.blog.index') }}">
                        <div class="panel panel-white stats-widget">
                            <div class="panel-body">
                                <div class="pull-left">
                                    <span class="stats-number">{{ count(App\Models\Blogitem::all()) }}</span>
                                    <p class="stats-info">Blog Articles</p>
                                </div>
                                <div class="pull-right">
                                    <i class="icon-list stats-icon"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('dashboard.teammember.index') }}">
                        <div class="panel panel-white stats-widget">
                            <div class="panel-body">
                                <div class="pull-left">
                                    <span class="stats-number">{{ count(App\Models\TeamMember::all()) }}</span>
                                    <p class="stats-info">Team Members</p>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-user-md stats-icon"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('dashboard.image.index') }}">
                        <div class="panel panel-white stats-widget">
                            <div class="panel-body">
                                <div class="pull-left">
                                    <span class="stats-number">{{ count(App\Models\Image::all()) }}</span>
                                    <p class="stats-info">Images</p>
                                </div>
                                <div class="pull-right">
                                    <i class="icon-image stats-icon"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('dashboard.user.index') }}">
                        <div class="panel panel-white stats-widget">
                            <div class="panel-body">
                                <div class="pull-left">
                                    <span class="stats-number">{{ count(App\Models\User::all()) }}</span>
                                    <p class="stats-info">Users</p>
                                </div>
                                <div class="pull-right">
                                    <i class="icon-users stats-icon"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div><!-- Row -->
            {{-- <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Total Revenue</h4>
                        </div>
                        <div class="panel-body">
                            <div id="chart1"><svg></svg></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Server Status</h4>
                        </div>
                        <div class="panel-body">
                            <div class="container-fluid">
                                <div class="server-load row">
                                    <div class="server-stat col-sm-4">
                                        <p>167GB</p>
                                        <span>Usage</span>
                                    </div>
                                    <div class="server-stat col-sm-4">
                                        <p>320GB</p>
                                        <span>ecaps</span>
                                    </div>
                                    <div class="server-stat col-sm-4">
                                        <p>57.4%</p>
                                        <span>CPU</span>
                                    </div>
                                </div>
                            </div>
                            <div id="chart2"><svg></svg></div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Tasks</h4>
                        </div>
                        <div class="panel-body">
                            <div class="task-list">
                                <div class="task-item">
                                    <span class="task-name">Download 'Alpha' admin template</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-item">
                                    <span class="task-name">Create a new landing page</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                            <span class="sr-only">10% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-item">
                                    <span class="task-name">Delete inactive users</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-item">
                                    <span class="task-name">Update NVD3 chart plugin<i class="fa fa-check"></i></span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                            <span class="sr-only">100% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-item">
                                    <span class="task-name">Install 4 new layouts<i class="fa fa-check"></i></span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                            <span class="sr-only">100% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Invoices</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive invoice-table">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">0567</th>
                                            <td>Kenny Highland</td>
                                            <td><span class="label label-success">Finished</span></td>
                                            <td>$427</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">0186</th>
                                            <td>Darrell Price</td>
                                            <td>Twitter</td>
                                            <td><span class="label label-success">Finished</span></td>
                                            <td>$1714</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">0712</th>
                                            <td>Richard Lunsford</td>
                                            <td>Facebook</td>
                                            <td><span class="label label-danger">Denied</span></td>
                                            <td>$685</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">0095</th>
                                            <td>Amy Walker</td>
                                            <td>Youtube</td>
                                            <td><span class="label label-warning">Pending</span></td>
                                            <td>$9900</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1054</th>
                                            <td>Kathy Olson</td>
                                            <td>Youtube</td>
                                            <td><span class="label label-default">Upcoming</span></td>
                                            <td>$1250</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">0043</th>
                                            <td>Susan Mabry</td>
                                            <td>Instagram</td>
                                            <td><span class="label label-default">Upcoming</span></td>
                                            <td>$399</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Browsers</h4>
                        </div>
                        <div class="panel-body">
                            <div class="browser-stats">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-chrome"></i>Google Chrome<div class="text-success pull-right">32%<i class="fa fa-level-up"></i></div></li>
                                    <li><i class="fa fa-firefox"></i>Firefox<div class="text-success pull-right">25%<i class="fa fa-level-up"></i></div></li>
                                    <li><i class="fa fa-internet-explorer"></i>Internet Explorer<div class="text-success pull-right">16%<i class="fa fa-level-up"></i></div></li>
                                    <li><i class="fa fa-safari"></i>Safari<div class="text-danger pull-right">13%<i class="fa fa-level-down"></i></div></li>
                                    <li><i class="fa fa-opera"></i>Opera<div class="text-danger pull-right">7%<i class="fa fa-level-down"></i></div></li>
                                    <li><i class="fa fa-tablet"></i>Mobile &amp; tablet<div class="text-success pull-right">4%<i class="fa fa-level-up"></i></div></li>
                                    <li><i class="fa fa-hashtag"></i>Others<div class="text-success pull-right">3%<i class="fa fa-level-up"></i></div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Projects</h4>
                        </div>
                        <div class="panel-body">
                            <div class="project-stats">
                                <ul class="list-unstyled">
                                    <li>Alpha - Admin Template<span class="label label-default pull-right">85%</span></li>
                                    <li>Meteor - Landing Page<span class="label label-success pull-right">Finished</span></li>
                                    <li>Modern - Corporate Website<span class="label label-success pull-right">Finished</span></li>
                                    <li>ecaps - Admin Template<span class="label label-danger pull-right">Rejected</span></li>
                                    <li>Backend UI<span class="label label-default pull-right">27%</span></li>
                                    <li>Personal Blog<span class="label label-default pull-right">48%</span></li>
                                    <li>E-mail Templates<span class="label label-default pull-right">Pending</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Income</h4>
                        </div>
                        <div class="panel-body">
                            <canvas id="chart3"></canvas>
                        </div>
                    </div>
                </div>
            </div><!-- Row --> --}}
        </div><!-- Main Wrapper -->
        @include("dashboard.subs.footer")
    </div><!-- /Page Inner -->

@endsection

@section("extra_scripts")

    <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/d3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/nvd3/nv.d3.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.time.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.symbol.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.pie.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/ecaps.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>

@endsection