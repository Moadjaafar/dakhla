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
            <h2 class=" mb-lg-0 mb-3 offer__nm">{{ __('messages.key_4adf7da9ac4f0c09bf49f129b833b4c3') }}</h2>
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
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/Frame4321438.png">
                        <img src="assets/images/Frame4321438.png" alt="">
                        <span class="activity_label">Catamaran</span>
                    </a>
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/Frame4321440.png">
                        <img src="assets/images/Frame4321440.png" alt="">
                        <span class="activity_label">Catamaran</span>
                    </a>
                    <a class="swiper-slide activity_slide" data-fancybox="offer-gallery" href="assets/images/Frame4273241.png">
                        <img src="assets/images/Frame4273241.png" alt="">
                        <span class="activity_label">Catamaran</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <h3>{{ __('messages.key_8f7f4c1ce7a4f933663d10543562b096') }}</h3>
            <p class="cr_color">{{ __('messages.key_d165d73fc7ef80a3045b3f6ae7417d46') }}
            </p>
        </div>
        <div class="row w-100 mx-auto">
            <div class="col-lg-8  col-12 ps-0">
                <div class="mt-3 description">
                    <p class="cr_color">{{ __('messages.key_21698c4795061db4bf115cf3784c1560') }}                        
                    </p>
                </div>
                <h3>{{ __('messages.key_10734f2429b85661550024e07716c26f') }}</h3>
                <div class="mt-3 description">
                    <p class="cr_color">{{ __('messages.key_a583a896af48248fceaefb63c3924794') }}
                    </p>
                </div>
                <div class="border__cnt mb-3 mt-4">
                    <div class="p-3">
                        <h3>{{ __('messages.catamaran_cancel_title') }}</h3>
                        <ul class="cr_color mt-3" style="padding-left: 20px;">
                            <li class="mb-2">{{ __('messages.catamaran_cancel_1') }}</li>
                            <li class="mb-2">{{ __('messages.catamaran_cancel_2') }}</li>
                            <li class="mb-2">{{ __('messages.catamaran_cancel_3') }}</li>
                            <li class="mb-2">{{ __('messages.catamaran_cancel_4') }}</li>
                        </ul>
                        <p class="cr_color mt-3">{{ __('messages.catamaran_cancel_sailing') }}</p>
                        <p class="cr_color mt-2"><strong>{{ __('messages.catamaran_cancel_thanks') }}</strong></p>
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
                            <span class="price_span" id="price-display">70 €</span>
                            <span class="price_tag">{{ __('messages.key_884ba3386547c7dd63c0179da6c107ab') }}</span>
                                <input type="hidden" name="prix" id="prix-input" value="700">

                            <input type="hidden" name="name" class="hide__ofnm" value="">
                            <input type="hidden" name="img_src" value="assets/images/Frame4321438.png">
                        </div>
                        <p class="cr_color">{{ __('messages.key_478edaccd845969a8216099e7fcbf5cf') }}</p>
                        <!-- Person Selection with Dynamic Pricing -->
                        <div class="d-flex align-items-center justify-content-between py-3 border___v">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/images/group.svg" class="" alt="">
                                <span class="nbr_persen">{{ __('messages.key_6c0e7e2f43ddbce9815298c1002428f3') }}</span>
                            </div>
                            <div>
                                <select name="nbr_person" id="person-select" onchange="updatePrice()">
                                    <option value="1" selected>01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">+4</option>
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

<script>
// Base price per person
const basePriceEuro = 70;  // Euro display price
const basePriceMAD = 700;  // MAD price (with extra 0)

// Price calculation function
function updatePrice() {
    const personSelect = document.getElementById('person-select');
    const priceDisplay = document.getElementById('price-display');
    const prixInput = document.getElementById('prix-input');
    
    let numberOfPersons = parseInt(personSelect.value);
    let totalPriceEuro = basePriceEuro * numberOfPersons;  // Euro for display
    let totalPriceMAD = basePriceMAD * numberOfPersons;    // MAD for backend
    
    // Handle "+4" option (assuming 5+ persons)
    if (personSelect.value === "5") {
        totalPriceEuro = basePriceEuro * 5;
        totalPriceMAD = basePriceMAD * 5;
    }
    
    // Update display (Euro) and hidden input (MAD)
    priceDisplay.innerHTML = totalPriceEuro + ' €';
    prixInput.value = totalPriceMAD;
}

// Initialize price on page load
document.addEventListener('DOMContentLoaded', function() {
    updatePrice();
});
</script>
@endsection