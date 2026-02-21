@extends('layouts.layout')
@section('content')
    <section class="page_title">
        <div class="content_breadcump">
            <div class="shape_"></div>
            <h1>{{ __('messages.Blog') }}</h1>
        </div>
    </section>
    <section class="py-5">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-4 col-12 search__col mb-3">
                    <div class="item_">
                        <label for="">{{ __('messages.Search') }}</label>
                        <div class="position-relative input_s__cnt">
                            <input type="text" placeholder="Search articles">
                            <img src="assets/images/search.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <a href="{{ route('article.dakhla') }}" class="text-dark  news_card ">
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
                                            <img src="assets/images/blog_img.png" alt="Découvrez Dakhla en Demi-Journée : Une Excursion en 4x4 avec Chauffeur-Guide">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <a href="{{ route('article_two.dakhla') }}" class="text-dark  news_card ">
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
                                            <img src="assets/images/Frame427321440.png" alt="Découvrez Dakhla en Demi-Journée : Une Excursion en 4x4 avec Chauffeur-Guide">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <a href="{{ route('article_three.dakhla') }}" class="text-dark  news_card ">
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
                            
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <a href="{{ route('article_four.dakhla') }}" class="text-dark  news_card ">
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
                    </div>

                </div>
            </div>        
        </div>
    </section>

@endsection