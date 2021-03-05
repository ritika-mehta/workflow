<footer class="footer">
  <div class="top-footer">
    <div class="container clearfix">
      <div class="footer-col">
        <h5 class="footer-tab">Tools</h5>
        <ul class="footer-list">
          <li>
            <a href="#">Jobs</a>
          </li>
          <li>
            <a href="#">Company Reviews</a>
          </li>
          <li>
            <a href="javascript:void(0);" onclick="redirect_url($(this),'{{route('web.career_advice')}}',true)">Career Advice</a>
          </li>
        </ul>
      </div>
      <div class="footer-col">
        <h5 class="footer-tab">Company</h5>
        <ul class="footer-list">
          <li>
            <a href="#">About Us</a>
          </li>
          <li>
            <a href="#">How It Works</a>
          </li>
          <li>
            <a href="javascript:void(0)" onclick="redirect_url($(this),'{{route('web.blogs')}}',true)">Blog</a>
          </li>
        </ul>
      </div>
      <div class="footer-col">
        <h5 class="footer-tab">Connect</h5>
        <ul class="footer-list">
          <li>
            <a href="#">Contact Us</a>
          </li>
          <li>
            <a href="#">FAQs</a>
          </li>
          <li>
            <a href="#">Work for Careefer</a>
          </li>
        </ul>
      </div>
      <div class="footer-col">
        <h5 class="footer-tab">Specialists</h5>
        <ul class="footer-list">
          <li>
            <a href="#">Become a Specialist</a>
          </li>
          <li>
            <a href="#">FAQs</a>
          </li>
        </ul>
      </div>
      <div class="footer-col">
        <h5 class="footer-tab">Employers</h5>
        <ul class="footer-list">
          <li>
            <a href="#">Employer Registration</a>
          </li>
          <li>
            <a href="#">Benefits</a>
          </li>
          <li>
            <a href="#">Help</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  @include('layouts.web.bottom_footer')
</footer>