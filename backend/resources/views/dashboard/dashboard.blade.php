@extends('layouts.app')

@section('content')

        <div class="page-content">
            <div class="page-bar">
               <ul class="page-breadcrumb">
                  <li>
                     <a href="index.html">Home</a>
                     <i class="fa fa-circle"></i>
                  </li>
                  <li>
                     <span>Dashboard</span>
                  </li>
               </ul>
            </div>
            <div>
                <h1 class="page-title">Dashboard Stats</h1>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                        <a class="dashboard-stat dashboard-stat-v2 blue" href="{{url('/manage_users')}}">
                            <div class="visual">
                                <i class="fa fa-comments"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="{{$users_count}}">{{$users_count}}</span>
                                </div>
                                <div class="desc">Total number of users </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 red" href="{{url('/manage_post')}}">
                            <div class="visual">
                                <i class="fa fa-bar-chart-o"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="{{$post_count}}">{{$post_count}}</span>
                                </div>
                                <div class="desc">Total number of Posts </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 green" href="{{url('/manage_post')}}">
                            <div class="visual">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="{{$publish_post}}">{{$publish_post}}</span>
                                </div>
                                <div class="desc">Total number publish Post</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 green" href="{{url('/manage_post')}}">
                            <div class="visual">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="{{$boosted_post}}">{{$boosted_post}}</span></div>
                                <div class="desc">Total number of Boosted Post </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
      
@push('scripts')
    <script src="{{asset('assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
@endpush
@endsection

