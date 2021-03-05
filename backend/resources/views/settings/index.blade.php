@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="portlet light bordered">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Settings</span>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet-title">
					<br>
                    
                    @if(session('success'))
                        <div  class="alert alert-success ">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <i class="fa-lg fa fa-check"></i>
                            {{ session('success') }}
                        </div>
                    @elseif(session('error'))    
                        <div  class="alert alert-danger ">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <i class="fa-lg fa fa-close"></i>
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
                <div class="portlet-body form">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">Settings</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab">Site Configuration</a>
                                </li>
                                
                                <li>
                                    <a href="#tab_1_3" data-toggle="tab">Social media setting</a>
                                </li>
                                <li>
                                    <a href="#tab_1_4" data-toggle="tab">Copyright Text</a>
                                </li>
                                <li>
                                    <a href="#tab_1_5" data-toggle="tab">Site Logo</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- Site Configuration TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    <form method="POST" action="{{ route('site_setting.setting.store') }}" accept-charset="UTF-8"   enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label class="control-label">Site Name</label>
                                            @if( $errors->has('site_title'))
                                                <span class="err-msg">
                                                  {!! $errors->first('site_title', '<p class="help-block">:message</p>') !!}
                                                </span>
                                            @endif
                                            <input type="text" placeholder="Site Name" name="site_title" id="site_title" class="form-control" value="{{$data['site_title']}}"> 
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Site Email</label>
                                            @if( $errors->has('site_email'))
                                                <span class="err-msg">
                                                  {!! $errors->first('site_email', '<p class="help-block">:message</p>') !!}
                                                </span>
                                            @endif
                                            <input type="text" placeholder="Site Email" name="site_email" id="site_email" class="form-control" value="{{$data['site_email']}}"> 
                                        </div>
                                        
                                        <div class="margiv-top-10">
                                            <button type="submit" class="btn blue" >
                                                Save Changes
                                            </button>
                                             <button type="button" class="btn red" onclick="redirect_url($(this),'{{ route('site_setting.setting.index') }}')">Cancel
                                             </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Site Configuration  TAB -->


                                <!-- Social Media TAB -->
                                <div class="tab-pane" id="tab_1_3">
                                    <form method="POST" action="{{ route('site_setting.setting.store') }}" accept-charset="UTF-8"  enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="control-label">Facebook Url</label>
                                            @if( $errors->has('fb_url'))
                                                <span class="err-msg">
                                                  {!! $errors->first('fb_url', '<p class="help-block">:message</p>') !!}
                                                </span>
                                            @endif
                                            <input type="text" name="fb_url" class="form-control" value="{{$data['fb_url']}}"></div>
                                        <div class="form-group">
                                            <label class="control-label">Twitter url</label>
                                            @if( $errors->has('twitter_url'))
                                                <span class="err-msg">
                                                  {!! $errors->first('twitter_url', '<p class="help-block">:message</p>') !!}
                                                </span>
                                            @endif
                                            <input type="text" name="twitter_url" class="form-control" value="{{$data['twitter_url']}}"> </div>
                                        <div class="form-group">
                                            <label class="control-label">LinkedIn url</label>
                                            @if( $errors->has('linkedin_url'))
                                                <span class="err-msg">
                                                  {!! $errors->first('linkedin_url', '<p class="help-block">:message</p>') !!}
                                                </span>
                                            @endif
                                            <input type="text" name="linkedin_url" class="form-control" value="{{$data['linkedin_url']}}"> </div>    
                                        
                                        <div class="margin-top-10">
                                            <button type="submit" class="btn blue" >
                                                Save Changes
                                            </button>
                                             <button type="button" class="btn red" onclick="redirect_url($(this),'{{ route('site_setting.setting.index') }}')">Cancel
                                             </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Social Media TAB -->


                                 <!-- Copyright Text  TAB -->
                                <div class="tab-pane" id="tab_1_4">
                                    <form method="POST" action="{{ route('site_setting.setting.store') }}" accept-charset="UTF-8"  enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="control-label">Content</label>
                                            @if( $errors->has('copyright_content'))
                                                <span class="err-msg">
                                                  {!! $errors->first('copyright_content', '<p class="help-block">:message</p>') !!}
                                                </span>
                                            @endif
                                            <input type="text" name="copyright_content" value="{{$data['copyright_content']}}" class="form-control"> </div>
                                        
                                        <div class="margin-top-10">
                                           <button type="submit" class="btn blue" >
                                                Save Changes
                                            </button>
                                             <button type="button" class="btn red" onclick="redirect_url($(this),'{{ route('site_setting.setting.index') }}')">Cancel
                                             </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Copyright Text TAB -->

                                <!-- CHANGE Site logo TAB -->

                                <div class="tab-pane" id="tab_1_5">
                                    <form method="POST" action="{{ route('site_setting.setting.updateSiteLogo') }}" accept-charset="UTF-8"  enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="{{asset('storage/site_logo/'.$data['site_logo'])}}" alt=""> </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                <div>
                                                    <span class="btn default btn-file">
                                                        <span class="fileinput-new"> Select image </span>
                                                        <span class="fileinput-exists"> Change </span>
                                                        <input type="file" name="site_logo"> </span>
                                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                </div>
                                                
                                            </div>
                                            @if( $errors->has('site_logo'))
                                                <span class="err-msg">
                                                  {!! $errors->first('site_logo', '<p class="help-block">:message</p>') !!}
                                                </span>
                                            @endif
                                           <div class="clearfix margin-top-10">
                                               <span class="label label-danger">NOTE! </span>
                                               <span>Site logo must be 100x100 px.</span>
                                           </div>
                                        </div>
                                        <div class="margin-top-10">
                                           <button type="submit" class="btn blue" >
                                                Save Changes
                                            </button>
                                            <button type="button" class="btn red" onclick="redirect_url($(this),'{{ route('site_setting.setting.index') }}')">Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Site logo  TAB -->
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @push('css')
        <link href="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
    @endpush

    @push('scripts')
    <script src="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
    @endpush

@endsection
