

<div class="form-group form-md-line-input has-info">
	@if( $errors->has('name'))
	    <span class="err-msg">
	                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
	    </span>
	@endif
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($user_data)->name) }}" minlength="1" placeholder="Enter name here...">
    <label for="name">
        <strong>Name</strong>
        <span class="required">*</span>
    </label>   
</div>

<!-- <div class="form-group form-md-line-input has-info">
    @if( $errors->has('lname'))
        <span class="err-msg">
                    {!! $errors->first('lname', '<p class="help-block">:message</p>') !!}
        </span>
    @endif
        <input class="form-control" name="lname" type="text" id="lname" value="{{ old('lname', optional($user_data)->lname) }}" minlength="1" placeholder="Enter last name here...">
    <label for="lname">
        <strong>Last Name</strong>
        <span class="required">*</span>
    </label>   
</div> -->

<div class="form-group form-md-line-input has-info">
    @if( $errors->has('email'))
        <span class="err-msg">
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </span>
    @endif
        <input class="form-control" name="email" type="text" id="email" value="{{ old('email', optional($user_data)->email) }}" minlength="1" placeholder="Enter email here...">
    <label for="email">
        <strong>Email</strong>
        <span class="required">*</span>
    </label>   
</div>

<div class="form-group form-md-line-input has-info">
   <!--  @if( $errors->has('mobile'))
        <span class="err-msg">
                    {!! $errors->first('mobile', '<p class="help-block">:message</p>') !!}
        </span>
    @endif -->
        <input class="form-control" name="mobile" type="number" id="mobile" value="{{ old('mobile', optional($user_data)->mobile) }}" minlength="1" placeholder="Enter mobile here...">
    <label for="email">
        <strong>Mobile</strong>
        <span class="required"></span>
    </label>   
</div>

<div class="form-group form-md-line-input has-info">
    @if( $errors->has('password'))
        <span class="err-msg">
                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        </span>
    @endif
        <input class="form-control" name="password" type="password" id="password" value="{{ old('password', optional($user_data)->password) }}" minlength="1" placeholder="Enter password here...">
    <label for="link">
        <strong>Password</strong>
        <span class="required">*</span>
    </label>   
</div>


<div class="form-group form-md-line-input has-info">
	@if( $errors->has('status'))
	    <span class="err-msg">
	                {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
	    </span>
	@endif
            <select class="form-control" id="status" name="status">
        	    <option value="" style="display: none;" {{ old('status', optional($user_data)->status ?: '') == '' ? 'selected' : '' }} disabled selected>Select status</option>
        	@foreach (['active' => 'Active', 'inactive' => 'Inactive'] as $key => $text)
			    <option value="{{ $key }}" {{ old('status', optional($user_data)->status) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>    
    <label for="status">
        <strong>Status</strong>
        <span class="required">*</span>
   </label>
</div>



