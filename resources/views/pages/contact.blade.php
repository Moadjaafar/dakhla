@extends('layouts.layout')
@section('content')
    <section class="page_title">
        <div class="content_breadcump">
            <div class="shape_"></div>
            <h1>{{ __('messages.Contact') }}</h1>
        </div>
    </section>
    <section class="reservation__cnt">
        <div class="container  ">
            <div class="row mx-auto revers">
                <div class="col-lg-5 col-md-5 col-12 mt-lg-5 mt-md-5 mb-5">
                    <div class="d-flex flex-column info_iteme mb-4">
                        <span>{{ __('messages.E-mail') }} :</span>
                        <a href="mailto:booking@dakhlabeyondadventure.com">Email: booking@dakhlabeyondadventure.com</a>
                    </div>
                    <div class="d-flex flex-column info_iteme mb-4">
                        <span>{{ __('messages.Address') }} :</span>
                        <a href="#">{{ __('messages.Address_title') }}</a>
                    </div>
                    <div class="d-flex flex-column info_iteme mb-4">
                        <span>{{ __('messages.Phone_Number') }} :</span>
                        <a href="https://wa.me/0600127223">Phone: (+212) 600 127 223</a>
                    </div>
                    <div class="reseaux__sociaux">
                        <span>{{ __('messages.Follow_us') }}</span>
                        <a target="_blank" href="https://www.instagram.com/dakhla_beyond_adventure?igsh=YXl5ZDV1bzR2ZXB6&utm_source=qr" aria-label="Follow us on LinkedIn">
                            <img src="assets/images/instagram1.svg" alt="instagram dakhla beyond adventure">
                        </a>
                        <a target="_blank" href="https://www.instagram.com/dakhla_beyond_adventure?igsh=YXl5ZDV1bzR2ZXB6&utm_source=qr" aria-label="Follow us on LinkedIn">
                            <img src="assets/images/facebook_icon.svg" alt="instagram dakhla beyond adventure">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-12 reservation__details p-lg-5 py-5 px-md-4 px-3">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf

                        <h2>{{ __('messages.Contact_Details') }}</h2>
                        <p class="description">{{ __('messages.Contact_p') }}</p>
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Error Message Alert -->
                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>

                            </div>
                        @endif
                        <div class="row w-100">
                            <div class="col-6 mb-2">
                                <label for="first_name">{{ __('messages.First_Name') }}</label>
                                <input type="text" name="first_name" id="first_name" placeholder="First Name" required>
                            </div>
                            <div class="col-6  mb-2">
                                <label for="last_name">{{ __('messages.Last_Name') }}</label>
                                <input type="text" name="last_name" id="last_name" placeholder="Last Name" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="email">{{ __('messages.Email') }} *</label>
                                <input type="email" name="email" id="email" placeholder="Email *" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="phone">{{ __('messages.Phone_Number') }} *</label>
                                <input type="text" name="phone" id="phone" placeholder="Phone Number *" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="message">{{ __('messages.Message') }}</label>
                                <textarea name="message" id="message" required></textarea>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="me-auto vrg_btn align-items-center ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
                                <p class="m-0">{{ __('messages.Send') }}</p>
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
    </section>

@endsection