@extends('layouts.layout')
@section('content')
    <section class="page_title">
        <div class="content_breadcump">
            <div class="shape_"></div>
            <h1>Blog</h1>
        </div>
    </section>
    <section class="reservation__cnt">
        <div class="container reservation__details px-5 py-4">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex gap-3 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="11" viewBox="0 0 6 11" fill="none">
                        <path d="M4.69141 1.5235L0.999098 5.5235L4.69141 9.5235" stroke="#033A4E" stroke-width="1.71429" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <a class="cr_color" href="/">Back</a>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <span class="cr_color">Share :</span>
                    <div class="d-flex gap-2"> 
                        <a href=""><img src="assets/images/facebook.svg" alt=""></a>
                        <a href=""><img src="assets/images/facebook.svg" alt=""></a>
                        <a href=""><img src="assets/images/facebook.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="mt-4"> 
                <h1 class="cr_color text-center p_max_xxl mx-auto blog_titlecss">{{ __('messages.titleblog41') }}</h1>
                <img src="assets/images/blog4.jpeg" class="my-lg-5 my-3 w-100" alt="Que faire à Dakhla le soir ? Découvrez les Meilleures Expériences et Restaurants">
                <p class="cr_color">{{ __('messages.descr41') }}</p>
            
                <h2 class="cr_color">{{ __('messages.titleblog42') }}</h2>
                <p class="cr_color">{{ __('messages.descr42') }}</p>
            
                <h2 class="cr_color">{{ __('messages.titleblog43') }}</h2>
                <p class="cr_color">{{ __('messages.descr43') }}</p>
            
                <h2 class="cr_color">{{ __('messages.titleblog44') }}</h2>
                <p class="cr_color">{{ __('messages.descr44') }}</p>
            
                <h2 class="cr_color">{{ __('messages.titleblog45') }}</h2>
                <p class="cr_color">{{ __('messages.descr45') }}</p>
            
                <h2 class="cr_color">{{ __('messages.titleblog46') }}</h2>
                <p class="cr_color">{{ __('messages.descr46') }}</p>
            
                <h2 class="cr_color">{{ __('messages.titleblog47') }}</h2>
                <p class="cr_color">{{ __('messages.descr47') }}</p>
            
                <h2 class="cr_color">{{ __('messages.titleblog48') }}</h2>
                <p class="cr_color">{{ __('messages.descr48') }}</p>
            </div>
        </div>
    </section>
    <section class="sea_section d-flex align-items-center">
        <div class="container column-flex">
            <img src="assets/images/our_offers_ani.svg" class="my-4" alt="">
                                  
            <h2 class="p_max_xxl text-center">{{ __('messages.Discover_our_Offers_Events') }}</h2>
            <p class="p_max_xxl  text-center">
                {{ __('messages.Discover_our_p') }}
            </p>
        </div>
    </section>
    <div class=" pb-5 card_sahara_cnt">
        <div class="swiper Swiper_offers">
            <div class="swiper-wrapper">
                <div class="swiper-slide offer_card  mb-3" onclick="location.href='{{ route('offer.surf_sessions') }}'" style="cursor: pointer;">
                    <div class="card_shara">
                        <img src="assets/images/offer7.png" alt="">
                        <div class="card_content px-4 py-4">
                            <h3>{{ __('messages.key_0c8e140b4cb5e4c9bd793446d8a296e4') }}</h3>
                            <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}
                            </p>
                            <a href="{{ route('offer.surf_sessions') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide offer_card  mb-3" onclick="location.href='{{ route('offer.dakhla_4x4') }}'" style="cursor: pointer;">
                    <div class="card_shara">
                        <img src="assets/images/offer.png" alt="">
                        <div class="card_content px-4 py-4">
                            <h3>{{ __('messages.key_5ecf541d66dad225d2e0a60f7ca4a0ef') }}</h3>
                            <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}
                            </p>
                            <a href="{{ route('offer.dakhla_4x4') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide offer_card  mb-3" onclick="location.href='{{ route('offer.bivouac_imlili') }}'" style="cursor: pointer;">
                    <div class="card_shara">
                        <img src="assets/images/DesertNightDakhlaBivouacImlili.jpeg" alt="">
                        <div class="card_content px-4 py-4">
                            <h3>{{ __('messages.bivouac_breadcrumb') }}
                            </h3>
                            <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}
                            </p>
                            <a href="{{ route('offer.bivouac_imlili') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide offer_card  mb-3" onclick="location.href='{{ route('offer.catamaran_grande_baie') }}'" style="cursor: pointer;">
                    <div class="card_shara">
                        <img src="assets/images/offer4.png" alt="">
                        <div class="card_content px-4 py-4">
                            <h3>{{ __('messages.key_4adf7da9ac4f0c09bf49f129b833b4c3') }}
                            </h3>
                            <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}
                            </p>
                            <a href="{{ route('offer.catamaran_grande_baie') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide offer_card mb-3" onclick="location.href='{{ route('offer.dos_chameau_desert') }}'" style="cursor: pointer;">
                    <div class="card_shara">
                        <img src="assets/images/experince81.jpeg" alt="">
                        <div class="card_content px-4 py-4">
                            <h3>{{ __('messages.key_780886d385ed8cd3408f9134231e6340') }}
                            </h3>
                            <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}
                            </p>
                            <a href="{{ route('offer.dos_chameau_desert') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide offer_card mb-3" onclick="location.href='{{ route('offer.quad_desert') }}'" style="cursor: pointer;">
                    <div class="card_shara">
                        <img src="assets/images/experince5.jpeg" alt="">
                        <div class="card_content px-4 py-4">
                            <h3>{{ __('messages.key_e380a8ce82dc9aeee8d9a27c779e4eb7') }}
                            </h3>
                            <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}
                            </p>
                            <a href="{{ route('offer.quad_desert') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide offer_card mb-3" onclick="location.href='{{ route('offer.brochure_demi_journee') }}'" style="cursor: pointer;">
                    <div class="card_shara">
                        <img src="assets/images/excursion-dakhla-4x4_4.jpeg" alt="">
                        <div class="card_content px-4 py-4">
                            <h3>{{ __('messages.key_a875c9c7071da4dc558aab956480c224') }}</h3>
                            <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}
                            </p>
                            <a href="{{ route('offer.brochure_demi_journee') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="swipe_btnn left preveise_offer_slide "><img src="assets/images/swipleft.svg" alt=""></button>
        <button class="swipe_btnn right next_offer_slide"><img src="assets/images/swipright.svg" alt=""></button>
    </div>
@endsection