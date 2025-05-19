<?php

namespace App\Http\Controllers\home;

use App\Events\FreeTrialApply;
use App\Models\Faq;
use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\Newsletter;
use App\Models\PricePlan;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\FreeTrialEmail;
use App\Models\FreeTrailApply;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function home()
    {
        $blogs = Blog::with('blogImage')->get();
        return view('home.index', compact('blogs'));
    }

    public function aboutUs()
    {
        $faqs=Faq::where('type','about-us-page')->get();
        $blogs = Blog::with('blogImage')->get();
        return view('home.about_us',compact('faqs','blogs'));
    }

    public function contactUs()
    {
        return view('home.contact_us');
    }

    public function downloads()
    {
        return view('home.download');
    }

    public function contactStore(ContactRequest $request)
    {
        $validatedData = $request->validated();

        $contact = ContactUs::create($validatedData);


        if ($contact) {

            return response('OK', 200);
        } else {
            return response('Error', 500);

        }
    }
    public function newsletterStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $existingNewsletter = Newsletter::where('email', $request->email)->first();

    if ($existingNewsletter) {
        Alert::info('Already Subscribed', 'You have already subscribed to our newsletter.');
        return redirect()->back();
    }
        $newsletter = Newsletter::create([

            'email' => $request->email,
            'is_active' => 1,
        ]);

        if ($newsletter) {
            Alert::success('Subscription Successful', 'You have been subscribed to our newsletter. Please check your email for a confirmation.');
            return redirect()->back();
        } else {
            Alert::error('Subscription Failed', 'There was an issue subscribing to the newsletter. Please try again later.');
            return redirect()->back();
        }
    }

    public function pricing()
    {
        $PricePlan = PricePlan::latest()->get();
        return view('home.pricing',compact('PricePlan'));
    }
    public function security()
    {
        $faqs = Faq::orderBy('created_at', 'desc')->take(3)->get();
        $testimonial=Testimonial::get();
        $blogs = Blog::with('blogImage')->get();
        return view('home.company.security',compact('testimonial','faqs','blogs'));
    }
    public function partner()
    {
        $faqs = Faq::orderBy('created_at', 'desc')->take(3)->get();
        $testimonial=Testimonial::get();
        $blogs = Blog::with('blogImage')->get();
        return view('home.company.partner',compact('testimonial','faqs','blogs'));
    }
    public function whyUsPage()
    {
        $faqs = Faq::where('type','why-us-page')->get();
        $testimonial=Testimonial::get();
        $blogs = Blog::with('blogImage')->get();
        return view('home.company.whyUs',compact('testimonial','faqs','blogs'));
    }
    public function faq()
    {
        $faqs = Faq::orderBy('created_at', 'desc')->take(3)->get();
        $testimonial=Testimonial::get();
        $blogs = Blog::with('blogImage')->get();
        return view('home.company.faq',compact('testimonial','faqs','blogs'));
    }
    public function testimonial()
    {
        $faqs = Faq::orderBy('created_at', 'desc')->take(3)->get();
        $testimonial=Testimonial::get();
        $blogs = Blog::with('blogImage')->get();
        return view('home.company.testimonial',compact('testimonial','faqs','blogs'));
    }
    public function applyNow(){
        return view('home.apply_now');
    }
    public function applyNowStore(Request $request)
    {
        $validatedData=$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'business_name' => 'required|string|max:255',
            'application_detail' => 'required|string|max:5000',
            'license_key' => 'required|string|max:5000',
            'number_users' => 'required|integer|min:1',
            'username' => 'required|string|max:255',
            'aditional_comment' => 'sometimes|string|max:1000',
            'agreement' => 'required|accepted',
        ]);
        $freeTrailApply = FreeTrailApply::create($validatedData);
         FreeTrialApply::dispatch($freeTrailApply); 
         Mail::send(new FreeTrialEmail($formData));
        Alert::success('Success', 'Your application has been submitted successfully.');
        return redirect()->back();
    }
}
