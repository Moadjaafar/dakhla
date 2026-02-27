@extends('layouts.layout')
@section('content')
<section class="page_title">
    <div class="content_breadcump">
        <div class="shape_"></div>
        <h1>{{ __('messages.key_9461bed8b71377318436990e57106729') }}</h1>
    </div>
</section>
<section class="container">
    <div class="offer_details my-5">
        <span class="title_span">{{ __('messages.key_9461bed8b71377318436990e57106729') }}</span>
        <div class="d-lg-flex d-block align-items-center justify-content-between mt-4">
            <h2 class=" mb-lg-0 mb-3 offer__nm">{{ __('messages.key_ec8fe247e08fa627e1ac5231f11d5ce5') }}</h2>
            <div>
                <button type="button" class="auto__submit vrg_btn align-items-center justify-content-center me-auto ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
                    <p class="m-0">{{ __('messages.key_855093915510ea2099efc66ae7c954f8') }}</p>
                    <span class="custom-arrow position-relative ">
                        <svg class="arr1 position-absolute" xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
                            <path d="M12.1425 8.71411L15.8567 4.99983L12.1425 1.28554" stroke="white" stroke-width="1.39286" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <svg class="arr2 position-absolute" xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
                            <path d="M12.1425 8.71411L15.8567 4.99983L12.1425 1.28554" stroke="white" stroke-width="1.39286" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>
            </div>  
        </div>
        <div class="offer_swiper_wrapper mt-3">
            <div class="swiper offer_swiper">
                <div class="swiper-wrapper">
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/Frame42186438.png">
                        <img src="assets/images/Frame42186438.png" alt="">
                        <span class="activity_label">Surf Sessions</span>
                    </a>
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/Frame3214.png">
                        <img src="assets/images/Frame3214.png" alt="">
                        <span class="activity_label">Surf Sessions</span>
                    </a>
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/Frame7367441.png">
                        <img src="assets/images/Frame7367441.png" alt="">
                        <span class="activity_label">Surf Sessions</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <h3>{{ __('messages.key_8f7f4c1ce7a4f933663d10543562b096') }}</h3>
            <p class="cr_color">{{ __('messages.key_acae992c266bc74f7e7072ab19bed0ad') }}</p>
        </div>
        <div class="row w-100 mx-auto">
            <div class="col-lg-8  col-12 ps-0">
                <div class="">
                    <div class="border__cnt mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="img_title">{{ __('messages.key_61e86247955f47dadf171e2d2027a34f') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                                <p class="cr_color">{{ __('messages.key_7d1b1d0f09faa2709b8552b3c19417bf') }}</p> 

                            </div>
                        </div>
                    </div>
                    <div class="border__cnt mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="img_title">{{ __('messages.key_19e4876e4ca9715d705094bfbda1f964') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                                <p class="cr_color">{{ __('messages.key_366c51478f1146a957b0fae834923b12') }}</p> 

                            </div>
                        </div>
                    </div>
                    <div class="border__cnt mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="img_title">{{ __('messages.key_5aee9bffb83a653ce5be23fb0614d053') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                                <p class="cr_color">{{ __('messages.key_a3297005959ef229e53a457d0acb1d9d') }}</p> 
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 description">
                        <p class="cr_color">{{ __('messages.key_9df3201ba59a7b14cc43edf8daf4dd21') }}</p> 

                    </div>
                </div>

            </div>
            <div class="col-lg-4  col-12 mt-lg-0 mt-4">
                <div class="book_cnt ">
                    <form class="offer__bk" action="{{ route('reservation.store') }}" method="post">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="d-flex mb-3 align-items-center justify-content-between">
                            <span class="price_span">-- -- €</span>
                            <span class="price_tag">{{ __('messages.key_884ba3386547c7dd63c0179da6c107ab') }}</span>
                            <input type="hidden" name="prix" value="000">
                            <input type="hidden" name="name" class="hide__ofnm" value="">
                            <input type="hidden" name="img_src" value="assets/images/Frame42186438.png">
                        </div>
                        <p class="cr_color">{{ __('messages.key_30fc95b9c6f60df8b04f955c0033a067') }}</p>
                        <p class="cr_color">{{ __('messages.key_f113758f6511f94560065f7005addf76') }}</p>
                        <div class="d-flex align-items-center justify-content-between py-3 border___v">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/images/group.svg" class="" alt="">
                                <span class="nbr_persen">{{ __('messages.key_6c0e7e2f43ddbce9815298c1002428f3') }}</span>
                            </div>
                            <div>
                                <select name="nbr_person" id="">
                                    <option value="01" selected>01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="+4">+4</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between py-3 border___v">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/images/date.svg" class="" alt="">
                                <span class="nbr_persen">{{ __('messages.key_44749712dbec183e983dcd78a7736c41') }}</span>
                            </div>
                            <div>
                                <input type="date" value="2024-12-12" class="input__v" name="date_rdv" id="">
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="me-auto vrg_btn align-items-center w-100 justify-content-center ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
                                <p class="m-0">{{ __('messages.book_btn') }}</p>
                                <span class="custom-arrow position-relative ">
                                    <svg class="arr1 position-absolute" xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
                                        <path d="M12.1425 8.71411L15.8567 4.99983L12.1425 1.28554" stroke="white" stroke-width="1.39286" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <svg class="arr2 position-absolute" xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
                                        <path d="M12.1425 8.71411L15.8567 4.99983L12.1425 1.28554" stroke="white" stroke-width="1.39286" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </form> 
                </div>
            </div>
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
                        <h3>{{ __('messages.bivouac_breadcrumb') }}</h3>
                        <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}</p>
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