@if (auth()->user()->userReference->reference_type != 'App\Models\Student')
    <!-- Leftbar User -->
    <div class="leftbar-user">
        <a href="pages-profile.html">
            <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="user-image" height="42"
                class="rounded-circle shadow-sm">
            <span class="leftbar-user-name mt-2">{{ $people->name }}</span>
            <span class="leftbar-user-name mt-2">Rp
                {{ number_format(auth()->user()->userReference->reference->saldo->saldo ?? 0, 0, ',', '.') }}</span>
        </a>
    </div>

    <!--- Sidemenu -->
    <ul class="side-nav">

        <li class="side-nav-title">Navigation</li>
        <li class="side-nav-item">
            <a href="/dashboard" class="side-nav-link">
                <i class="uil-home-alt"></i>
                <span> Dashboard </span>
            </a>
        </li>


        <li class="side-nav-title">Human Resources
            <i class="uil-user"></i>
        </li>
        <li class="side-nav-item">
            <a href="/dashboard/student" class="side-nav-link">
                <i class="uil-graduation-hat "></i>
                <span> Student </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="/dashboard/employee" class="side-nav-link">
                <i class="uil-graduation-hat "></i>
                <span> Employee </span>
            </a>
        </li>

        <li class="side-nav-title">Store Manajement
        </li>
        <li class="side-nav-item">
            <a href="/dashboard/room" class="side-nav-link">
                <i class="uil-graduation-hat "></i>
                <span> Room </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="{{ route('product') }}" class="side-nav-link">
                <i class="uil-graduation-hat "></i>
                <span> Product </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="{{ route('queue') }}" class="side-nav-link">
                <i class="uil-graduation-hat "></i>
                <span> Order Queue </span>
            </a>
        </li>


        <li class="side-nav-title">Components</li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail"
                class="side-nav-link">
                <i class="uil-files-landscapes-alt"></i>
                <span> Master </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEmail">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="/dashboard/form">Form</a>
                    </li>
                    <li>
                        <a href="/dashboard/invoice">Invoice</a>
                    </li>
                    <li>
                        <a href="/dashboard/table">Data Table</a>
                    </li>
                    <li>
                        <a href="/dashboard/blank">Blank Page</a>
                    </li>
                    <li>
                        <a href="/dashboard/login">Login Form</a>
                    </li>
                    <li>
                        <a href="/dashboard/register">Register Form</a>
                    </li>
                    <li>
                        <a href="/dashboard/modal">Modal</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false"
                aria-controls="sidebarMultiLevel" class="side-nav-link">
                <i class="uil-folder-plus"></i>
                <span> Multi Level </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarMultiLevel">
                <ul class="side-nav-second-level">
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false"
                            aria-controls="sidebarSecondLevel">
                            <span> Second Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarSecondLevel">
                            <ul class="side-nav-third-level">
                                <li>
                                    <a href="javascript: void(0);">Item 1</a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);">Item 2</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false"
                            aria-controls="sidebarThirdLevel">
                            <span> Third Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarThirdLevel">
                            <ul class="side-nav-third-level">
                                <li>
                                    <a href="javascript: void(0);">Item 1</a>
                                </li>
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false"
                                        aria-controls="sidebarFourthLevel">
                                        <span> Item 2 </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarFourthLevel">
                                        <ul class="side-nav-forth-level">
                                            <li>
                                                <a href="javascript: void(0);">Item 2.1</a>
                                            </li>
                                            <li>
                                                <a href="javascript: void(0);">Item 2.2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>


        <!-- Help Box -->
        <!-- <div class="help-box text-white text-center">
                            <a href="javascript: void(0);" class="float-end close-btn text-white">
                                <i class="mdi mdi-close"></i>
                            </a>
                            <img src="{{ asset('assets/images/svg/help-icon.svg') }}" height="90" alt="Helper Icon Image" />
                            <h5 class="mt-3">Unlimited Access</h5>
                            <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                            <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
                        </div> -->
        <!-- end Help Box -->


    </ul>
    <!--- End Sidemenu -->

    <div class="clearfix"></div>
@else
    <!-- Leftbar User -->
    <div class="leftbar-user">
        <a href="pages-profile.html">
            <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="user-image" height="42"
                class="rounded-circle shadow-sm">
            <span class="leftbar-user-name mt-2">{{ $people->name }}</span>
            <span class="leftbar-user-name mt-2">Rp
                {{ number_format(auth()->user()->userReference->reference->saldo->saldo ?? 0, 0, ',', '.') }}</span>
        </a>
    </div>

    <!--- Sidemenu -->
    <ul class="side-nav">

        <li class="side-nav-title">Navigation</li>
        <li class="side-nav-item">
            <a href="/dashboard" class="side-nav-link">
                <i class="uil-home-alt"></i>
                <span> Dashboard </span>
            </a>
        </li>


        <li class="side-nav-title">Menu
            <i class="uil-user"></i>
        </li>
        <li class="side-nav-item">
            <a href={{ route('order') }} class="side-nav-link">
                <i class="uil-graduation-hat "></i>
                <span> Order </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href={{ route('history') }} class="side-nav-link">
                <i class="uil-graduation-hat "></i>
                <span> History </span>
            </a>
        </li>

        <!-- Help Box -->
        <!-- <div class="help-box text-white text-center">
                                <a href="javascript: void(0);" class="float-end close-btn text-white">
                                    <i class="mdi mdi-close"></i>
                                </a>
                                <img src="{{ asset('assets/images/svg/help-icon.svg') }}" height="90" alt="Helper Icon Image" />
                                <h5 class="mt-3">Unlimited Access</h5>
                                <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                                <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
                            </div> -->
        <!-- end Help Box -->


    </ul>
    <!--- End Sidemenu -->

    <div class="clearfix"></div>
@endif
