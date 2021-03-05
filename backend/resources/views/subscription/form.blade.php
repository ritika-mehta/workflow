

<div class="form-group form-md-line-input has-info">
	@if( $errors->has('name'))
	    <span class="err-msg">
	                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
	    </span>
	@endif
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($subscription)->name) }}" minlength="1" placeholder="Enter plan name here...">
    <label for="title">
        <strong>Name</strong>
        <span class="required">*</span>
    </label>   
</div>

<div class="form-group form-md-line-input has-info">
  <!--   @if( $errors->has('description'))
        <span class="err-msg">
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
        </span>
    @endif -->
        <textarea  id="" class="form-control" name="description" placeholder="Enter description here...">{{ old('content', optional($subscription)->description) }}</textarea>
    <label for="title">
        <strong>Description</strong>
        <span class="required"></span>
    </label>   
</div>

<div class="form-group form-md-line-input has-info">
    @if( $errors->has('amount'))
        <span class="err-msg">
                    {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
        </span>
    @endif
        <input class="form-control" name="amount" type="number" id="amount" value="{{ old('amount', optional($subscription)->amount) }}" minlength="1" placeholder="Enter amount here...">
    <label for="email">
        <strong>Amount</strong>
        <span class="required">*</span>
    </label>   
</div>

<div class="form-group form-md-line-input has-info">
    <!-- @if( $errors->has('no_of_clicks'))
        <span class="err-msg">
                    {!! $errors->first('no_of_clicks', '<p class="help-block">:message</p>') !!}
        </span>
    @endif -->
        <input class="form-control" name="no_of_clicks" type="number" id="no_of_clicks" value="{{ old('no_of_clicks', optional($subscription)->no_of_clicks) }}" minlength="1" placeholder="Enter no of clicks here...">
    <label for="link">
        <strong>No of clicks</strong>
        <span class="required"></span>
    </label>   
</div>

<div class="form-group form-md-line-input has-info">
  <!--   @if( $errors->has('valid_days'))
        <span class="err-msg">
                    {!! $errors->first('no_of_clicks', '<p class="help-block">:message</p>') !!}
        </span>
    @endif -->
        <input class="form-control" name="valid_days" type="number" id="valid_days" value="{{ old('valid_days', optional($subscription)->valid_days) }}" minlength="1" placeholder="Enter valid days here...">
    <label for="link">
        <strong>Valid days</strong>
        <span class="required"></span>
    </label>   
</div>

<div class="form-group form-md-line-input has-info">
	@if( $errors->has('status'))
	    <span class="err-msg">
	                {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
	    </span>
	@endif
            <select class="form-control" id="status" name="status">
        	    <option value="" style="display: none;" {{ old('status', optional($subscription)->status ?: '') == '' ? 'selected' : '' }} disabled selected>Select status</option>
        	@foreach (['active' => 'Active', 'inactive' => 'Inactive'] as $key => $text)
			    <option value="{{ $key }}" {{ old('status', optional($subscription)->status) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>    
    <label for="status">
        <strong>Status</strong>
        <span class="required">*</span>
   </label>
</div>



