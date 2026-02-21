<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AdminReservationMail;
use App\Mail\ClientReservationMail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class MainController extends Controller
{
    public function offers_list_view (){
        return view('pages.offers');
    }
    public function about_us_view (){
        return view('pages.about_us');
    }
    public function contact_us_view (){
        return view('pages.contact');
    }
    public function blog_view (){
        return view('pages.blog');
    }

    public function excursionDakhla4x4()
    {
        return view('offers.excursion_dakhla_4x4');
    }

    public function brochureExcursionDemiJournee()
    {
        return view('offers.brochure_excursion_demi_journee');
    }

    public function excursionAarichVillageSahraoui()
    {
        return view('offers.excursion_aarich_village_sahraoui');
    }

    public function voyageCatamaranGrandeBaie()
    {
        return view('offers.voyage_catamaran_grande_baie');
    }

    public function baladeDosChameauDesertDakhla()
    {
        return view('offers.balade_dos_chameau_desert_dakhla');
    }

    public function excursionQuadDesertDakhla()
    {
        return view('offers.excursion_quad_desert_dakhla');
    }

    public function surfSessionsDakhla()
    {
        return view('offers.surf_sessions_dakhla');
    }
    public function resevation_form(Request $request)
    {
        // Validate the inputs
        $validatedData = $request->validate([
            'prix' => 'required|numeric',
            'name' => 'required|string|max:255',
            'img_src' => 'required|string',
            'nbr_person' => 'required|string',
            'date_rdv' => 'required|date',
        ]);
        // Pass data to the reservation view
        return view('pages.reservation', ['data' => $validatedData]);
    }
    public function store(Request $request)
    {
        // Format the date in both formats
        $dateFormatted1 = Carbon::now()->format('M d, Y');  // Jan 01, 2025

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'name' => 'required|string',
            'prix' => 'required|numeric',
            'img_src' => 'required|string',
            'nbr_person' => 'required|string',
            'date_rdv' => 'required|date',
        ]);

        $prix = $validatedData['prix'] == '000' ? '-- --' : $validatedData['prix'];

        // Prepare the data to pass to the email
        $emailData = [
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'name' => $validatedData['name'],
            'prix' => $prix,  // Use the updated value of prix
            'img_src' => $validatedData['img_src'],
            'nbr_person' => $validatedData['nbr_person'],
            'date_rdv' => $validatedData['date_rdv'],
            'dateFormatted1' => $dateFormatted1,
        ];
        try {
         Mail::to('contact.larbielbaze@gmail.com')->send(new AdminReservationMail($emailData));
         Mail::to('booking@dakhlabeyondadventure.com')->send(new AdminReservationMail($emailData));
            Mail::to($validatedData['email'])->send(new ClientReservationMail($emailData));
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to send email. Please try again.']);
        }
        // Handle the validated data, e.g., save to database or redirect
        return redirect()->route('home')->with('showModal', true);
    }

    public function showArticle()
    {
        return view('articles.explore_dakhla'); // Create this Blade file for the article content
    }
    public function showArticle_two()
    {
        return view('articles.excursion_dakhla'); // Create this Blade file for the article content
    }

    public function showArticle_three()
    {
        return view('articles.quad_dakhla'); // Create this Blade file for the article content
    }
    public function showArticle_four()
    {
        return view('articles.dakhla_resturent'); // Create this Blade file for the article content
    }
    public function contact__form(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::to('booking@dakhlabeyondadventure.com')->send(new ContactFormMail($validatedData));
        Mail::to('contact.larbielbaze@gmail.com')->send(new ContactFormMail($validatedData));

        // Redirect back with success message
        return back()->with('success', 'Thank you for your message! We will get back to you shortly.');
    }

}
