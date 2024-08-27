<?php

namespace App\Http\Controllers\home;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\Newsletter;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
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
        return view('home.about_us');
    }

    public function contactUs()
    {
        return view('home.contact_us');
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
        return view('home.pricing');
    }
    public function security()
    {
        $faqs = Faq::get();
        $testimonial=Testimonial::get();
        $blogs = Blog::with('blogImage')->get();
        return view('home.company.security',compact('testimonial','faqs','blogs'));
    }
    public function partner()
    {
        $faqs = Faq::get();
        $testimonial=Testimonial::get();
        $blogs = Blog::with('blogImage')->get();
        return view('home.company.partner',compact('testimonial','faqs','blogs'));
    }
    public function whyUsPage()
    {
        $faqs = Faq::get();
        $testimonial=Testimonial::get();
        $blogs = Blog::with('blogImage')->get();
        return view('home.company.whyUs',compact('testimonial','faqs','blogs'));
    }

}
