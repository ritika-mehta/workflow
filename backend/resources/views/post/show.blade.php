@extends('layouts.app')

@section('content')

    <div class="page-content">
        <div class="portlet light bordered">

            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{ route('transactions.transaction.index') }}">Post</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Show Post</span>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    </br>
                    <div class="portlet-title">
                        <div class="caption">
                            <h4 class="caption-subject bold uppercase">
                                <i class="fa fa-plus"></i>&nbspShow Post 
                            </h4>
                        </div>
                    </div>
                    <div class="portlet-body form margin-top-25">
                      
                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Post Id:</strong>
                            </label>
                           <p>{{$data->id}}</p>
                        </div>
                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>User Name:</strong>
                            </label>
                           <p>{{ucwords($user_name['name'])}}</p>
                        </div>
                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Title:</strong>
                            </label>
                           <p>{{ucwords($data->title)}}</p>
                        </div>
                       
                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Url:</strong>
                            </label>
                           <p>{{$data->url}}</p>
                        </div>
                         <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Description:</strong>
                            </label>
                           <p>{{$data->description ? $data->description : '-/-'}}</p>
                        </div>
                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Publish Status:</strong>
                            </label>
                           <p>{{ucwords($data->publish_status)}}</p>
                        </div>
                         <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Publish Date:</strong>
                            </label>
                           <p>{{display_date_time($data->publish_date)}}</p>
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


