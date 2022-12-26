@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
    // dd($prefix);
@endphp

<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 250px; height:150vh">
    <a href="{{ url('admin/dashboard') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Admin Page</span>
    </a>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
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
        <a href="{{ route('membership.all') }}" class="nav-link text-white {{ ($prefix == '/membership')? 'active':'' }}">
            Membership
        </a>
    </li>
    <li>
        <a href="{{ route('faq.all') }}" class="nav-link text-white {{ ($prefix == '/faq')? 'active':'' }}">
            FAQ
        </a>
    </li>
    </ul>
</div>