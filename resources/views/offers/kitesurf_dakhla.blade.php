@extends('layouts.layout')
@section('content')
@php
    // Euro prices. The hidden "prix" submitted to the reservation form is euro x 10 (MAD).
    $prive = ['2' => 125, '4' => 250, '6' => 360, '8' => 470, '10' => 590, '12' => 670, '20' => 1200];
    $semi  = ['2' => 90,  '4' => 170, '6' => 250, '8' => 340, '10' => 420, '12' => 500, '20' => 850];
    $priveExtra = 50;
    $semiExtra  = 40;
@endphp
<section class="page_title">
    <div class="content_breadcump">
        <div class="shape_"></div>
        <h1>{{ __('messages.kitesurf_title') }}</h1>
    </div>
</section>
<section class="container">
    <div class="offer_details my-5">
        <span class="title_span">{{ __('messages.kitesurf_title') }}</span>
        <div class="d-lg-flex d-block align-items-center justify-content-between mt-4">
            <h2 class="mb-lg-0 mb-3 offer__nm">{{ __('messages.kitesurf_intro') }}</h2>
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
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/kitesurf-1.jpeg">
                        <img loading="lazy" src="assets/images/kitesurf-1.jpeg" alt="Kitesurf à Dakhla avec One Life Dakhla">
                        <span class="activity_label">Kitesurf Dakhla</span>
                    </a>
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/kitesurf-2.jpeg">
                        <img loading="lazy" src="assets/images/kitesurf-2.jpeg" alt="Spot de kitesurf sur le lagon de Dakhla">
                        <span class="activity_label">Kitesurf Dakhla</span>
                    </a>
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/kitesurf-3.jpeg">
                        <img loading="lazy" src="assets/images/kitesurf-3.jpeg" alt="Rider de kitesurf sur le lagon de Dakhla">
                        <span class="activity_label">Kitesurf Dakhla</span>
                    </a>
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/kitesurf-4.jpeg">
                        <img loading="lazy" src="assets/images/kitesurf-4.jpeg" alt="Cours de kitesurf encadré à Dakhla">
                        <span class="activity_label">Kitesurf Dakhla</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <p class="cr_color">{{ __('messages.kitesurf_p1') }}</p>
            <p class="cr_color">{{ __('messages.kitesurf_p2') }}</p>
            <p class="cr_color">{{ __('messages.kitesurf_p3') }}</p>
            <p class="cr_color">{{ __('messages.kitesurf_p4') }}</p>
        </div>
        <div class="row w-100 mx-auto">
            <div class="col-lg-8 col-12 ps-0">
                <div class="kitesurf_pricing mt-3">
                    <h3 class="mb-4">{{ __('messages.kitesurf_pricing_title') }}</h3>
                    <div class="row">
                        <div class="col-md-6 col-12 mb-4">
                            <div class="price_table_card">
                                <h4 class="price_table_title">{{ __('messages.kitesurf_cours_prive') }}</h4>
                                @foreach ($prive as $h => $eur)
                                    <div class="price_row">
                                        <span class="dur">{{ $h }} {{ __('messages.kitesurf_heures') }}</span>
                                        <span class="leader"></span>
                                        <span class="amt">€{{ $eur }}</span>
                                    </div>
                                @endforeach
                                <div class="price_row extra">
                                    <span class="dur">{{ __('messages.kitesurf_heure_supp') }}</span>
                                    <span class="leader"></span>
                                    <span class="amt">€{{ $priveExtra }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mb-4">
                            <div class="price_table_card">
                                <h4 class="price_table_title">{{ __('messages.kitesurf_cours_semi_prive') }}</h4>
                                @foreach ($semi as $h => $eur)
                                    <div class="price_row">
                                        <span class="dur">{{ $h }} {{ __('messages.kitesurf_heures') }}</span>
                                        <span class="leader"></span>
                                        <span class="amt">€{{ $eur }}</span>
                                    </div>
                                @endforeach
                                <div class="price_row extra">
                                    <span class="dur">{{ __('messages.kitesurf_heure_supp') }}</span>
                                    <span class="leader"></span>
                                    <span class="amt">€{{ $semiExtra }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mt-lg-0 mt-4">
                <div class="book_cnt">
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
                            <span class="price_span" id="kite_price_display">360 €</span>
                            <span class="price_tag">{{ __('messages.key_884ba3386547c7dd63c0179da6c107ab') }}</span>
                            <input type="hidden" name="prix" id="kite_prix" value="3600">
                            <input type="hidden" name="name" id="kite_name" value="">
                            <input type="hidden" name="img_src" value="assets/images/kitesurf-1.jpeg">
                            <input type="hidden" name="offer_type" id="kite_offer_type" value="">
                            <input type="hidden" name="offer_duree" id="kite_offer_duree" value="">
                        </div>
                        <div class="d-flex align-items-center justify-content-between py-3 border___v">
                            <div class="d-flex align-items-center gap-2">
                                <span class="nbr_persen">{{ __('messages.kitesurf_type_label') }}</span>
                            </div>
                            <div>
                                <select name="cours_type" id="kite_type" class="input__v">
                                    <option value="prive" selected>{{ __('messages.kitesurf_cours_prive') }}</option>
                                    <option value="semi">{{ __('messages.kitesurf_cours_semi_prive') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between py-3 border___v">
                            <div class="d-flex align-items-center gap-2">
                                <span class="nbr_persen">{{ __('messages.kitesurf_duree') }}</span>
                            </div>
                            <div>
                                <select name="duree" id="kite_duree" class="input__v">
                                    @foreach (array_keys($prive) as $h)
                                        <option value="{{ $h }}" {{ $h == '6' ? 'selected' : '' }}>{{ $h }} {{ __('messages.kitesurf_heures') }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between py-3 border___v">
                            <div class="d-flex align-items-center gap-2">
                                <img loading="lazy" src="assets/images/group.svg" class="" alt="">
                                <span class="nbr_persen">{{ __('messages.key_6c0e7e2f43ddbce9815298c1002428f3') }}</span>
                            </div>
                            <div>
                                <select name="nbr_person" class="input__v">
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
                                <img loading="lazy" src="assets/images/date.svg" class="" alt="">
                                <span class="nbr_persen">{{ __('messages.key_44749712dbec183e983dcd78a7736c41') }}</span>
                            </div>
                            <div>
                                <input type="date" class="input__v" name="date_rdv" id="">
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
        <img loading="lazy" src="assets/images/our_offers_ani.svg" class="my-4" alt="">
        <h2 class="p_max_xxl text-center">{{ __('messages.Discover_our_Offers_Events') }}</h2>
        <p class="p_max_xxl text-center">
            {{ __('messages.Discover_our_p') }}
        </p>
    </div>
</section>
<div class="pb-5 card_sahara_cnt">
    <div class="swiper Swiper_offers">
        <div class="swiper-wrapper">
            <div class="swiper-slide offer_card mb-3" onclick="location.href='{{ route('offer.surf_sessions') }}'" style="cursor: pointer;">
                <div class="card_shara">
                    <img loading="lazy" src="assets/images/offer7.png" alt="">
                    <div class="card_content px-4 py-4">
                        <h3>{{ __('messages.key_0c8e140b4cb5e4c9bd793446d8a296e4') }}</h3>
                        <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}</p>
                        <a href="{{ route('offer.surf_sessions') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide offer_card mb-3" onclick="location.href='{{ route('offer.dakhla_4x4') }}'" style="cursor: pointer;">
                <div class="card_shara">
                    <img loading="lazy" src="assets/images/offer-4x4.jpeg" alt="">
                    <div class="card_content px-4 py-4">
                        <h3>{{ __('messages.key_5ecf541d66dad225d2e0a60f7ca4a0ef') }}</h3>
                        <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}</p>
                        <a href="{{ route('offer.dakhla_4x4') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide offer_card mb-3" onclick="location.href='{{ route('offer.bivouac_imlili') }}'" style="cursor: pointer;">
                <div class="card_shara">
                    <img loading="lazy" src="assets/images/DesertNightDakhlaBivouacImlili.jpeg" alt="">
                    <div class="card_content px-4 py-4">
                        <h3>{{ __('messages.bivouac_breadcrumb') }}</h3>
                        <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}</p>
                        <a href="{{ route('offer.bivouac_imlili') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide offer_card mb-3" onclick="location.href='{{ route('offer.catamaran_grande_baie') }}'" style="cursor: pointer;">
                <div class="card_shara">
                    <img loading="lazy" src="assets/images/offer4.png" alt="">
                    <div class="card_content px-4 py-4">
                        <h3>{{ __('messages.key_4adf7da9ac4f0c09bf49f129b833b4c3') }}</h3>
                        <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}</p>
                        <a href="{{ route('offer.catamaran_grande_baie') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide offer_card mb-3" onclick="location.href='{{ route('offer.dos_chameau_desert') }}'" style="cursor: pointer;">
                <div class="card_shara">
                    <img loading="lazy" src="assets/images/experince81.jpeg" alt="">
                    <div class="card_content px-4 py-4">
                        <h3>{{ __('messages.key_780886d385ed8cd3408f9134231e6340') }}</h3>
                        <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}</p>
                        <a href="{{ route('offer.dos_chameau_desert') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide offer_card mb-3" onclick="location.href='{{ route('offer.quad_desert') }}'" style="cursor: pointer;">
                <div class="card_shara">
                    <img loading="lazy" src="assets/images/experince5.jpeg" alt="">
                    <div class="card_content px-4 py-4">
                        <h3>{{ __('messages.key_e380a8ce82dc9aeee8d9a27c779e4eb7') }}</h3>
                        <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}</p>
                        <a href="{{ route('offer.quad_desert') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide offer_card mb-3" onclick="location.href='{{ route('offer.brochure_demi_journee') }}'" style="cursor: pointer;">
                <div class="card_shara">
                    <img loading="lazy" src="assets/images/excursion-dakhla-4x4_4.jpeg" alt="">
                    <div class="card_content px-4 py-4">
                        <h3>{{ __('messages.key_a875c9c7071da4dc558aab956480c224') }}</h3>
                        <p class="light p_sm">{{ __('messages.key_c2302ccaaadf62b9cf0a47e1d20d727e') }}</p>
                        <a href="{{ route('offer.brochure_demi_journee') }}">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="swipe_btnn left preveise_offer_slide "><img loading="lazy" src="assets/images/swipleft.svg" alt=""></button>
    <button class="swipe_btnn right next_offer_slide"><img loading="lazy" src="assets/images/swipright.svg" alt=""></button>
</div>
<script>
    (function () {
        var PRICES = {
            prive: @json($prive),
            semi: @json($semi)
        };
        var LABELS = {
            prive: @json(__('messages.kitesurf_cours_prive')),
            semi: @json(__('messages.kitesurf_cours_semi_prive'))
        };
        var HOURS_WORD = @json(__('messages.kitesurf_heures'));
        var OFFER_LABEL = 'Kitesurf Dakhla';

        var typeEl = document.getElementById('kite_type');
        var dureeEl = document.getElementById('kite_duree');
        var priceDisplay = document.getElementById('kite_price_display');
        var prixInput = document.getElementById('kite_prix');
        var nameInput = document.getElementById('kite_name');
        var offerTypeInput = document.getElementById('kite_offer_type');
        var offerDureeInput = document.getElementById('kite_offer_duree');

        function updatePrice() {
            var type = typeEl.value;
            var duree = dureeEl.value;
            var euro = PRICES[type][duree];
            if (euro === undefined) { return; }
            priceDisplay.textContent = euro + ' €';
            prixInput.value = euro * 10; // euro -> MAD
            nameInput.value = OFFER_LABEL + ' – ' + LABELS[type] + ', ' + duree + ' ' + HOURS_WORD;
            offerTypeInput.value = LABELS[type];
            offerDureeInput.value = duree + ' ' + HOURS_WORD;
        }

        if (typeEl && dureeEl) {
            typeEl.addEventListener('change', updatePrice);
            dureeEl.addEventListener('change', updatePrice);
            updatePrice();
        }
    })();
</script>
@endsection
