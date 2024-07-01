<div class="left-sidebar show" style="background-color: #f8f9fb;">
    <!-- LOGO -->
    <div class="brand">
        <a href="{{ route('admin.dashboard') }}" class="logo">
            <span>
                <img 
                    src="{{ asset('admin-assets/images/logos/logo-black.svg') }}" 
                    alt="J1 Door" 
                    class="logo-sm"
                />
            </span>
        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <div class="menu-body navbar-vertical tab-content">
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="menu-label mt-0">H<span>ome</span></li>
                    <li class="nav-item">
                        <a 
                            class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" 
                            href="{{ route('admin.dashboard') }}"
                        >
                            <i class="ti ti-home menu-icon"></i>
                            <span>Dashboard</span>
                        </a>
                    </li><!--end nav-item-->
                    <li class="menu-label mt-0">A<span>pp Section</span></li>
                    <?php
                        use App\Models\Quote;
                        $unreadQuotes = Quote::unseen()->count();
                    ?>
                    <li class="nav-item">
                        <a 
                            class="nav-link {{ request()->routeIs('admin.quote.index') || request()->routeIs('admin.quote.show') ? 'active' : '' }}" 
                            href="#sidebarQuotes" 
                            data-bs-toggle="collapse" 
                            role="button"
                            aria-expanded="false" 
                            aria-controls="sidebarQuotes"
                        >
                            <i class="ti ti-notebook menu-icon"></i>
                            <span>Quotes</span>
                            <span class="ms-1 text-danger">({{ $unreadQuotes }})</span>
                        </a>
                        <div class="collapse {{ request()->routeIs('admin.quote.index') || request()->routeIs('admin.quote.show') ? 'show' : '' }}" id="sidebarQuotes">
                            <ul class="nav flex-column">
                               <li class="nav-item">
                                    <a 
                                        class="nav-link {{ request()->routeIs('admin.quote.index') || request()->routeIs('admin.quote.show') ? 'active' : '' }}" 
                                        href="{{ route('admin.quote.index') }}"
                                    >
                                        Quotes
                                    </a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarPages-->
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a 
                            class="nav-link {{ request()->routeIs('products.index') || request()->routeIs('products.edit') || request()->routeIs('products.create') || request()->routeIs('admin.document.show') ? 'active' : '' }}" 
                            href="#sidebarProducts" 
                            data-bs-toggle="collapse" 
                            role="button"
                            aria-expanded="false" 
                            aria-controls="sidebarProducts"
                        >
                            <i class="ti ti-shopping-cart menu-icon"></i>
                            <span>Products</span>
                        </a>
                        <div class="collapse {{ request()->routeIs('products.index') || request()->routeIs('products.edit') || request()->routeIs('products.create') || request()->routeIs('admin.document.show') ? 'show' : '' }}" id="sidebarProducts">
                            <ul class="nav flex-column">
                               <li class="nav-item">
                                    <a 
                                        class="nav-link {{ request()->routeIs('products.index') || request()->routeIs('products.edit') || request()->routeIs('admin.document.show') ? 'active' : '' }}" 
                                        href="{{ route('products.index') }}"
                                    >
                                        Products
                                    </a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a 
                                        class="nav-link {{ request()->routeIs('products.create') ? 'active' : '' }}" 
                                        href="{{ route('products.create') }}"
                                    >
                                        New Product
                                    </a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarPages-->
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a 
                            class="nav-link {{ request()->routeIs('distributors.index') || request()->routeIs('distributors.edit') || request()->routeIs('distributors.create')  ? 'active' : '' }}" 
                            href="#sidebarDistributors" 
                            data-bs-toggle="collapse" 
                            role="button"
                            aria-expanded="false" 
                            aria-controls="sidebarDistributors"
                        >
                            <i class="ti ti-building-skyscraper menu-icon"></i>
                            <span>Distributors</span>
                        </a>
                        <div class="collapse {{ request()->routeIs('distributors.index') || request()->routeIs('distributors.edit') || request()->routeIs('distributors.create') ? 'show' : '' }}" id="sidebarDistributors">
                            <ul class="nav flex-column">
                               <li class="nav-item">
                                    <a 
                                        class="nav-link {{ request()->routeIs('distributors.index') || request()->routeIs('distributors.edit') ? 'active' : '' }}" 
                                        href="{{ route('distributors.index') }}"
                                    >
                                        Distributors
                                    </a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a 
                                        class="nav-link {{ request()->routeIs('distributors.create') ? 'active' : '' }}" 
                                        href="{{ route('distributors.create') }}"
                                    >
                                        New Distributor
                                    </a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarPages-->
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a 
                            class="nav-link {{ request()->routeIs('testimonials.index') || request()->routeIs('testimonials.edit') || request()->routeIs('testimonials.create')  ? 'active' : '' }}" 
                            href="#sidebarTestimonial" 
                            data-bs-toggle="collapse" 
                            role="button"
                            aria-expanded="false" 
                            aria-controls="sidebarTestimonial"
                        >
                            <i class="ti ti-message-plus menu-icon"></i>
                            <span>Testimonials</span>
                        </a>
                        <div class="collapse {{ request()->routeIs('testimonials.index') || request()->routeIs('testimonials.edit') || request()->routeIs('testimonials.create') ? 'show' : '' }}" id="sidebarTestimonial">
                            <ul class="nav flex-column">
                               <li class="nav-item">
                                    <a 
                                        class="nav-link {{ request()->routeIs('testimonials.index') || request()->routeIs('testimonials.edit') ? 'active' : '' }}" 
                                        href="{{ route('testimonials.index') }}"
                                    >
                                        Testimonials
                                    </a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a 
                                        class="nav-link {{ request()->routeIs('testimonials.create') ? 'active' : '' }}" 
                                        href="{{ route('testimonials.create') }}"
                                    >
                                        New Testimonial
                                    </a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarPages-->
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a 
                            class="nav-link {{ request()->routeIs('blogs.index') || request()->routeIs('blogs.edit') || request()->routeIs('blogs.create') || request()->routeIs('admin.document.show') ? 'active' : '' }}" 
                            href="#sidebarBlogs" 
                            data-bs-toggle="collapse" 
                            role="button"
                            aria-expanded="false" 
                            aria-controls="sidebarBlogs"
                        >
                            <i class="ti ti-ad-2 menu-icon"></i>
                            <span>Blogs</span>
                        </a>
                        <div class="collapse {{ request()->routeIs('blogs.index') || request()->routeIs('blogs.edit') || request()->routeIs('blogs.create') || request()->routeIs('admin.document.show') ? 'show' : '' }}" id="sidebarBlogs">
                            <ul class="nav flex-column">
                               <li class="nav-item">
                                    <a 
                                        class="nav-link {{ request()->routeIs('blogs.index') || request()->routeIs('blogs.edit') || request()->routeIs('admin.document.show') ? 'active' : '' }}" 
                                        href="{{ route('blogs.index') }}"
                                    >
                                        Blogs
                                    </a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a 
                                        class="nav-link {{ request()->routeIs('blogs.create') ? 'active' : '' }}" 
                                        href="{{ route('blogs.create') }}"
                                    >
                                        New Blog
                                    </a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarPages-->
                    </li><!--end nav-item-->
                    <li class="menu-label mt-0">S<span>ettings Section</span></li>
                    <li class="nav-item">
                        <a 
                            class="nav-link {{ request()->routeIs('admins.create') || request()->routeIs('admins.index') || request()->routeIs('admins.edit') ? 'active' : '' }}" 
                            href="#sidebarAdmins" 
                            data-bs-toggle="collapse" 
                            role="button"
                            aria-expanded="false" 
                            aria-controls="sidebarAdmins"
                        >
                            <i class="ti ti-user menu-icon"></i>
                            <span>Admins</span>
                        </a>
                        <div class="collapse {{ request()->routeIs('admins.create') || request()->routeIs('admins.index') || request()->routeIs('admins.edit') ? 'show' : '' }}" id="sidebarAdmins">
                            <ul class="nav flex-column">
                               <li class="nav-item">
                                    <a 
                                        class="nav-link {{ request()->routeIs('admins.index') || request()->routeIs('admins.edit') ? 'active' : '' }}" 
                                        href="{{ route('admins.index') }}"
                                    >
                                        Admins List
                                    </a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a 
                                        class="nav-link {{ request()->routeIs('admins.create') ? 'active' : '' }}" 
                                        href="{{ route('admins.create') }}"
                                    >
                                        New Admin
                                    </a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarPages-->
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a 
                            class="nav-link" 
                            href="#"
                            onclick="
                                event.preventDefault(); 
                                document.getElementById('admin-logout-form-side').submit();
                            "
                        >
                            <i class="ti ti-logout menu-icon"></i>
                            <span>Logout</span>
                        </a>
                    </li><!--end nav-item-->
                </ul><!--end navbar-nav--->
            </div><!--end sidebarCollapse-->
            <form id="admin-logout-form-side" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>    
</div>
<!-- end left-sidenav-->