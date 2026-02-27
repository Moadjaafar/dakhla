@extends('layouts.layout')
@section('content')
<section class="page_title">
    <div class="content_breadcump">
        <div class="shape_"></div>
        <h1>{{ __('messages.bivouac_breadcrumb') }}</h1>
    </div>
</section>
<section class="container">
    <div class="offer_details my-5">
        <span class="title_span">{{ __('messages.bivouac_breadcrumb') }}</span>
        <div class="d-lg-flex d-block align-items-center justify-content-between mt-4">
            <h2 class=" mb-lg-0 mb-3 offer__nm">{{ __('messages.bivouac_title') }}</h2>
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
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/DesertNightDakhlaBivouacImlili.jpeg">
                        <img src="assets/images/DesertNightDakhlaBivouacImlili.jpeg" alt="Bivouac Imlili">
                        <span class="activity_label">Bivouac Imlili</span>
                    </a>
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/experince9.jpeg">
                        <img src="assets/images/experince9.jpeg" alt="Bivouac Imlili">
                        <span class="activity_label">Bivouac Imlili</span>
                    </a>
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/experince10.jpeg">
                        <img src="assets/images/experince10.jpeg" alt="Bivouac Imlili">
                        <span class="activity_label">Bivouac Imlili</span>
                    </a>
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/experince4.jpeg">
                        <img src="assets/images/experince4.jpeg" alt="Bivouac Imlili">
                        <span class="activity_label">Bivouac Imlili</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <h3>{{ __('messages.bivouac_program') }}</h3>
            <p class="cr_color">{{ __('messages.bivouac_description') }}</p>
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
                            <span class="detail_img">{{ __('messages.bivouac_location') }}</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between iteme gap-4 border___botom">
                        <div class="d-flex align-items-center gap-2">
                            <img src="assets/images/time.svg" alt="">
                            <span class="img_title">{{ __('messages.key_990e1f56fa24065dc178b298b2ea7629') }}</span>
                        </div>
                        <div class="text-end">
                            <span class="detail_img">{{ __('messages.bivouac_duration') }}</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between iteme gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <img src="assets/images/transport.svg" alt="">
                            <span class="img_title">{{ __('messages.key_8145e6293dd5ea88e3ddbdc68c605f2f') }}</span>
                        </div>
                        <div class="text-end">
                            <span class="detail_img">{{ __('messages.bivouac_transport') }}</span>
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
                                    <span class="img_title">{{ __('messages.bivouac_step1_title') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <span class="detail_img">{{ __('messages.bivouac_step1_time') }}</span>
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                                <p class="cr_color">{{ __('messages.bivouac_step1_desc') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="border__cnt mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/location.svg" alt="">
                                    <span class="img_title">{{ __('messages.bivouac_step2_title') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                                <p class="cr_color">{{ __('messages.bivouac_step2_desc') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="border__cnt mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/location.svg" alt="">
                                    <span class="img_title">{{ __('messages.bivouac_step3_title') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                                <p class="cr_color">{{ __('messages.bivouac_step3_desc') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="border__cnt mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/location.svg" alt="">
                                    <span class="img_title">{{ __('messages.bivouac_step4_title') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                                <p class="cr_color">{{ __('messages.bivouac_step4_desc') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="border__cnt mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/location.svg" alt="">
                                    <span class="img_title">{{ __('messages.bivouac_step5_title') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                                <p class="cr_color">{{ __('messages.bivouac_step5_desc') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="border__cnt mb-3">
                        <div class="dropdown_item">
                            <div class="d-flex align-items-center justify-content-between iteme iteme_drop_">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/location.svg" alt="">
                                    <span class="img_title">{{ __('messages.bivouac_step6_title') }}</span>
                                </div>
                                <div class="gap__drop">
                                    <img src="assets/images/dropdownn.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-3 description" style="display: none;">
                                <p class="cr_color">{{ __('messages.bivouac_step6_desc') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border__cnt mb-3 mt-4">
                    <h3>{{ __('messages.bivouac_why_title') }}</h3>
                    <p class="cr_color">{{ __('messages.bivouac_why_list') }}</p>
                </div>
                <div class="border__cnt mb-3">
                    <div class="d-flex align-items-start gap-2 p-3">
                        <span class="note_repas w-100">{{ __('messages.bivouac_info_title') }}: {{ __('messages.bivouac_info_desc') }}</span>
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
                            <span class="price_span">{{ __('messages.bivouac_price') }}</span>
                            <input type="hidden" name="prix" value="000">
                            <input type="hidden" name="name" class="hide__ofnm" value="">
                            <input type="hidden" name="img_src" value="assets/images/experince8.jpeg">
                        </div>
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
            <div class="swiper-slide offer_card  mb-3" onclick="location.href='{{ route('offer.dakhla_4x4') }}'" style="cursor: pointer;">
                <div class="card_shara">
                    <img src="assets/images/offer.png" alt="">
                    <div class="card_content px-4 py-4">
                        <h3>{{ __('messages.key_5ecf541d66dad225d2e0a60f7ca4a0ef') }}</h3>
                        <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}</p>
                        <a href="{{ route('offer.dakhla_4x4') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide offer_card  mb-3" onclick="location.href='{{ route('offer.surf_sessions') }}'" style="cursor: pointer;">
                <div class="card_shara">
                    <img src="assets/images/offer7.png" alt="">
                    <div class="card_content px-4 py-4">
                        <h3>{{ __('messages.key_0c8e140b4cb5e4c9bd793446d8a296e4') }}</h3>
                        <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}</p>
                        <a href="{{ route('offer.surf_sessions') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide offer_card  mb-3" onclick="location.href='{{ route('offer.dos_chameau_desert') }}'" style="cursor: pointer;">
                <div class="card_shara">
                    <img src="assets/images/experince81.jpeg" alt="">
                    <div class="card_content px-4 py-4">
                        <h3>{{ __('messages.key_780886d385ed8cd3408f9134231e6340') }}</h3>
                        <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}</p>
                        <a href="{{ route('offer.dos_chameau_desert') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="swipe_btnn left preveise_offer_slide "><img src="assets/images/swipleft.svg" alt=""></button>
    <button class="swipe_btnn right next_offer_slide"><img src="assets/images/swipright.svg" alt=""></button>
</div>
@endsection