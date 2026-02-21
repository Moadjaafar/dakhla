import './bootstrap';
document.addEventListener('DOMContentLoaded', function() {
    // Define responsive breakpoints for different screen sizes
    var breakpoints = {
        xs: 0,      // Extra small devices (0px and up)
        sm: 375,    // Small devices (375px and up), such as small mobile screens
        md: 992,    // Medium devices (992px and up), typically tablets and small desktops
        lg: 1199    // Large devices (1199px and up), for larger desktops
    };
    
    var swiper1 = new Swiper(".hero-swiper", {
        pagination: {
            el: ".swiper-pagination",
        },
    });
    const prevSlideButton = document.querySelector(".preveise_hero_slide");
    const nextSlideButton = document.querySelector(".next_hero_slide");

    if (prevSlideButton) {
        prevSlideButton.addEventListener("click", function() {
            swiper1.slidePrev(); // Slide to the previous slide
        });
    }

    if (nextSlideButton) {
        nextSlideButton.addEventListener("click", function() {
            swiper1.slideNext(); // Slide to the next slide
        });
    }

    var swiper = new Swiper(".mySwiper", {
        effect: "cards",
        grabCursor: true,
        initialSlide: Math.floor(3 / 2),  // Set the middle slide as the initial slide (5 slides in this case)
        cardsEffect: {
            rotate: 1,  // Set global rotation angle for the stack (rotateZ)
            slideShadows: true,  // Enable shadows on the sides of the cards
            perSlideOffset: 20.25,  // Adjust offset between slides (influences translate3d X)
            perSlideRotate: 5,  // Adjust rotation of each individual slide (influences rotateZ)
            perspective: 10,  // Stronger 3D effect (influences how deep the Z translation feels)
        },
    });
    var blog_swiper = new Swiper(".blog-swiper", {
        pagination: {
            el: ".swiper-pagination",
        },
    });
    const prevSlideButtonbg = document.querySelector(".preveise_img_slide");
    const nextSlideButtonbg = document.querySelector(".next_img_slide");

    if (prevSlideButtonbg) {
        prevSlideButtonbg.addEventListener("click", function() {
            blog_swiper.slidePrev(); // Slide to the previous slide
        });
    }

    if (nextSlideButtonbg) {
        nextSlideButtonbg.addEventListener("click", function() {
            blog_swiper.slideNext(); // Slide to the next slide
        });
    }
    var swiper_blog_items = new Swiper(".linkedin_swiper", {
        spaceBetween: 30,
        slidesPerView: 'auto',
        loop: true,            // Disable looping if desired
        pagination: {
            el: ".swiper-pagination",
        },
    });
    var avis__swiper = new Swiper(".avis__swiper", {
        spaceBetween: 30,
        slidesPerView: 'auto',
        loop: true,            // Disable looping if desired
        centeredSlides: true, // Center the active slide
        initialSlide: 2, // Start with the second slide (index 1)
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: false,
        }
    });
    const prevSlideButtonavis = document.querySelector(".preveis_item");
    const nextSlideButtonavis = document.querySelector(".next_item");

    if (prevSlideButtonavis) {
        prevSlideButtonavis.addEventListener("click", function() {
            avis__swiper.slidePrev(); // Slide to the previous slide
        });
    }

    if (nextSlideButtonavis) {
        nextSlideButtonavis.addEventListener("click", function() {
            avis__swiper.slideNext(); // Slide to the next slide
        });
    }
    var offer__swiper = new Swiper(".Swiper_offers", {
        spaceBetween: 30,
        slidesPerView: 'auto',
        loop: false,            // Disable looping if desired
        centeredSlides: true, // Center the active slide
        initialSlide: 1, // Start with the second slide (index 1)
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: false,
        }
    });
    const prevSlideButtonoffer = document.querySelector(".preveise_offer_slide");
    const nextSlideButtonoffer = document.querySelector(".next_offer_slide");

    if (prevSlideButtonoffer) {
        prevSlideButtonoffer.addEventListener("click", function() {
            offer__swiper.slidePrev(); // Slide to the previous slide
        });
    }

    if (nextSlideButtonoffer) {
        nextSlideButtonoffer.addEventListener("click", function() {
            offer__swiper.slideNext(); // Slide to the next slide
        });
    }

});
$(document).ready(function () {
    const currentLang = $('html').attr('lang'); // Get current language from <html> tag
    // Capitalize only the first letter
    const formattedLang = currentLang.charAt(0).toUpperCase() + currentLang.slice(1);
    // Update the button content with the formatted language code and the dropdown arrow icon
    $('.custom-dropdown-toggle').html(`
        ${formattedLang}
        <img src="assets/images/dropdown.svg" alt="dropdown icon">
    `);
    // Toggle the dropdown menu on button click
    $('.custom-dropdown-toggle').click(function () {
        $(this).next('.custom-dropdown-menu').toggle();
        $(this).toggleClass('active_dropdown'); // Toggle the active class correctly
    });

    // Close dropdown if clicking outside
    $(document).click(function (e) {
        if (!$(e.target).closest('.custom-dropdown').length) {
            $('.custom-dropdown-menu').hide();
            $(".custom-dropdown-toggle").removeClass('active_dropdown'); // Remove the active class when clicking outside
        }
    });
});
document.querySelector('.togl_menu').addEventListener('click', function() {
    const nav = document.querySelector('.absolute_nav');
    nav.classList.toggle('visible');
});
const hideMenu = document.querySelector('.hidemenu');

if (hideMenu) {
    hideMenu.addEventListener('click', function() {
        $(".absolute_nav").removeClass('visible'); // Remove the active class when clicking
    });
}
$(document).ready(function () {
    $('.iteme_drop_').on('click', function () {
        // Toggle the visibility of the next sibling .description
        $(this).next('.description').slideToggle(300);

        // Optionally, toggle a class for active state
        $(this).toggleClass('active');
    });
});

Fancybox.bind("[data-fancybox]", {
    // Custom options (optional)
    Video: {
        autoStart: true,
    },
});
$(document).ready(function () {
    // Check if the input element exists
    if ($('.input__v').length > 0) {
        // Get today's date
        let today = new Date();

        // Add one day to today's date
        today.setDate(today.getDate() + 1);

        // Format the date as YYYY-MM-DD
        let formattedDate = today.toISOString().split('T')[0];

        // Set the value of the date input
        $('.input__v').val(formattedDate);
    }
});

$(document).ready(function () {
    // When the button is clicked
    $('.auto__submit').on('click', function () {
        // Find the form and submit it
        $('.offer__bk').submit();
    });
    // Check if the offer name element and hidden input exist
    if ($('.offer__nm').length > 0 && $('.hide__ofnm').length > 0) {
        // Get the text from the h2 element
        const offerName = $('.offer__nm').text();
        // Set the hidden input's value to the offer name
        $('.hide__ofnm').val(offerName);
    }
});

// function showModalWithExpiry() {
//     $('#welcome_modal').modal('show');

//     const now = new Date().getTime();
//     localStorage.setItem('modalShownTime', now);
// }

// const modalShownTime = localStorage.getItem('modalShownTime');

// if (modalShownTime) {
//     const timeElapsed = (new Date().getTime() - modalShownTime) / 1000;
//     if (timeElapsed > 3600) {
//         showModalWithExpiry();
//     }
// } else {
//     showModalWithExpiry();
// }

