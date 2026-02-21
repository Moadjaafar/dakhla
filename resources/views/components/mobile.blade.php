<div class="mobile_menu absolute_nav">
    <div class="d-flex align-items-start justify-content-between ">
        <div class="logo_cnt d-flex align-items-center justify-content-between">
            <a href="/index.html">
            <img src="assets/images/logo.svg" alt="dakhla beyond adventure">
            </a>
        </div>
        <div class="d-flex align-items-center gap-3">
            <div class="custom-dropdown">
                <button class="custom-dropdown-toggle" aria-label="toggle menu">Fr
                    <img src="assets/images/dropdown.svg" alt="dropdown icon">
                </button>
                <ul class="custom-dropdown-menu">
                    <li class="custom-dropdown-item"><a href="local/en">En</a></li>
                    <li class="custom-dropdown-item"><a href="local/fr">Fr</a></li>
                    <li class="custom-dropdown-item"><a href="local/es">Es</a></li>
                </ul>
            </div>
            <div>
                <button class="togl_menu hidemenu" aria-label="menu toggle"><img src="assets/images/close.svg" alt="toggle menu"></button>
            </div>
        </div>
    </div>
    <div class="mb-5 flex-1">
        <ul class="mobile_list_links mt-5 mb-5">
            <li class="d-flex justify-content-between align-items-center" onclick="location.href='{{ route('about_us') }}'" style="cursor: pointer;">
                <a href="{{ route('about_us') }}">{{ __('messages.key_cf23ee279844016288ea1c076638f3be') }}</a> 
                <img src="assets/images/Frame6543.svg" alt="">
            </li>
            <li class="d-flex justify-content-between align-items-center" onclick="location.href='{{ route('offers_lits') }}'" style="cursor: pointer;">
                <a href="{{ route('offers_lits') }}">{{ __('messages.key_9461bed8b71377318436990e57106729') }}</a>
                <img src="assets/images/Frame6543.svg" alt="">
            </li>
            <li class="d-flex justify-content-between align-items-center" onclick="location.href='{{ route('blog') }}'" style="cursor: pointer;">
                <a href="{{ route('blog') }}">{{ __('messages.key_be8df1f28c0abc85a0ed0c6860e5d832') }}</a>
                <img src="assets/images/Frame6543.svg" alt="">
            </li>
            <li class="d-flex justify-content-between align-items-center" onclick="location.href='{{ route('contact_us') }}'" style="cursor: pointer;">
                <a href="{{ route('contact_us') }}">{{ __('messages.key_bbaff12800505b22a853e8b7f4eb6a22') }}</a>
                <img src="assets/images/Frame6543.svg" alt="">
            </li>
        </ul>
        <a href="{{ route('offers_lits') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-buttonv2 custom-m px-sm-3 w-100 justify-content-center" tabindex="0">
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
        <div class="mt-5">
            <a class="hero_contact" href="https://wa.me/0600127223">Phone: (+212) 600127223</a>
            <a class="hero_contact" href="mailto:booking@dakhlabeyondadventure.com">Email: Contact@dakhla-adventure.com</a>
        </div>
    </div>
</div>