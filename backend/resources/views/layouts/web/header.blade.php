@php

  $user_type = null;
  $obj_user = null;
  $logoutUrl = null;

  $arr = explode('_',auth()->guard()->getName());

  if(in_array('employer',$arr) && auth()->guard('employer')->check())
  {
      $user_type = 'employer';
      $obj_user = auth()->guard('employer')->user();
      $logoutUrl = url('/employer/logout');
  }

  if(in_array('candidate',$arr) && auth()->guard('candidate')->check())
  {
      $user_type = 'candidate';
      $obj_user = auth()->guard('candidate')->user();
      $logoutUrl = url('/candidate/logout');
  }

  if(in_array('specialist',$arr) && auth()->guard('specialist')->check())
  {
      $user_type = 'specialist';
      $obj_user = auth()->guard('specialist')->user();
      $logoutUrl = url('/specialist/logout');
  }

@endphp

<header class="header">
  <div class="container clearfix">
    <a href="{{url('')}}" class="logo left-logo"><img src="{{asset('assets/web/images/logo.png')}}" alt="careefer"></a>
    <div class="hamburger">
      <span class="top-line">line</span>
      <span class="middle-line">line</span>
      <span class="bottom-line">line</span>
    </div>
    <div class="currency-select currency-mobile">
      <div id="currency-flag" data-input-name="country" data-selected-country="IN" data-button-size="btn-lg" data-button-type="btn-warning" data-scrollable="true"  data-scrollable-height="250px"></div>
    </div>
    <div class="hamburger-menu">
      <ul class="left-menu clearfix">
        <li>
          <a href="#">Jobs</a>
        </li>
        <li>
          <a href="#">How it works?</a>
        </li>
        <li class="down-arrow">
          <span class="menu-tab">Resources</span>
          <ul class="header-submenu">
            <li>
              <a href="javascript:void(0);" onclick="redirect_url($(this),'{{route('web.companies.listing')}}',true)">Companies</a>
            </li>
            <li>
              <a href="#">Career Advice</a>
            </li>
            <li>
              <a href="{{route('web.faq')}}">FAQs</a>
            </li>
            <li>
              <a href="#">Blog</a>
            </li>
          </ul>
        </li>
        <li class="down-arrow">
          <span class="menu-tab">Specialists</span>
          <ul class="header-submenu">
            <li>
              <a href="{{route('specialist.register')}}">Become a specialist</a>
            </li>
            <li>
              <a href="#">FAQs</a>
            </li>
          </ul>
        </li>
        <li class="down-arrow">
          <span class="menu-tab">Employers</span>
          <ul class="header-submenu">
            <li>
              <a href="{{route('employer.register')}}">Employer Registration</a>
            </li>
            <li>
              <a href="#">Benefits</a>
            </li>
            <li>
              <a href="#">Help</a>
            </li>
          </ul>
        </li>
      </ul>
      <nav class="right-menu-wrapper clearfix">
        <ul class="right-menu clearfix">
          <li class="currency-select">
            <div id="currency-flag-2" data-input-name="country" data-selected-country="IN" data-button-size="btn-lg" data-button-type="btn-warning" data-scrollable="true"  data-scrollable-height="250px">
            </div>
            @if(auth()->user())
            <div class="currency-popup box-arrow">
              <p>
                To change your currency, please visit your profile
              </p>
              <a href="#" class="visit-profile">Visit Profile</a>
            </div>
            @endif
          </li>
          @if($user_type)
            <li class="notification">
              <div class="action-link">
                <span class="notification-img"><img src="{{asset('assets/web/images/bell-icon.png')}}" alt="notification"></span>
                <span class="notification-no">2</span>
              </div>
              <div class="notification-wrapper box-arrow">
                <h4>Notifications</h4>
                <ul class="notification-menu">
                  <li>
                    <a href="#"> <strong>This is Photoshop's version </strong> <span class="notification-text">Aenean sollicitudin, lorem quis bibendum ...</span> <span class="notification-date">Friday, 13 March</span> </a>
                  </li>
                  <li>
                    <a href="#"> <strong>This is Photoshop's version </strong> <span class="notification-text">Aenean sollicitudin, lorem quis bibendum ...</span> <span class="notification-date">Friday, 13 March</span> </a>
                  </li>
                  <li>
                    <a href="#"> <strong>This is Photoshop's version </strong> <span class="notification-text">Aenean sollicitudin, lorem quis bibendum ...</span> <span class="notification-date">Friday, 13 March</span> </a>
                  </li>
                  <li>
                    <a href="#"> <strong>This is Photoshop's version </strong> <span class="notification-text">Aenean sollicitudin, lorem quis bibendum ...</span> <span class="notification-date">Friday, 13 March</span> </a>
                  </li>
                  <li>
                    <a href="#"> <strong>This is Photoshop's version </strong> <span class="notification-text">Aenean sollicitudin, lorem quis bibendum ...</span> <span class="notification-date">Friday, 13 March</span> </a>
                  </li>
                  <li>
                    <a href="#"> <strong>This is Photoshop's version </strong> <span class="notification-text">Aenean sollicitudin, lorem quis bibendum ...</span> <span class="notification-date">Friday, 13 March</span> </a>
                  </li>
                </ul>
                <div class="notification-link">
                  <a href="#">See All</a>
                </div>
              </div>
            </li>
            <li class="registered-user clearfix">
              <div class="user-wrapper action-link"><img src="{{asset('assets/web/images/user-img.png')}}" alt="img"><span class="user-name">{{$obj_user->name}}</span>
              </div>
              <ul class="user-submenu box-arrow">

                @if($user_type == 'employer')
                  <li>
                    <a href="{{route('employer.profile.view')}}">Profile</a>
                  </li>
                @elseif($user_type == 'candidate')
                  <li>
                    <a href="{{route('candidate.my-profile')}}">Profile</a>
                  </li>
                @elseif($user_type == 'specialist')
                  <li>
                    <a href="{{route('specialist.profile')}}">Profile</a>
                  </li>  
                @endif

                <li>
                  <a href="#">My Jobs</a>
                </li>
                <li>
                  <a href="#">Referrals</a>
                </li>
                <li>
                  <a href="#">Messages</a>
                </li>
                <li>
                  <a href="#">Notification Center</a>
                </li>
                <li>
                  <a href="#">Account Settings</a>
                </li>
                <li>                  
                    <form id="logout-form" action="{{ $logoutUrl }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                    </form>

                    <a href="javascript:void(0)"
                        onclick="submit_form($(this),$('#logout-form'))">
                        Logout
                    </a>
                </li>
              </ul>
            </li>
          @else
            <li class="employer-login">
              <a href="javascript:void(0);" onclick="redirect_url($(this),'{{route('employer.login')}}',true)">Employer Login</a>
            </li>
            <li>
              <a href="javascript:void(0);" onclick="redirect_url($(this),'{{route('candidate.login')}}',true)">Sign In</a>
            </li>
            <li>
              <a href="javascript:void(0);" class="register-btn" onclick="redirect_url($(this),'{{route('candidate.register')}}',true)">Sign up</a>
            </li>
          @endif
        </ul>
      </nav>
    </div>
  </div>
</header>