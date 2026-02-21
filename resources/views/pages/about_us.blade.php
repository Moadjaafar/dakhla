@extends('layouts.layout')
@section('content')
    <section class="page_title">
        <div class="content_breadcump">
            <div class="shape_"></div>
            <h1>{{ __('messages.About_us') }}</h1>
        </div>
    </section>
    <section class="container py-5">
        <div class="row mx-auto w-100 revers">
            <div class="col-lg-6 col-md-6 col-12 d-flex align-items-center">
                <img src="assets/images/Frame_427321428.png" class="w-100" alt="Desert adventure in Dakhla">
            </div>
            <div class="col-lg-6 col-md-6 col-12 d-flex flex-column justify-content-center gap-lg-3 gap-3">
                <span class="shara__tag">{{ __('messages.Dakhla_Beyond_Adventure') }}</span>
                <h2 class="cr_color h2">{{ __('messages.Experience_Unmatched_Sahara_Adventures_in_Dakhla') }}</h2>
                <p class="cr_color light">
                    {{ __('messages.paragraphe1') }}
                </p>
            </div>
        </div>
    </section>
    <section class="page_titlev2">
        <div class="content_breadcumpv2  flex-column container row w-100 mx-auto">
            <div class="col-lg-8 col-12">
                <h3>{{ __('messages.paragraphe2') }}</h3>
                <p>{{ __('messages.paragraphe3') }}</p>
                <div>
                    <a href="{{ route('about_us') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-buttonv4 custom-m px-sm-3 w-100 justify-content-center" tabindex="0">
                        <p class="m-0">{{ __('messages.Contact_us') }}</p>
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
            </div>
        </div>
    </section>
    <section class="py-5">
        <h3 class="h2 mb-4">{{ __('messages.AVIS') }}</h3>
        <div class="avis__swiper">
            <div class="swiper-wrapper">
                <div class="avis__cnt d-flex gap-4 p-4 swiper-slide">
                    <div>
                        <img src="assets/images/quatation.svg" alt="">
                    </div>
                    <div>
                        <div class="d-lg-flex d-md-flex d-block justify-content-between align-items-start">
                            <div class="d-flex flex-column">
                                <span class="name_client">{{ __('messages.AKILL_BALIMIDIS') }}</span>
                                <span class="period_client">{{ __('messages.client1') }}</span>
                            </div>
                            <div class="stars__cnt">
                                <img src="assets/images/stare.svg" alt="">
                                <img src="assets/images/stare.svg" alt="">
                                <img src="assets/images/stare.svg" alt="">
                                <img src="assets/images/stare.svg" alt="">
                                <img src="assets/images/stare.svg" alt="">
                                <span>4.5</span>
                            </div>
                        </div>
                        <p>{{ __('messages.client11') }}</p>
                    </div>
                </div>
                <div class="avis__cnt d-flex gap-4 p-4 swiper-slide">
                    <div>
                        <img src="assets/images/quatation.svg" alt="">
                    </div>
                    <div>
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="d-flex flex-column">
                                <span class="name_client">{{ __('messages.client2') }}</span>
                                <span class="period_client">{{ __('messages.client22') }}</span>
                            </div>
                            <div class="stars__cnt">
                                <img src="assets/images/stare.svg" alt="">
                                <img src="assets/images/stare.svg" alt="">
                                <img src="assets/images/stare.svg" alt="">
                                <img src="assets/images/stare.svg" alt="">
                                <img src="assets/images/stare.svg" alt="">
                                <span>4.5</span>
                            </div>
                        </div>
                        <p>{{ __('messages.client222') }}</p>
                    </div>
                </div>
                <div class="avis__cnt d-flex gap-4 p-4 swiper-slide">
                    <div>
                        <img src="assets/images/quatation.svg" alt="">
                    </div>
                    <div>
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="d-flex flex-column">
                                <span class="name_client">{{ __('messages.client3') }}</span>
                                <span class="period_client">{{ __('messages.client33') }}</span>
                            </div>
                            <div class="stars__cnt">
                                <img src="assets/images/stare.svg" alt="">
                                <img src="assets/images/stare.svg" alt="">
                                <img src="assets/images/stare.svg" alt="">
                                <img src="assets/images/stare.svg" alt="">
                                <img src="assets/images/stare.svg" alt="">
                                <span>4.7</span>
                            </div>
                        </div>
                        <p>{{ __('messages.client333') }}</p>
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-between mt-lg-5 mt-md-5 mt-4">
                <button class="swipev2 preveis_item"><img src="assets/images/circle_swipe_lf.svg" alt=""></button>
                <button class="swipev2 next_item"><img src="assets/images/circle_swipe_ri.svg" alt=""></button>
            </div>
        </div>
        
        
    </section>
    <section class="page_titlev3 container py-5">
        <div class="content_breadcumpv3 container row w-100 mx-auto py-4">
            <div class="col-lg-8  col-md-8 col-12 content_breadcumpv2 flex-column">
                <span class="sea__tag">{{ __('messages.Dakhla_Beyond_Adventure') }}</span>
                <h3>{{ __('messages.paragraphe4') }}</h3>
                <p>{{ __('messages.paragraphe5') }}</p>
            </div>
            <div class="col-lg-4 col-md-4 col-12 d-flex align-items-center justify-content-center">
                <button class="play_btn"><img src="assets/images/Group 2.svg" alt=""></button>
            </div>
        </div>
    </section>
    <section class="faq__cnt py-5">
        <div class="container">
            <div class="section_header d-lg-flex d-md-flex d-block align-items-center justify-content-between">
                <h2 class="cr_color p_max_xl">{{ __('messages.Faq') }}</h2>
                <p class="cr_black p_max_xl">{{ __('messages.paragraphe6') }}</p>
            </div>
            <div class="">
                <div class="border__cnt border__cntv2 ">
                    <div class="dropdown_item">
                        <div class="d-flex align-items-center justify-content-between iteme iteme_drop_ ">
                            <div class="d-flex align-items-center gap-2">
                                <span class="img_title">{{ __('messages.QA1') }}</span>
                            </div>
                            <div class="gap__drop gap__dropv2">
                                <img src="assets/images/dropdownn.svg" alt="">
                            </div>
                        </div>
                        <div class="mt-1 description" style="display: none;">
                            <p class="cr_color">{{ __('messages.AN1') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="border__cnt border__cntv2 ">
                    <div class="dropdown_item">
                        <div class="d-flex align-items-center justify-content-between iteme iteme_drop_ ">
                            <div class="d-flex align-items-center gap-2">
                                <span class="img_title">{{ __('messages.QA2') }}</span>
                            </div>
                            <div class="gap__drop gap__dropv2">
                                <img src="assets/images/dropdownn.svg" alt="">
                            </div>
                        </div>
                        <div class="mt-1 description" style="display: none;">
                            <p class="cr_color">{{ __('messages.AN2') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="border__cnt border__cntv2 ">
                    <div class="dropdown_item">
                        <div class="d-flex align-items-center justify-content-between iteme iteme_drop_ ">
                            <div class="d-flex align-items-center gap-2">
                                <span class="img_title">{{ __('messages.QA3') }}</span>
                            </div>
                            <div class="gap__drop gap__dropv2">
                                <img src="assets/images/dropdownn.svg" alt="">
                            </div>
                        </div>
                        <div class="mt-1 description" style="display: none;">
                            <p class="cr_color">{{ __('messages.AN3') }}
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>    
    </section>

@endsection