@extends('layouts.layout')
@section('content')
    <section class="page_title">
        <div class="content_breadcump">
            <div class="shape_"></div>
            <h1>Reservation form</h1>
        </div>
    </section>
    <section class="reservation__cnt">
        <div class="container reservation__details p-5">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-7 col-md-6 col-12">
                    <form id="bookingForm" class="booking__form" action="{{ route('reservation.send') }}" method="POST">
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
                        <h2>Contact Details</h2>
                        <p class="description">We'll use this information to send you confirmation and updates about your booking.</p>
                        <div class="row w-100">
                            <div class="col-6 mb-2">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" placeholder="First Name" required>
                            </div>
                            <div class="col-6  mb-2">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" placeholder="Last Name" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="">Email *</label>
                                <input type="text" name="email" placeholder="Email *" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="">Phone Number *</label>
                                <input type="text" name="phone" placeholder="Phone Number *" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="">Country (Optional)</label>
                                <select name="country" class="form-select country_select">
                                    <option value="">-- Select Country --</option>
                                </select>
                            </div>
                            <input type="hidden" name="name" value="{{ $data['name'] }}">
                            <input type="hidden" name="prix" value="{{ $data['prix'] }}">
                            <input type="hidden" name="img_src" value="{{ $data['img_src'] }}">

                        </div>
                        <div class="mt-4">
                            <button type="submit" class="me-auto vrg_btn align-items-center ms-auto ms-sm-0 custom-button custom-m px-sm-3" tabindex="0">
                                <p class="m-0">Book now</p>
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
                <div class="col-lg-5 col-md-6 col-12 mt-lg-0 mt-md-0 mt-4">
                    <div class="book_cnt p-lg-5 p-md-4 p-4">
                        <div class="row mb-3">
                            <div class="col-6 ps-0 pe-2 d-flex align-items-center">
                                <h3>{{ $data['name'] }}</h3>
                            </div>
                            <div class="col-6  ps-2 pe-0">
                                <img src="{{ $data['img_src'] }}" class="w-100" alt="">
                            </div>
                        </div>
                        <p class="cr_color ">Select date and travelers</p>
                        <div class="d-flex align-items-center justify-content-between py-3 border___v">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/images/group.svg" class="" alt="">
                                <span class="nbr_persen">Travelers</span>
                            </div>
                            <div>
                                <select name="nbr_person">
                                    <option value="01" @selected($data['nbr_person'] == "01")>01</option>
                                    <option value="02" @selected($data['nbr_person'] == "02")>02</option>
                                    <option value="03" @selected($data['nbr_person'] == "03")>03</option>
                                    <option value="04" @selected($data['nbr_person'] == "04")>04</option>
                                    <option value="+4" @selected($data['nbr_person'] == "+4")>+4</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between py-3 border___v">
                            <div class="d-flex align-items-center gap-2">
                                <img src="assets/images/date.svg" class="" alt="">
                                <span class="nbr_persen">Date</span>
                            </div>
                            <div>
                                <input type="date" value="{{ $data['date_rdv'] }}" class="input__v2" name="date_rdv" id="">
                            </div>
                        </div>
                        <div class="d-flex mb-3 align-items-center justify-content-between mt-4">
                            <span class="price_tag">Total</span>
                            <span class="price_span">{{ $data['prix'] === '000' ? '-- --' : $data['prix'] }} MAD</span>
                        </div>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </section>

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const countrySelect = document.querySelector(".country_select");
    if (!countrySelect) return;
    const countries = [
        "Afghanistan","Albania","Algeria","Andorra","Angola","Argentina","Armenia","Australia","Austria","Azerbaijan",
        "Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bhutan","Bolivia",
        "Bosnia and Herzegovina","Botswana","Brazil","Brunei","Bulgaria","Burkina Faso","Burundi","Cabo Verde",
        "Cambodia","Cameroon","Canada","Central African Republic","Chad","Chile","China","Colombia","Comoros",
        "Congo","Costa Rica","Croatia","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominican Republic",
        "Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Eswatini","Ethiopia",
        "Fiji","Finland","France","Gabon","Gambia","Georgia","Germany","Ghana","Greece","Guatemala","Guinea",
        "Guinea-Bissau","Guyana","Haiti","Honduras","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland",
        "Israel","Italy","Ivory Coast","Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyzstan",
        "Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg",
        "Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova",
        "Monaco","Mongolia","Montenegro","Morocco","Mozambique","Myanmar","Namibia","Nepal","Netherlands",
        "New Zealand","Nicaragua","Niger","Nigeria","North Korea","North Macedonia","Norway","Oman",
        "Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal",
        "Qatar","Romania","Russia","Rwanda","Saudi Arabia","Senegal","Serbia","Sierra Leone","Singapore",
        "Slovakia","Slovenia","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","Sudan",
        "Suriname","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Togo",
        "Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Uganda","Ukraine","United Arab Emirates",
        "United Kingdom","United States","Uruguay","Uzbekistan","Venezuela","Vietnam","Yemen","Zambia","Zimbabwe"
    ];
    countries.forEach(function(country) {
        const option = document.createElement("option");
        option.value = country;
        option.textContent = country;
        countrySelect.appendChild(option);
    });
});
</script>
@endpush