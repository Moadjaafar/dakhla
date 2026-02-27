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
            <h2 class=" mb-lg-0 mb-3 offer__nm">{{ __('messages.key_3a6a080ad12942c2df571a2edeea34bc') }}</h2>
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
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/excursion-dakhla-4x4_4.jpeg">
                        <img src="assets/images/excursion-dakhla-4x4_4.jpeg" alt="Excursion Dakhla 4x4">
                        <span class="activity_label">Excursion 4x4</span>
                    </a>
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/excursion-dakhla-4x4_1.jpeg">
                        <img src="assets/images/excursion-dakhla-4x4_1.jpeg" alt="Excursion Dakhla 4x4">
                        <span class="activity_label">Excursion 4x4</span>
                    </a>
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/excursion-dakhla-4x4_2.jpeg">
                        <img src="assets/images/excursion-dakhla-4x4_2.jpeg" alt="Excursion Dakhla 4x4">
                        <span class="activity_label">Excursion 4x4</span>
                    </a>
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/excursion-dakhla-4x4_3.jpeg">
                        <img src="assets/images/excursion-dakhla-4x4_3.jpeg" alt="Excursion Dakhla 4x4">
                        <span class="activity_label">Excursion 4x4</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <h3>{{ __('messages.key_8f7f4c1ce7a4f933663d10543562b096') }}</h3>
            <p class="cr_color">{{ __('messages.key_69d3d741db8a2a3df0296c2bdc5f65d5') }}</p>
        </div>
        <div class="row w-100 mx-auto">
            <div class="col-lg-8  col-12">
                <div class="border__cnt">
                    <div class="d-flex align-items-center justify-content-between iteme gap-4 border___botom">
                        <div class="d-flex align-items-center gap-2">
                            <img src="assets/images/location.svg" alt="">
                            <span class="img_title">{{ __('messages.key_8145e6293dd5ea88e3ddbdc68c605f2f') }}</span>
                        </div>
                        <div class="text-end">
                            <span class="detail_img">{{ __('messages.key_427455e1d05d0c46eccd9097d84c1bcd') }}</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between iteme gap-4 border___botom">
                        <div class="d-flex align-items-center gap-2">
                            <img src="assets/images/time.svg" alt="">
                            <span class="img_title">{{ __('messages.key_990e1f56fa24065dc178b298b2ea7629') }}</span>
                        </div>
                        <div class="text-end">
                            <span class="detail_img">{{ __('messages.key_61258e3b6ca21b549fc70ced75ac05ef') }}</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between iteme gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <img src="assets/images/transport.svg" alt="">
                            <span class="img_title">{{ __('messages.key_8145e6293dd5ea88e3ddbdc68c605f2f') }}</span>
                        </div>
                        <div class="text-end">
                            <span class="detail_img">{{ __('messages.key_531b1aa44060227c07c7bea661044f64') }}</span>
                        </div>
                    </div>
                </div>
                <div class="my-4">
                    <h3>{{ __('messages.key_aa9699d041021ab1b4cb0321e63ad997') }}</h3>
                </div>
                <div class="">
                    <div class="border__cnt mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/location.svg" alt="">
                                    <span class="img_title">{{ __('messages.key_f735ed37eaeca42037b6cd903bb6783a') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <span class="detail_img">{{ __('messages.key_3c3c2bbd29cedd18f589fbdb78b2f73c') }}</span>
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                                <p class="cr_color">{{ __('messages.key_39c1910ae341f2f55a34643105684f7b') }}</p>
                                <h3 class="">{{ __('messages.key_f735ed37eaeca42037b6cd903bb6783a') }}</h3>
                                <p class="cr_color">{{ __('messages.key_f51494ec1b6f4c4c0ec9fa3fc7f4ebd3') }}</p>
                                <h3 class="">{{ __('messages.key_1879790b5103da2922d875ae52af6ab5') }}</h3>
                                <p class="cr_color">{{ __('messages.key_bdf163d9e24efa1a842968f8ed910504') }}</p>
                                <h3 class="">{{ __('messages.key_88936260ff4a75e1955b722dd9659155') }}</h3>
                                <p class="cr_color">{{ __('messages.key_8862d4dad7f1ad778a322bff3521dffd') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="border__cnt  mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/location.svg" alt="">
                                    <span class="img_title">{{ __('messages.key_2c945b652d835e7719221f7248e41ea4') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <span class="detail_img">{{ __('messages.key_5c777b43b7c2254eaf29c6eb4b023e5e') }}</span>
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                                <p class="cr_color">{{ __('messages.key_651b7f11815372708ff1604f224fdcaa') }}</p>
                            </div>
                        </div> 
                    </div>
                    <div class="border__cnt  mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/location.svg" alt="">
                                    <span class="img_title">{{ __('messages.key_9e6f15efc47128ff6ab2fadfe66c1971') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <span class="detail_img">{{ __('messages.key_8ce92cfbc084e5195e29d907aba8d24c') }}</span>
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                                <p class="cr_color">{{ __('messages.key_adf555e90df77c268351a1bfc237faf6') }}</p>
                                
                            </div>
                        </div> 
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
                            <span class="price_span">145 €</span>
                            <span class="price_tag">{{ __('messages.key_884ba3386547c7dd63c0179da6c107ab') }}</span>
                            <input type="hidden" name="prix" value="1450">
                            <input type="hidden" name="name" class="hide__ofnm" value="">
                            <input type="hidden" name="img_src" value="assets/images/excursion-dakhla-4x4_4.jpeg">
                        </div>
                        <p class="cr_color">{{ __('messages.par_vehicule') }}
                        </p>
                        <p class="note_repas"><i>{{ __('messages.note_repas_non_inclus') }}</i></p>
                        <p class="cr_color">Select date and travelers</p>
                        <div class="d-flex align-items-center justify-content-between py-3 border___v">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/images/group.svg" class="" alt="">
                                <span class="nbr_persen">Travelers</span>
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
                                <span class="nbr_persen">Date</span>
                            </div>
                            <div>
                                <input type="date" value="2024-12-12" class="input__v" name="date_rdv" id="">
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="me-auto vrg_btn align-items-center w-100 justify-content-center ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
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