<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('home') }}" class="app-brand-link">
            @if (settings('website_logo') != null)
                <span class="app-brand-logo demo">
                    <img src="{{ settings('website_logo') }}" style="height: 40px">
                </span>
            @else
                <span class="app-brand-text demo menu-text fw-bolder ms-2"
                    style="text-transform:capitalize;">{{ settings('website_name') }}</span>
            @endif
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item @if (str_contains($title, 'Dashboard') == 1) active @endif">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard </div>
            </a>
        </li>

        <li class="menu-item @if (str_contains($title, 'Member') == 1) active open @endif">

            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Layouts">Members</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.member.index') }}" class="menu-link">
                        <div data-i18n="Without menu">Members</div>
                    </a>
                </li>
            </ul>
        </li>



        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Settings</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Layouts">Settings</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.settings.website') }}" class="menu-link">
                        <div data-i18n="Without menu">General Settings</div>
                    </a>
                </li>
                {{-- <li class="menu-item">
                    <a href="{{ route('admin.settings.header') }}" class="menu-link">
                        <div data-i18n="Without menu">Header Settings</div>
                    </a>
                </li> --}}
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Layouts">Sections</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.settings.header') }}" class="menu-link">
                        <div data-i18n="Without menu">Header</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.settings.about') }}" class="menu-link">
                        <div data-i18n="Without menu">About</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.settings.social.index') }}" class="menu-link">
                        <div data-i18n="Without menu">Social Icons</div>
                    </a>
                </li>
            </ul>
        </li>









        {{-- <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Pages</span>
    </li> --}}
        {{-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-dock-top"></i>
        <div data-i18n="Account Settings">Account Settings</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="pages-account-settings-account.html" class="menu-link">
            <div data-i18n="Account">Account</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="pages-account-settings-notifications.html" class="menu-link">
            <div data-i18n="Notifications">Notifications</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="pages-account-settings-connections.html" class="menu-link">
            <div data-i18n="Connections">Connections</div>
          </a>
        </li>
      </ul>
    </li> --}}



    </ul>
</aside>
