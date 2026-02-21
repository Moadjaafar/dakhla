<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LangController;
use App\Http\Middleware\Localization;



Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/offers', [MainController::class, 'offers_list_view'])->name('offers_lits');
Route::get('/About-us', [MainController::class, 'about_us_view'])->name('about_us');
Route::get('/Blog', [MainController::class, 'blog_view'])->name('blog');
Route::get('/Contact-us', [MainController::class, 'contact_us_view'])->name('contact_us');

Route::get('/excursion-dakhla-4x4', [MainController::class, 'excursionDakhla4x4'])->name('offer.dakhla_4x4');
Route::get('/brochure-excursion-demi-journee-4x4', [MainController::class, 'brochureExcursionDemiJournee'])->name('offer.brochure_demi_journee');
Route::get('/excursion-aarich-village-sahraoui', [MainController::class, 'excursionAarichVillageSahraoui'])->name('offer.aarich_village_sahraoui');
Route::get('/voyage-en-catamaran-dans-grande-baie', [MainController::class, 'voyageCatamaranGrandeBaie'])->name('offer.catamaran_grande_baie');
Route::get('/balade-dos-chameau-desert-dakhla', [MainController::class, 'baladeDosChameauDesertDakhla'])->name('offer.dos_chameau_desert');
Route::get('/excursion-quad-desert-dakhla', [MainController::class, 'excursionQuadDesertDakhla'])->name('offer.quad_desert');
Route::get('/surf-sessions-dakhla', [MainController::class, 'surfSessionsDakhla'])->name('offer.surf_sessions');

Route::post('/reservation', [MainController::class, 'resevation_form'])->name('reservation.store');
Route::post('/reservation-send', [MainController::class, 'store'])->name('reservation.send');
Route::get('local/{lang}', [LangController::class, 'setlocale']);


Route::post('/contact', [MainController::class, 'contact__form'])->name('contact.submit');

Route::get('/explore-dakhla', [MainController::class, 'showArticle'])->name('article.dakhla');
Route::get('/decouvrez-dakhla-Excursion', [MainController::class, 'showArticle_two'])->name('article_two.dakhla');
Route::get('/decouvrez-dakhla-Quad', [MainController::class, 'showArticle_three'])->name('article_three.dakhla');
Route::get('/decouvrez-dakhla-restaurant', [MainController::class, 'showArticle_four'])->name('article_four.dakhla');
