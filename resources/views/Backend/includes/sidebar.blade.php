<div id="sidebar-menu">

    <ul id="side-menu">

        <li class="menu-title">Navigation</li>

        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="badge bg-success rounded-pill float-end">9+</span>
                <span> Dashboard </span>
            </a>
        </li>

        <li class="menu-title mt-2">Apps</li>

        <li>
            <a href="apps-calendar.html">
                <i class="mdi mdi-calendar-blank-outline"></i>
                <span> Calendar </span>
            </a>
        </li>

        <li>
            <a href="aboutUs.html">
                <i class="mdi mdi-calendar-blank-outline"></i>
                <span> About Us </span>
            </a>
        </li>

        <li>
            <a href="#services" data-bs-toggle="collapse">
                <i class="mdi mdi-book-open-page-variant-outline"></i>
                <span> Services </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="services">
                <ul class="nav-second-level">
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="service-details.html">Service Details</a>
                    </li>
                </ul>
            </div>
        </li>

        <li>
            <a href="{{route('contact.index')}}">
                <i class="mdi mdi-calendar-blank-outline"></i>
                <span> Contacts </span>
            </a>
        </li>
    </ul>

</div>