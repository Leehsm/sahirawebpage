@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
    // dd($prefix);
@endphp

<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: auto; height:150vh; position: fixed;">
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
    </ul>
</div>