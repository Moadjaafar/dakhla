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
            <h2 class=" mb-lg-0 mb-3 offer__nm">{{ __('messages.key_45006e6e013626bcd989e81c14e50485') }}
            </h2>
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
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/Frame427321433.png">
                        <img src="assets/images/Frame427321433.png" alt="">
                        <span class="activity_label">Village Sahraoui</span>
                    </a>
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/Frame4273214340.png">
                        <img src="assets/images/Frame4273214340.png" alt="">
                        <span class="activity_label">Village Sahraoui</span>
                    </a>
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/Framedg27321441.png">
                        <img src="assets/images/Framedg27321441.png" alt="">
                        <span class="activity_label">Village Sahraoui</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <h3>{{ __('messages.key_8f7f4c1ce7a4f933663d10543562b096') }}</h3>
            <p class="cr_color">{{ __('messages.key_a1c5ef67a009a865f211aee44e869195') }}</p>
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
                                <p class="cr_color">{{ __('messages.key_69efe99aa594d88610086081a74d5010') }}</p> 
                            </div>
                        </div>
                    </div>
                    <div class="border__cnt  mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/location.svg" alt="">
                                    <span class="img_title">{{ __('messages.key_ec8555a8bd5e40c3ce05a07365c0329c') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <span class="detail_img">{{ __('messages.key_548949c701c8bd69c6a888721b0fd2e7') }}</span>
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                                <p class="cr_color">{{ __('messages.key_6bb8f7d012d9c85eaba7bb97b3fdf29d') }}</p>
                            </div>
                        </div> 
                    </div>
                    <div class="border__cnt  mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/location.svg" alt="">
                                    <span class="img_title">{{ __('messages.key_ca938c247e82e4e6290ee68388ac81cb') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <span class="detail_img">{{ __('messages.key_54641f9f690c60c7ff753c4b3d749e4e') }}</span>
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                                <p class="cr_color">{{ __('messages.key_f61e60c3e3b91f9b882a17bed9660b73') }}</p>
                            </div>
                        </div> 
                    </div>
                    <div class="border__cnt  mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/location.svg" alt="">
                                    <span class="img_title">{{ __('messages.key_ffb0044cc8e58381dc0a9ae86737b779') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <span class="detail_img">{{ __('messages.key_b3d3c02f00e85c17350289f0963eae4d') }}</span>
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                                <ul>
                                    <li>{{ __('messages.key_5f9144a2530ef970b09655c94bc1a5a3') }}</li>
                                    <li>{{ __('messages.key_2fbad0b4805a9ac1381b9dc30f349ca1') }}</li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                    <div class="border__cnt  mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/location.svg" alt="">
                                    <span class="img_title">{{ __('messages.key_172262bab49f2a369acdf418eb5aa210') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <span class="detail_img">{{ __('messages.key_8ce92cfbc084e5195e29d907aba8d24c') }}</span>
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                                <p class="cr_color">{{ __('messages.key_65031715f6ac517b413ca41577e5d8f6') }}</p>
                            </div>
                        </div> 
                    </div>
                    <div class="border__cnt  mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/location.svg" alt="">
                                    <span class="img_title">{{ __('messages.key_61b2e3f2c21631b05f5b77b10eb10062') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <span class="detail_img">{{ __('messages.key_bb036648d86a55f8aeafc09e3c0ce4c3') }}</span>
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                            </div>
                        </div> 
                    </div>
                    <div class="border__cnt  mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/location.svg" alt="">
                                    <span class="img_title">{{ __('messages.key_9c30c843616ace3721998fd1ab6d6dc9') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <span class="detail_img">{{ __('messages.key_b64e31e44f8b142cb7905a5492ddca64') }}</span>
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
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
                            <span class="price_span">60 €</span>
                            <span class="price_tag">Tarif</span>
                            <input type="hidden" name="prix" value="600">
                            <input type="hidden" name="name" class="hide__ofnm" value="">
                            <input type="hidden" name="img_src" value="assets/images/Frame427321433.png">
                        </div>
                        <p class="cr_color">{{ __('messages.key_4f83de5e274958de84400f06a009c110') }}
                        </p>
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
            <div class="swiper-slide offer_card  mb-3" onclick="location.href='{{ route('offer.aarich_village_sahraoui') }}'" style="cursor: pointer;">
                <div class="card_shara">
                    <img src="assets/images/offer_swip3.png" alt="">
                    <div class="card_content px-4 py-4">
                        <h3>{{ __('messages.key_45006e6e013626bcd989e81c14e50485') }}
                        </h3>
                        <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}
                        </p>
                        <a href="{{ route('offer.aarich_village_sahraoui') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
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