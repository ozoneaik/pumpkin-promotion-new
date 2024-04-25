<aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
{{--    <a href="#" class="brand-link">--}}
{{--        <img--}}
{{--            src="{{asset('images/logo.png')}}"--}}
{{--            alt="AdminLTE Logo"--}}
{{--            class="brand-image"--}}
{{--            style="opacity: 0.8"--}}
{{--        />--}}
{{--        <span class="brand-text font-weight-light text-decoration-none">Pumpkin Cop.</span>--}}
{{--    </a>--}}

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img
                    src="{{asset('dist/img/user2-160x160.jpg')}}"
                    class="img-circle elevation-2"
                    alt="User Image"
                />
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Promotion Menu -->
                <li class="nav-item {{ Request::routeIs('promotion.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('promotion.*') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-rectangle-ad"></i>
                        <p>จัดการโปรโมชั่น<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('promotion.dashboard')}}" class="nav-link {{ Request::routeIs('promotion.dashboard') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-gauge"></i>
                                <p>dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('promotion.manage')}}" class="nav-link {{ Request::routeIs('promotion.manage') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-list-check"></i>
                                <p>จัดการโปรโมชั่น</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('promotion.join')}}" class="nav-link  {{ Request::routeIs('promotion.join') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-hand"></i>
                                <p>เข้าร่วมโปรโมชั่น</p>
                            </a>
                        </li>
{{--                        <li class="nav-item ">--}}
{{--                            <a href="{{route('promotion.check')}}" class="nav-link {{ Request::routeIs('promotion.check') ? 'active' : '' }}">--}}
{{--                                <i class="nav-icon fa-solid fa-rectangle-ad"></i>--}}
{{--                                <p>ตรวจสอบยอด</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('promotion.add-reduce')}}" class="nav-link {{Request::routeIs('promotion.add-reduce') ? 'active' : ''}}">--}}
{{--                                <i class="nav-icon fas fa-th"></i>--}}
{{--                                <p>เพิ่มลดยอดเพิ่มเติม</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('promotion.approve')}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-th"></i>--}}
{{--                                <p>เพิ่มลูกค้าร่วมร้านค้า</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a href="{{route('promotion.approve')}}" class="nav-link {{Request::routeIs('promotion.approve') ? 'active' : ''}}">
                                <i class="nav-icon fa-solid fa-check"></i>
                                <p>อนุมัติเบิกทอง</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-magnifying-glass"></i>
                                <p>ค้นหา</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-user-gear"></i>
                                <p>สิทธิ์การเข้าใช้งาน</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Other Menu -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-wallet"></i>
                        <p>Menu 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="text-danger nav-icon fa-solid fa-right-from-bracket"></i>
                        <p class="text-danger text-bold">ออกจากระบบ</p>
                    </a>
                </li>
            </ul>

        </nav>
    </div>
</aside>


