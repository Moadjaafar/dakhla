@extends('layouts.layout')
@section('content')
    <section class="page_title">
        <div class="content_breadcump">
            <div class="shape_"></div>
            <h1>Offers</h1>
        </div>
    </section>
    <section class="listing__cnt">
        <div class="container py-5">
            <div class="offer__iteme p-lg-5 p-md-5 p-4 mb-5 ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-4 d-flex align-items-center">
                        <div>
                            <h2>Excursion d'une Journée à Dakhla en 4x4 </h2>
                            <p class="offer_breaf">Vivez une journée inoubliable à Dakhla, où la magie du désert rencontre l'immensité de l'océan. Embarquez pour une aventure riche en découvertes naturelles et culturelles, dans un cadre unique entre terre et mer.
                            </p>
                            <div>
                                <a href="{{ route('offer.dakhla_4x4') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
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
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 d-flex align-items-center">
                        <img src="assets/images/offer.png" class="offer_img" alt="Excursion d'une Journée à Dakhla en 4x4 ">
                    </div>
                </div>
            </div>
            <div class="offer__iteme  p-lg-5 p-md-5 p-4 mb-5 ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 d-flex align-items-center">
                        <img src="assets/images/excursion-dakhla-4x4_4.jpeg" class="offer_img" alt="Brochure d’Excursion - Demi-Journée avec Voiture 4x4 et Chauffeur-Guide Dakhla">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mt-4  d-flex align-items-center">
                        <div>
                            <h2>Brochure d’Excursion - Demi-Journée avec Voiture 4x4 et Chauffeur-Guide
                            </h2>
                            <p class="offer_breaf">Découvrez cette merveille naturelle nichée au cœur du lagon de Dakhla. Promenez-vous sur cette étendue de sable immaculée et profitez d’un panorama à couper le souffle sur les eaux turquoise.
                            </p>
                            <div>
                                <a href="{{ route('offer.brochure_demi_journee') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
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
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="offer__iteme  p-lg-5 p-md-5 p-4 mb-5 ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 d-flex align-items-center">
                        <img src="assets/images/offer4.png" class="offer_img" alt="VOYAGE EN CATAMARAN DANS LA GRANDE BAIE DE DAKHLA">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mt-4 d-flex align-items-center">
                        <div>
                            <h2>VOYAGE EN CATAMARAN DANS LA GRANDE BAIE DE DAKHLA                                 </h2>
                            <p class="offer_breaf">Profitez de ce voyage en Catamaran pour découvrir la grande baie de Dakhla et sa faune comme les flamands roses et les dauphins.
                            </p>
                            <div>
                                <a href="{{ route('offer.catamaran_grande_baie') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
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
                            </div>
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="offer__iteme  p-lg-5 p-md-5 p-4 mb-5 ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-4 d-flex align-items-center">
                        <div>
                            <h2>Balade à dos de chameau dans le désert de Dakhla
                            </h2>
                            <p class="offer_breaf">Plongez au cœur du désert marocain lors d’une expérience unique : une balade d’une heure à dos de chameau. Accompagnés d’un guide spécialisé, découvrez les paysages enchanteurs des dunes de Dakhla, où le calme et la beauté de la nature désert et mer vous transporteront hors du temps.
                            </p>
                            <div>
                                <a href="{{ route('offer.dos_chameau_desert') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
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
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 d-flex align-items-center">
                        <img src="assets/images/experince81.jpeg" class="offer_img" alt="Balade à dos de chameau dans le désert de Dakhla">
                    </div>
                </div>
            </div>
            <div class="offer__iteme  p-lg-5 p-md-5 p-4 mb-5 ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 d-flex align-items-center">
                        <img src="assets/images/experince5.jpeg" class="offer_img" alt="Excursion en Quad dans le Désert de Dakhla">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mt-4 d-flex align-items-center">
                        <div>
                            <h2>Excursion en Quad dans le Désert de Dakhla
                            </h2>
                            <p class="offer_breaf">Vivez une aventure unique dans le désert de Dakhla, entre dunes dorées et océan Atlantique !
                            </p>
                            <div>
                                <a href="{{ route('offer.quad_desert') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
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
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="offer__iteme  p-lg-5 p-md-5 p-4 mb-5 ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-4 d-flex align-items-center">
                        <div>
                            <h2>Explorez les vagues de Dakhla avec nos sessions de surf sur-mesure
                            </h2>
                            <p class="offer_breaf">Découvrez l'un des meilleurs spots de surf au monde avec nos sessions adaptées à tous les niveaux, du débutant au surfeur confirmé. Que vous ayez votre propre matériel ou que vous souhaitiez louer le nôtre, nous organisons des expériences entièrement personnalisées en fonction de vos besoins et de vos envies.
                            </p>
                            <div>
                                <a href="{{ route('offer.surf_sessions') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
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
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 d-flex align-items-center">
                        <img src="assets/images/offer7.png" class="offer_img" alt="Explorez les vagues de Dakhla avec nos sessions de surf sur-mesure">
                    </div>
                </div>
            </div>
            <div class="offer__iteme  p-lg-5 p-md-5 p-4 mb-5 ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 d-flex align-items-center">
                        <img src="assets/images/DesertNightDakhlaBivouacImlili.jpeg" class="offer_img" alt="Nuit Désert Dakhla – Bivouac Imlili">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mt-4 d-flex align-items-center">
                        <div>
                            <h2>{{ __('messages.bivouac_breadcrumb') }}</h2>
                            <p class="offer_breaf">{{ __('messages.bivouac_offer_brief') }}
                            </p>
                            <div>
                                <a href="{{ route('offer.bivouac_imlili') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offer__iteme  p-lg-5 p-md-5 p-4 mb-5 ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-4 d-flex align-items-center">
                        <div>
                            <h2>{{ __('messages.sejour_breadcrumb') }}</h2>
                            <p class="offer_breaf">{{ __('messages.sejour_description') }}
                            </p>
                            <div>
                                <a href="{{ route('offer.sejour_desert') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 d-flex align-items-center">
                        <img src="assets/images/DesertNightDakhlaBivouacImlili.jpeg" class="offer_img" alt="Séjour Désert Dakhla Experience">
                    </div>
                </div>
            </div>
            <div class="offer__iteme  p-lg-5 p-md-5 p-4 mb-5 ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 d-flex align-items-center">
                        <img src="assets/images/excursion-dakhla-4x4_4.jpeg" class="offer_img" alt="White Dune Dakhla Sunset Tour">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mt-4 d-flex align-items-center">
                        <div>
                            <h2>{{ __('messages.whitedune_breadcrumb') }}</h2>
                            <p class="offer_breaf">{{ __('messages.whitedune_offer_brief') }}
                            </p>
                            <div>
                                <a href="{{ route('offer.white_dune_sunset') }}" class="me-auto ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection