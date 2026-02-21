@extends('layouts.layout')
@section('content')
    <section class="container_hero">
        <button class="swipe_btn left  preveise_hero_slide"  aria-label="previous"><img src="assets/images/preveis.svg" alt="previous slide"></button>
        <button class="swipe_btn right  next_hero_slide"  aria-label="next"><img src="assets/images/next.svg" alt="next slide"></button>
        <div class="hero-swiper ">
            <div class="swiper-wrapper">
                <div class="hero_section swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-9 col-12">
                                
                                <h1 class="hero_title">{{ __('messages.hero_title') }}<span>{{ __('messages.hero_title_span') }}</span></h1>
                                <p class="p_max_xl">{{ __('messages.hero_title_paragraphe') }}</p>
                                <a href="{{ route('offers_lits') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-buttonv2 custom-m px-sm-3" tabindex="0">
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
                                <div class="mt-3">
                                    <a class="hero_contact" href="https://wa.me/0600127223">Phone: (+212) 600 127 223</a>
                                    <a class="hero_contact" href="mailto:booking@dakhlabeyondadventure.com">Email: booking@dakhlabeyondadventure.com</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3 col-12 mt-lg-0 mt-md-0 mt-5">
                                <div class="d-flex align-items-center justify-content-center h-100">                        
                                    <a href="assets/images/Discover the Breathtaking Beaches of Dakhla.mp4" 
                                    data-fancybox 
                                    data-caption="Discover the Breathtaking Beaches of Dakhla" 
                                    class="play_btn">
                                     <img src="assets/images/Group 2.svg" alt="Play Video">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="hero_section swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-9 col-12">
                                <h2 class="hero_title">{{ __('messages.title2') }}</h2>
                                <a href="{{ route('offers_lits') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-buttonv2 custom-m px-sm-3" tabindex="0">
                                    <p class="m-0">Book now</p>
                                    <span class="custom-arrow position-relative ">
                                        <svg class="arr1 position-absolute" xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
                                            <path d="M12.1425 8.71411L15.8567 4.99983L12.1425 1.28554" stroke="white" stroke-width="1.39286" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <svg class="arr2 position-absolute" xmlns="http://www.w3.org/2000/svg" width="26" height="10" viewBox="0 0 26 10" fill="none">
                                            <path d="M12.1425 8.71411L15.8567 4.99983L12.1425 1.28554" stroke="white" stroke-width="1.39286" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                                <div class="mt-3">
                                    <a class="hero_contact" href="https://wa.me/0600127223">Phone: (+212) 600127223</a>
                                    <a class="hero_contact" href="mailto:booking@dakhlabeyondadventure.com">Email: booking@dakhlabeyondadventure.com</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3 col-12 mt-lg-0 mt-md-0 mt-5">
                                <div class="d-flex align-items-center justify-content-center h-100">                        
                                    <button class="play_btn" aria-label="play video"><img src="assets/images/Group 2.svg" alt=""></button>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="swiper-pagination "></div>
        </div>
    </section>
    <section class="sahara_section">
        <div class="container">
            <div class="row flex-lg-row flex-column-reverse">
                <div class="col-lg-6 col-12 py-5">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide swiper_iteme"></div>
                          <div class="swiper-slide  swiper_iteme"></div>
                          <div class="swiper-slide  swiper_iteme"></div>
                        </div>
                        <div class="p_swip_cards pt-5">
                            <p>{{ __('messages.swiptext') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 d-flex align-items-center">
                    <div>
                        <h2>{{ __('messages.title2') }}</h2>
                        <p class="light">{{ __('messages.breaf2_1') }}</p>
                        <p class="light">{{ __('messages.breaf2_2') }}</p>
                        <p class="strong">{{ __('messages.breaf2_3') }}</p>
                        <a href="{{ route('about_us') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
                            <p class="m-0">{{ __('messages.About_us') }}</p>
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
        </div>
    </section>
    <section class="col_items py-5">
        <div class="container">
            <div class="section_header d-lg-flex d-md-flex d-block align-items-center justify-content-between">
                <h2 class="cr_color p_max_xl">{{ __('messages.title3') }}</h2>
                <p class="cr_black p_max_md">{{ __('messages.breaf3_1') }}</p>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <div class="col_card">
                        <img src="assets/images/logo_notxt.svg" alt="dakhla beyond adventure">
                        <p>{{ __('messages.col_1') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <div class="col_card">
                        <img src="assets/images/logo_notxt.svg" alt="next">
                        <p>{{ __('messages.col_2') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 mb-3">
                    <div class="col_card_lg">
                        <div >
                            <img src="assets/images/logo_notxt.svg" alt="next">
                        </div>
                        <div class="div_border">
                            <p>{{ __('messages.col_3') }}
                            </p>
                            <a href="{{ route('offers_lits') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-buttonv2 custom-m px-sm-3" tabindex="0">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sea_section d-flex align-items-center">
        <div class="container column-flex">
            <img src="assets/images/our_offers_ani.svg" class="my-4" alt="dakhla beyond adventure">
                                  
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
                        <img src="assets/images/offer_swip1.png" alt="Explorez les vagues de Dakhla avec nos sessions de surf sur-mesure">
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
                        <img src="assets/images/offer_swip2.png" alt="Excursion d'une Journée à Dakhla en 4x4">
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
                        <img src="assets/images/offer_swip3.png" alt="Excursion d'une Journée à Aarich et au Village Sahraoui Dakhla">
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
                        <img src="assets/images/offer_swip4.png" alt="VOYAGE EN CATAMARAN DANS LA GRANDE BAIE DE DAKHLA">
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
                        <img src="assets/images/offer_swip5.png" alt="Balade à dos de chameau dans le désert de Dakhla">
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
                        <img src="assets/images/offer_swip6.png" alt="Excursion en Quad dans le Désert de Dakhla">
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
                        <img src="assets/images/card_1.png" alt="Brochure d’Excursion - Demi-Journée avec Voiture 4x4 et Chauffeur-Guide">
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
        <button class="swipe_btnn left preveise_offer_slide " aria-label="previous"><img src="assets/images/swipleft.svg" alt=""></button>
        <button class="swipe_btnn right next_offer_slide" aria-label="next"><img src="assets/images/swipright.svg" alt=""></button>
    </div>
    <section class="blog_content py-5">
        <button class="swipe_btn left preveise_img_slide "><img src="assets/images/swipleft.svg" alt=""></button>
        <button class="swipe_btn right next_img_slide"><img src="assets/images/swipright.svg" alt=""></button>
        <div class="container">
            <div class="section_header d-lg-flex d-md-flex d-block align-items-start justify-content-between mb-5">
                <div>
                    <h2 class="cr_color p_max_xl">{{ __('messages.key_eec67327f7365deb4f68f04fc9e41da4') }}</h2>
                </div>
                <div>
                    <p class="cr_black p_max_md">{{ __('messages.key_612706553322641a8b7f8a4bd86c0431') }}</p>
                    <a href="{{ route('offers_lits') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
                        <p class="m-0">{{ __('messages.key_fc46f6383e012278263fd788d9b198ad') }}                            </p>
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
            <div class="blog-swiper ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide blog_item">
                    <img src="assets/images/side5.png" class="w-100" alt="dakhla excursions">
                    </div>
                    <div class="swiper-slide blog_item">
                        <img src="assets/images/side4.png" class="w-100" alt="dakhla excursions">
                    </div>
                    <div class="swiper-slide blog_item">
                        <img src="assets/images/side3.png" class="w-100" alt="dakhla excursions">
                    </div>
                    <div class="swiper-slide blog_item">
                        <img src="assets/images/side2.png" class="w-100" alt="dakhla excursions">
                    </div>
                    <div class="swiper-slide blog_item">
                        <img src="assets/images/side1.png" class="w-100" alt="dakhla excursions">
                    </div>
                    <div class="swiper-slide blog_item">
                        <img src="assets/images/bg_hero.jpg" class="w-100" alt="dakhla excursions">
                    </div>
                </div>
                <div class="swiper-pagination position__v"></div>
            </div>
            <div class="mt-5 text-center">
                <h2 class="cr_color">{{ __('messages.key_00344f129a62e72d34c72cefa642698e') }}</h2>
                <p class="cr_color p_max_xl mx-auto">{{ __('messages.key_967f77998f7a9ddf97af2b9449a5f272') }}</p>
            </div>
            <div class="linkedin_news_cnt my-5">
                <div class="d-flex align-items-center justify-content-between me-2 me-md-5  mb-4">
                    <h2 class="our_services_title"></h2>
                    <div class="center-flex">
                        <a href="{{ route('offers_lits') }}" class="btn_read_more"></a>
                    </div>
                </div>
                <div class="swiper linkedin_swiper">
                    <div class="swiper-wrapper">
                        <a href="{{ route('article.dakhla') }}" class="text-dark  news_card swiper-slide">
                            <div class="news__post">
                                <div class="news__post--top">
                                    <span>{{ __('messages.blog_title1') }}</span>
                                    <h4>
                                        {{ __('messages.blog_breaf1') }}

                                    </h4>
                                </div>
                                <div class="news__post--bottom">
                                    <div class="news__post--date">
                                        <img src="assets/images/calendar.svg" alt="">
                                        <span>05/01/2025</span>
                                    </div>
                                    <div class="news__post--vedio">
                                        <img src="assets/images/blog_img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        <a href="{{ route('article_two.dakhla') }}" class="text-dark  news_card swiper-slide">
                            <div class="news__post">
                                <div class="news__post--top">
                                    <span>{{ __('messages.blog_title2') }}</span>
                                    <h4>
                                        {{ __('messages.blog_breaf2') }}

                                    </h4>
                                </div>
                                <div class="news__post--bottom">
                                    <div class="news__post--date">
                                        <img src="assets/images/calendar.svg" alt="">
                                        <span>22/01/2025</span>
                                    </div>
                                    <div class="news__post--vedio">
                                        <img src="assets/images/Frame427321440.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('article_three.dakhla') }}" class="text-dark  news_card swiper-slide">
                            <div class="news__post">
                                <div class="news__post--top">
                                    <span>{{ __('messages.blog_title3') }}</span>
                                    <h4>
                                        {{ __('messages.blog_breaf3') }}

                                    </h4>
                                </div>
                                <div class="news__post--bottom">
                                    <div class="news__post--date">
                                        <img src="assets/images/calendar.svg" alt="">
                                        <span>25/01/2025</span>
                                    </div>
                                    <div class="news__post--vedio">
                                        <img src="assets/images/blog_three.png" alt="Dakhla Beyond Adventure : Tour en Quad dans le Désert de Dakhla">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('article_four.dakhla') }}" class="text-dark  news_card swiper-slide">
                            <div class="news__post">
                                <div class="news__post--top">
                                    <span>{{ __('messages.blog_title4') }}</span>
                                    <h4>
                                        {{ __('messages.titleblog41') }}

                                    </h4>
                                </div>
                                <div class="news__post--bottom">
                                    <div class="news__post--date">
                                        <img src="assets/images/calendar.svg" alt="">
                                        <span>08/02/2025</span>
                                    </div>
                                    <div class="news__post--vedio">
                                        <img src="assets/images/blog4.jpeg" alt="Dakhla Beyond Adventure : Tour en Quad dans le Désert de Dakhla">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-scrollbar scrol_bar_linkedin me-5"></div>
                </div>
            </div>
        </div>
    </section>

  <!-- Modal -->
  <div class="modal fade reservation__md" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  rev___cnt">
      <div class="modal-content">
        <div class="modal-body py-5 px-5 text-center">
            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            <img src="assets/images/Frame427321793.png" class="modal_icon" alt="">
            <h1 class="titl_modal mt-3">Reservation Confirmed! ðŸŽ‰</h1>
            <p class="cr_color">Your booking has been successfully completed. You will receive a confirmation email shortly. Thank you!"</p>
        </div>
      </div>
    </div>
  </div>
  @if(session('showModal'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
        modal.show();
    });
</script>
@endif
@endsection