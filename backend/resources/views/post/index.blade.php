@extends('layouts.app')

@section('content')
<div class="page-content">
       
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <h4 class="caption-subject bold uppercase"><i class="fa fa-list"></i>&nbspPost management
                            </h4>
                        </div>

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
                        <div class="table-container">
                            <div class="table-actions-wrapper">
                                <span class="selected-rows"></span>
                                <div class="invisible">
                                    <select class="table-group-action-input form-control input-inline input-small input-sm">
                                        <option value="">- Select Action -</option>
                                        <option value="delete_all">Delete All</option>
                                    </select>
                                    <button class="btn btn-sm green table-group-action-submit">
                                        <i class="fa fa-check"></i> Submit
                                    </button>
                                </div> 
                                <a href="javascript:void(0)" class="btn-filter">
                                    <i class="fa fa-filter"></i>
                                    <span>Filters</span>
                                </a>
                            </div>  
                            <table class="table table-striped table-bordered table-hover dt-responsive table-checkable service-table" id="datatable_ajax">
                                <thead>
                                    <tr role="row" class="heading">
                                    <th width="350" class="all">Post Id</th>
                                    <th width="400" class="tablet-l desktop">User Name</th>
                                    <th width="350" class="tablet-l desktop">Title</th>
                                    <th width="350" class="tablet-l desktop">Url</th>
                                    <th width="350" class="tablet-l desktop">Imaage</th>
                                    <th width="350" class="tablet-l desktop" id="catdata">Publish Status</th>
                                    <th width="350" class="tablet-l desktop">Publish Date</th>
                                    <th width="350" class="tablet-l desktop">Created Date</th>
                                    <th width="200" class="tablet-l desktop">Action</th>
                                    </tr>
                                    <tr class="filter" role="row"> 
                                      <td rowspan="1" colspan="1" class="filter-action">
                                        
                                            <button class="btn btn-back visible-xs visible-sm">
                                            <i class="fa fa-arrow-left"></i>
                                            Back
                                            </button>
                                            
                                            <button class="btn btn-back hidden-xs hidden-sm">
                                            <i class="fa fa-close"></i>
                                                Filters
                                            </button>

                                            <button class="btn filter-cancel btn-back">
                                                Reset
                                            </button>
                                      </td>
                                      <td rowspan="1" colspan="1" class="filter-action action-bottom"></td>
                                      <td rowspan="1" colspan="1">
                                       <div class="margin-bottom-5">
                                        <select class="form-control form-filter input-sm" name="status">
                                            <option value=""> All </option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                        </div>
                                      </td> 
                                      <td rowspan="1" colspan="1" class="filter-action action-bottom">
                                            <button class="btn filter-submit btn-back">
                                           Apply</button>
                                      </td>
                                      <td></td>  
                                      <td></td>  
                                      <td></td>  
                                      <td></td>  
                                      <td></td>  
                                    </tr>    
                                </thead>
                                <tbody>                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Are you sure to publish this post?</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <input type="hidden" name="post_id" value="" id="post_id">
          </div>
      <div class="form-group form-md-line-input has-info">
        <select class="form-control" id="status" name="status">
              <option value="">Please Select Status</option>
              <option value="publish">Publish</option>
              <option value="reject">Reject</option>
        </select> 
        <label for="status">
        <strong>Status</strong>
        <span class="required">*</span>
   </label>   
  </div>
   <div class="form-group form-md-line-input has-info">
        <select class="form-control" id="category" name="status">
              <option value="">Please Select Category</option>
            <?php foreach($blogcategory as $row) { ?>
              <option value="{{$row->id}}">{{$row->title}}</option>
           <?php } ?>
             
        </select> 
        <label for="status">
        <strong>Category</strong>
        <span class="required">*</span>
   </label>   
   </div>
   <div class="form-group form-md-line-input has-info">
        <select class="form-control" id="post_type" name="status">
              <option value="">Please Select Type</option>
              <option value="image">Image</option>
              <option value="video">video</option>
        </select> 
        <label for="status">
        <strong>Post Type</strong>
        <span class="required">*</span>
   </label>   
  </div>
    <div class="form-group form-md-line-input has-info">
        <input class="form-control" name="reason" type="text" id="reason" value="" minlength="1" placeholder="Enter reason here...">
    <label for="title">
        <strong>Comment</strong>
        <span class="required">*</span>
    </label>   
 </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="" id="submitButton" class="btn btn-primary" onclick="chstatus()">Yes</button>
      </div>
    </div>
    </div>
  </div>
 </div>
</div>

@include('layouts.datatables')

@push('scripts')
    <script>
        jQuery(document).ready(function() {
            sort_arr = [
                {data: 'id', name: 'id', "bSortable": true},
                {data: 'user_name', name: 'user_name', "bSortable": false},
                {data: 'title', name: 'title', "bSortable": false},
                {data: 'url', name: 'url', "bSortable": false},
                {data: 'image', name: 'image', "bSortable": false},
                {data: 'publish_status', name: 'publish_status', "bSortable": true},
                {data: 'publish_date', name: 'publish_date', "bSortable": true},
                {data: 'created_at', name: 'created_at', "bSortable": true},
                {data: 'action', name: 'action', "bSortable": false, searchable: false}
            ];

            default_sort_column = [[0, "desc"]];
            draw_normal_datatable(sort_arr,default_sort_column);
        });
    </script>
    <script>
   function changeStatus(id,status){ 
      $('#exampleModal').modal('show');
      $('#post_id').val(id);    
     }

  function chstatus(){ 
      var post_id = $('#post_id').val();
      var reason = $('#reason').val();
      var status = $('#status').val();
      var category = $('#category').val();
      var post_type = $('#post_type').val();
      var html_table_id = 'datatable_ajax';
     $('#exampleModal').modal('hide');
      $.ajax({
        url: '{{route("manage_posts.manage_post.chStatus")}}',
        type: 'GET',
        data: {post_id:post_id,reason:reason,status:status,category:category,post_type:post_type,_token:"{{ csrf_token() }}"},
        dataType: 'JSON',
        success: function(resp)
        {
            if (resp.success == true)
            {  
           console.log(resp.success);
                Notiflix.Notify.Success("Post status changed successfully");
                $('#reason').val('');
                $('select').val('');
                $('#' + html_table_id).DataTable().ajax.reload();
            }
            else if (resp.success == false)
            {
                Notiflix.Notify.Failure(resp.msg);
                location.reload();
            }
           
        }
       }); 
      return false;
  }


    </script>
@endpush
@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
@endpush
@endsection
