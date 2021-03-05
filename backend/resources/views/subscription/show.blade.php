@extends('layouts.app')

@section('content')

    <div class="page-content">
        <div class="portlet light bordered">

            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{ route('blogs.blog.index') }}">subscription</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Show Subscription</span>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    </br>
                    <div class="portlet-title">
                        <div class="caption">
                            <h4 class="caption-subject bold uppercase">
                                <i class="fa fa-plus"></i>&nbspShow Subscription
                            </h4>
                        </div>
                    </div>
                    <div class="portlet-body form margin-top-25">
                      
                       <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Plan Name:</strong>
                            </label>
                           <p>{{$data->name}}</p>
                        </div>
                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Description:</strong>
                            </label>
                           <p>{{$data->description}}</p>
                        </div>
                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Amount:</strong>
                            </label>
                           <p>{{$data->amount}}</p>
                        </div>
                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>No of clicks:</strong>
                            </label>
                           <p>{{$data->no_of_clicks}}</p>
                        </div>
                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Valid days:</strong>
                            </label>
                           <p>{{$data->valid_days}}</p>
                        </div>

                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Status:</strong>
                            </label>
                           <p>{{$data->status}}</p>
                        </div>

                          <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Created Date:</strong>
                            </label>
                           <p>{{display_date_time($data->created_at)}}</p>
                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


