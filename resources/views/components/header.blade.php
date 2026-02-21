<header class="">
    <div class="menu_conatiner container">
        <div class="logo_cnt d-flex align-items-center justify-content-between">
            <a href="/">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo dakhla beyond adventure">
            </a>
        </div>
        <nav class="nav_links">
            <ul class="list-none nav_links">
                <li><a href="{{ route('about_us') }}">{{ __('messages.key_cf23ee279844016288ea1c076638f3be') }}</a></li>
                <li><a href="{{ route('offers_lits') }}">{{ __('messages.key_9461bed8b71377318436990e57106729') }}</a></li>
                <li><a href="{{ route('blog') }}">{{ __('messages.key_be8df1f28c0abc85a0ed0c6860e5d832') }}</a></li>
                <li><a href="{{ route('contact_us') }}">{{ __('messages.key_bbaff12800505b22a853e8b7f4eb6a22') }}</a></li>
            </ul>
        </nav>
        <div class="d-flex align-items-center gap-3">
            <div class="custom-dropdown">
                <button class="custom-dropdown-toggle">Fr
                    <img src="{{ asset('assets/images/dropdown.svg') }}" alt="dropdown icon">
                </button>
                <ul class="custom-dropdown-menu">
                    <li class="custom-dropdown-item"><a href="local/en">En</a></li>
                    <li class="custom-dropdown-item"><a href="local/fr">Fr</a></li>
                    <li class="custom-dropdown-item"><a href="local/es">Es</a></li>
                </ul>
            </div>
            <div>
                <a href="{{ route('offers_lits') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
                    <p class="m-0">{{ __('messages.book_btn') }}</p>
                    <span class="custom-arrow position-relative ">
                        <svg class="arr1 position-absolute" xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
                            <path d="M12.1425 8.71411L15.8567 4.99983L12.1425 1.28554" stroke="white" stroke-width="1.39286" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <svg class="arr2 position-absolute" xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
                            <path d="M12.1425 8.71411L15.8567 4.99983L12.1425 1.28554" stroke="white" stroke-width="1.39286" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </a>
            </div>
            <div>
                <button class="togl_menu"  aria-label="Toggle Menu"><img src="{{ asset('assets/images/togl_menu.svg') }}" alt="toggle menu"></button>
            </div>
        </div>
    </div>
</header>