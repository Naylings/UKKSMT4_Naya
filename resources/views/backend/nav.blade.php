@if (auth()->user()->userReference->reference_type != 'App\Models\Student')
    <!--- Sidemenu -->

    <li class="side-nav-title">Navigation</li>
    <li class="side-nav-item">
        <a href="/dashboard" class="side-nav-link">
            <i class="uil-home-alt"></i>
            <span> Dashboard </span>
        </a>
    </li>



    <li class="side-nav-title">Store Manajement
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
@else
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
@endif

@if (auth()->user()->role != 'user')
    <li class="side-nav-title">Admin Feature
    </li>


    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#Human_Resources" aria-expanded="false" aria-controls="Human_Resources"
            class="side-nav-link">
            <i class="uil-user"></i>
            <span> Human Resources </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="Human_Resources">
            <ul class="side-nav-second-level">
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
            </ul>
        </div>
    </li>


    <li class="side-nav-item">
        <a href="/dashboard/room" class="side-nav-link">
            <i class="uil-graduation-hat "></i>
            <span> Room </span>
        </a>
    </li>
@endif
