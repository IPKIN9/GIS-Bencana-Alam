<div class="sidebar-content" style="padding-top: 50px;">
    <ul class="nav nav-primary">
        <li class="nav-item {{ Route::is('web.index') ? 'active' : '' }}">
            <a href="{{route('web.index')}}" class="collapsed" aria-expanded="false">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-section" style="padding-top: 10px;">
            <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Website</h4>
        </li>
        <li class="nav-item {{ Route::is('web.about') ? 'active' : '' }}">
            <a href="{{route('web.about')}}" class="collapsed" aria-expanded="false">
                <i class="
                fas fa-info-circle"></i>
                <p>Tentang Kami</p>
            </a>
        </li>
        <li class="nav-item {{ Route::is('web.maps') ? 'active' : '' }} mt-2">
            <a href="{{route('web.maps')}}" class="collapsed" aria-expanded="false">
                <i class="
                fas fa-globe-asia"></i>
                <p>Maps</p>
            </a>
        </li>
    </ul>
</div>