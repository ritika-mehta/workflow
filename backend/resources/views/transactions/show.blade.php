@extends('layouts.app')

@section('content')

    <div class="page-content">
        <div class="portlet light bordered">

            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{ route('transactions.transaction.index') }}">Transactions</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Show Transactions</span>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    </br>
                    <div class="portlet-title">
                        <div class="caption">
                            <h4 class="caption-subject bold uppercase">
                                <i class="fa fa-plus"></i>&nbspShow Transactions 
                            </h4>
                        </div>
                    </div>
                    <div class="portlet-body form margin-top-25">
                      
                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Transactions Id:</strong>
                            </label>
                           <p>{{$data->txn_id}}</p>
                        </div>
                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>User Name:</strong>
                            </label>
                           <p>{{$user_name['name']}}</p>
                        </div>
                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong> Plan Name:</strong>
                            </label>
                           <p>{{$plan_name['name']}}</p>
                        </div>
                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Amount:</strong>
                            </label>
                           <p>{{$data->amount}}</p>
                        </div>
                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Payment Status:</strong>
                            </label>
                           <p>{{$payment_status}}</p>
                        </div>

                        <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Payment Method:</strong>
                            </label>
                           <p>{{$data->payment_method}}</p>
                        </div>
                         <div class="form-group form-md-line-input has-info">
                            <label for="category_id">
                                <strong>Transactions Date:</strong>
                            </label>
                           <p>{{display_date_time($data->created_at)}}</p>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


