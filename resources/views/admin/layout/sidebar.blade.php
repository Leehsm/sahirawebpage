{{-- @php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
    // dd($prefix);
@endphp --}}

{{-- <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: auto; height:150vh; position: fixed;">
    <div class="dropdown">
        <a href="{{ url('admin/dashboard') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32"></svg>
            <span class="fs-4">Admin Page</span>
        </a>
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <strong></strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Sign out</a></li>
        </ul>
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
        <a href="{{ url('admin/dashboard') }}" class="nav-link text-white {{ ($route == 'dashboard')? 'active':'' }}" aria-current="page">
            Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('aboutus.all') }}" class="nav-link text-white {{ ($prefix == '/aboutus')? 'active':'' }}" aria-current="page">
            About Us
        </a>
    </li>
    <li>
        <a href="{{ route('ourteam.all') }}" class="nav-link text-white {{ ($prefix == '/ourteam')? 'active':'' }}">
            Our Teams
        </a>
    </li>
    <li>
        <a href="{{ route('ourproduct.all') }}" class="nav-link text-white {{ ($prefix == '/ourproduct')? 'active':'' }}">
            Our Product
        </a>
    </li>
    <li>
        <a href="{{ route('contactus.all') }}" class="nav-link text-white {{ ($prefix == '/contactus')? 'active':'' }}">
            Contact Us
        </a>
    </li>
    <li>
        <a href="{{ route('blog.all') }}" class="nav-link text-white {{ ($prefix == '/blog')? 'active':'' }}">
            Blog
        </a>
    </li>
    <li>
        <a href="{{ route('membershipFE.all') }}" class="nav-link text-white {{ ($prefix == '/membershipFE')? 'active':'' }}">
            MembershipFE
        </a>
    </li>
    <li>
        <a href="{{ route('membership.all') }}" class="nav-link text-white {{ ($prefix == '/membership')? 'active':'' }}">
            Membership
        </a>
    </li>
    <li>
        <a href="{{ route('faq.all') }}" class="nav-link text-white {{ ($prefix == '/faq')? 'active':'' }}">
            FAQ
        </a>
    </li>
    <li>
        <a href="{{ route('bg.all') }}" class="nav-link text-white {{ ($prefix == '/bg')? 'active':'' }}">
            Slider background
        </a>
    </li>
    <li>
        <a href="{{ route('promo.all') }}" class="nav-link text-white {{ ($prefix == '/promo')? 'active':'' }}">
            Coupon & Promo
        </a>
    </li>
    <li>
        <a href="{{ route('customer.all') }}" class="nav-link text-white {{ ($prefix == '/customer')? 'active':'' }}">
            Customer Database
        </a>
    </li>
    </ul>
</div> --}}

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url('/admin/dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#aboutus-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>About Us</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="aboutus-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('aboutus.all') }}">
              <i class="bi bi-circle"></i><span>all</span>
            </a>
          </li>
          <li>
            <a href="{{ route('aboutus.add') }}">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#team-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Teams</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="team-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('ourteam.all') }}">
              <i class="bi bi-circle"></i><span>all</span>
            </a>
          </li>
          <li>
            <a href="{{ route('ourteam.add') }}">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#ourproduct-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-tags"></i><span>Our Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="ourproduct-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('ourproduct.all') }}">
              <i class="bi bi-circle"></i><span>all</span>
            </a>
          </li>
          <li>
            <a href="{{ route('ourproduct.add') }}">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#contact-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-telephone"></i><span>Contact</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="contact-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('contactus.all') }}">
              <i class="bi bi-circle"></i><span>all</span>
            </a>
          </li>
          <li>
            <a href="{{ route('contactus.add') }}">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#blog-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-image"></i><span>Blogs</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="blog-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('blog.all') }}">
              <i class="bi bi-circle"></i><span>all</span>
            </a>
          </li>
          <li>
            <a href="{{ route('blog.add') }}">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#membershipFE-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>MembershipFE</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="membershipFE-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('membershipFE.all') }}">
              <i class="bi bi-circle"></i><span>all</span>
            </a>
          </li>
          <li>
            <a href="{{ route('membershipFE.add') }}">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#membership-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-bounding-box"></i><span>Membership</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="membership-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('membership.all') }}">
              <i class="bi bi-circle"></i><span>all</span>
            </a>
          </li>
          <li>
            <a href="{{ route('membership.add') }}">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#faq-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-raised-hand"></i><span>FAQ</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="faq-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('faq.all') }}">
              <i class="bi bi-circle"></i><span>all</span>
            </a>
          </li>
          <li>
            <a href="{{ route('faq.add') }}">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#bg-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-images"></i><span>Slider Background</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="bg-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('bg.all') }}">
              <i class="bi bi-circle"></i><span>all</span>
            </a>
          </li>
          <li>
            <a href="{{ route('bg.add') }}">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#promo-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-percent"></i><span>Coupon</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="promo-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('promo.all') }}">
              <i class="bi bi-circle"></i><span>all</span>
            </a>
          </li>
          <li>
            <a href="{{ route('promo.add') }}">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#CustomerDB-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-database"></i><span>CustomerDB</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="CustomerDB-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('customer.all') }}">
              <i class="bi bi-circle"></i><span>all</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->
      
  </aside><!-- End Sidebar-->