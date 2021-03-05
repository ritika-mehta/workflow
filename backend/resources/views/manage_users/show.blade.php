@extends('layouts.app')

@section('content')

    <div class="page-content">
        <div class="portlet light bordered">

            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{ route('blogs.blog.index') }}">User</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Show User</span>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    </br>
                    <div class="portlet-title">
                        <div class="caption">
                            <h4 class="caption-subject bold uppercase">
                                <i class="fa fa-plus"></i>&nbspShow User
                            </h4>
                        </div>
                    </div>
                    <div class="portlet-body form margin-top-25">
                      
                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Name:</strong>
                            </label>
                           <p>{{$user_data->name}}</p>
                        </div>
                        
                         <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Email:</strong>
                            </label>
                           <p>{{$user_data->email}}</p>
                        </div>

                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Status:</strong>
                            </label>
                           <p>{{$user_data->status}}</p>
                        </div>
                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Name:</strong>
                            </label>
                           <p>{{display_date_time($user_data->created_at)}}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


