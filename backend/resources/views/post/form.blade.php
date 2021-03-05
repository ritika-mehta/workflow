

<div class="form-group form-md-line-input has-info">
	@if( $errors->has('title'))
	    <span class="err-msg">
	                {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
	    </span>
	@endif
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($post)->title) }}" minlength="1" placeholder="Enter title here...">
    <label for="title">
        <strong>Title</strong>
        <span class="required">*</span>
    </label>   
</div>

<div class="form-group form-md-line-input has-info">
    @if( $errors->has('url'))
        <span class="err-msg">
                    {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
        </span>
    @endif
        <input class="form-control" name="url" type="text" id="url" value="{{ old('url', optional($post)->url) }}" minlength="1" placeholder="Enter Url here...">
    <label for="url">
        <strong>Post Url</strong>
        <span class="required">*</span>
    </label>   
</div>

<div class="form-group form-md-line-input has-info">
    <input type="file" name="image" id="image"  class="form-control">
        <label for="image">
            <strong>Image</strong>
        <span class="required">*</span>
    </label>   
</div>

 @if(filter_var($post->image, FILTER_VALIDATE_URL))
        <div class="form-group form-md-line-input has-info">
                <img width="100px;" src="{{$post->image}}">
            <input name="image" type="hidden" class="form-control uploaded-file-name" readonly value="{{$post->image}}">
        </div>
 @else
        <div class="form-group form-md-line-input has-info">
                <img width="200" src="{{asset('storage/post_images/'.$post->image)}}">
            <input name="image" type="hidden" class="form-control uploaded-file-name" readonly value="{{$post->image}}">
        </div>
@endif

<div class="form-group form-md-line-input has-info">
    @if( $errors->has('description'))
        <span class="err-msg">
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
        </span>
    @endif
       <textarea  id="" class="form-control" name="description" style="height: 200px;" placeholder="Enter description here...">{{ old('content', optional($post)->description) }}</textarea>
    <label for="link">
        <strong>Description</strong>
        <span class="required">*</span>
    </label>   
</div>


<div class="form-group form-md-line-input has-info">
	@if( $errors->has('status'))
	    <span class="err-msg">
	                {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
	    </span>
	@endif
         <select class="form-control" id="publish_status" name="publish_status">
		    <option value="">Please Select Status</option>
              <option value="pending" {{ $post->publish_status=='pending' ? 'selected' : '' }}>Pending</option>
              <option value="publish" {{ $post->publish_status=='publish' ? 'selected' : '' }}>Publish</option>
              <option value="reject" {{ $post->publish_status=='reject' ? 'selected' : '' }}>Reject</option> 
        </select>    
    <label for="status">
        <strong>Publish Status</strong>
        <span class="required">*</span>
   </label>
</div>



