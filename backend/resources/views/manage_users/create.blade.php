@extends('layouts.app')

@section('content')

    <div class="page-content">
        <div class="portlet light bordered">

            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{ route('manage_users.manage_user.store') }}">Manage User</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Add User</span>
                    </li>
                </ul>
            </div>

            <div class="row">

                <div class="col-md-12">
                    
                    </br>

                    <div class="portlet-title">
                        <div class="caption">
                            <h4 class="caption-subject bold uppercase">
                                <i class="fa fa-edit"></i>&nbspAdd User
                            </h4>
                        </div>
                    </div>

                    <div class="portlet-body form margin-top-25">
                        <form method="POST" action="{{route('manage_users.manage_user.store') }}" id="create_manage_users_form" name="create_manage_users_form" accept-charset="UTF-8"  enctype="multipart/form-data">

                            <div class="form-body">
                                {{ csrf_field() }}
                                @include ('manage_users.form', [
                                                        'manage_users' => null,
                                                      ])

                            </div>
                            <div class="form-actions noborder">
                                
                                <button type="submit" class="btn blue" onclick='submit_form($(this),$("#create_manage_users_form"))'>
                                    Add
                                </button>
                                <button type="button" class="btn red" onclick="redirect_url($(this),'{{ route('manage_users.manage_user.index') }}')">Cancel
                                </button>
                            </div>    
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    @push('css')
        <link href="{{asset('assets/global/plugins/bootstrap-summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
    @endpush

    @push('scripts')
    <script src="{{asset('assets/global/plugins/bootstrap-summernote/summernote.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/pages/scripts/components-editors.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/faq.js')}}" type="text/javascript"></script>
    @endpush

@endsection
