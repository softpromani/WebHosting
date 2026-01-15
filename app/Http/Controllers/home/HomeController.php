<?php
namespace App\Http\Controllers\home;

use App\Events\FreeTrialApply;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactUsEmail;
use App\Mail\FreeTrialEmail;
use App\Models\Blog;
use App\Models\CategoryDescription;
use App\Models\ContactUs;
use App\Models\Faq;
use App\Models\FreeTrailApply;
use App\Models\Menu;
use App\Models\Newsletter;
use App\Models\PricePlan;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function home()
    {
        $category_desc = CategoryDescription::with('category')->take(3)->get();
        $blogs         = Blog::with('blogImage')->get();
        return view('home.index', compact('blogs', 'category_desc'));
    }

    public function newHome()
    {
        $category_desc = CategoryDescription::with('category')->take(3)->get();
        $blogs         = Blog::with('blogImage')->get();
        return view('home.new_home', compact('blogs', 'category_desc'));
    }

    public function ticketSubmission()
    {
        return view('home.ticketsubmission');
    }

    public function aboutUs()
    {
        $faqs        = Faq::where('type', 'about-us-page')->get();
        $blogs       = Blog::with('blogImage')->get();
        $testimonial = Testimonial::get();
        return view('home.about_us', compact('faqs', 'blogs', 'testimonial'));
    }

    public function contactUs()
    {
        return view('home.contact_us');
    }

    public function categoryDescription($title)
    {
        $category_desc = CategoryDescription::where('title', $title)->first();
        if (! $category_desc) {
            return redirect()->route('home')->with('error', 'Category not found.');
        }
        $menu_cat     = Menu::where('id', $category_desc->category_id)->first();
        $cat_products = Product::where('menu_id', $category_desc->category_id)->get();
        $products     = Product::where('menu_id', $category_desc->category_id)->limit(3)->get();
        // $faqs        = Faq::orderBy('created_at', 'desc')->take(7)->get();
        $testimonial = Testimonial::get();
        $blogs       = Blog::with('blogImage')->get();
        // dd($category_desc);
        if ($category_desc->id == 1) {
            // return redirect()->route('product', 'quickbooks-pro-desktop-hosting');
            return view('home.category_desc.cat_desc_1', compact('category_desc', 'menu_cat', 'cat_products', 'testimonial', 'blogs'));
        } elseif ($category_desc->id == 2) {
            // return redirect()->route('product', 'sage-50-cloud-hosting');
            return view('home.category_desc.cat_desc_2', compact('category_desc', 'menu_cat', 'cat_products', 'testimonial', 'blogs'));
        } elseif ($category_desc->id == 3) {
            // return redirect()->route('product', 'drake-tax-software-cloud-hosting');
            return view('home.category_desc.cat_desc_3', compact('category_desc', 'menu_cat', 'cat_products', 'testimonial', 'blogs'));
        } else {
            abort(404);
        }

    }

    public function downloads()
    {
        return view('home.download');
    }

    public function contactStore(ContactRequest $request)
    {
        $validatedData = $request->validated();

        $contact = ContactUs::create($validatedData);

        Mail::send(new ContactUsEmail($contact));

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

            'email'     => $request->email,
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
        return view('home.pricing', compact('PricePlan'));
    }
    public function security()
    {
        $faqs        = Faq::where('type', 'security-page')->orderBy('created_at', 'desc')->take(6)->get();
        $faqs        = Faq::orderBy('created_at', 'desc')->take(6)->get();
        $testimonial = Testimonial::get();
        $blogs       = Blog::with('blogImage')->get();
        return view('home.company.security', compact('testimonial', 'faqs', 'blogs'));
    }
    public function partner()
    {
        $faqs        = Faq::where('type', 'partner-page')->orderBy('created_at', 'desc')->take(6)->get();
        $testimonial = Testimonial::get();
        $blogs       = Blog::with('blogImage')->get();
        return view('home.company.partner', compact('testimonial', 'faqs', 'blogs'));
    }
    public function whyUsPage()
    {
        $faqs        = Faq::where('type', 'why-us-page')->get();
        $testimonial = Testimonial::get();
        $blogs       = Blog::with('blogImage')->get();
        return view('home.company.whyUs', compact('testimonial', 'faqs', 'blogs'));
    }
    public function faq()
    {
        $faqs        = Faq::where('type', 'faq-page')->orderBy('created_at', 'desc')->take(6)->get();
        $testimonial = Testimonial::get();
        $blogs       = Blog::with('blogImage')->get();
        return view('home.company.faq', compact('testimonial', 'faqs', 'blogs'));
    }
    public function testimonial()
    {
        $faqs        = Faq::where('type', 'testimonial-page')->orderBy('created_at', 'desc')->take(6)->get();
        $testimonial = Testimonial::get();
        $blogs       = Blog::with('blogImage')->get();
        return view('home.company.testimonial', compact('testimonial', 'faqs', 'blogs'));
    }
    public function applyNow()
    {
        return view('home.apply_now');
    }
    public function applyNowStore(Request $request)
    {
        $validatedData = $request->validate([
            'name'               => 'required|string|max:255',
            'email'              => 'required|email|max:255',
            'phone_number'       => 'required|string|max:20',
            'business_name'      => 'required|string|max:255',
            'application_detail' => 'required|string|max:5000',
            'license_key'        => 'required|string|max:5000',
            'number_users'       => 'required|integer|min:1',
            'username'           => 'required|string|max:255',
            'aditional_comment'  => 'sometimes|string|max:1000',
            'agreement'          => 'required|accepted',
        ]);
        $freeTrailApply = FreeTrailApply::create($validatedData);
        FreeTrialApply::dispatch($freeTrailApply);
        Mail::send(new FreeTrialEmail($freeTrailApply));
        Alert::success('Success', 'Your application has been submitted successfully.');
        return redirect()->back();
    }

    public function scheduleBook(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'phone_number'  => 'required|string|max:20',
            'schedule_date' => 'required|date',
            'schedule_time' => 'required|string|max:20',
            'user_message'  => 'sometimes|string|max:1000',
            'captcha'       => 'required|captcha',
        ]);
        if ($validatedData->fails()) {
            Alert::error('Validation Error', $validatedData->errors()->first());
            return redirect()->back();
            // return response($validatedData->errors()->first(), 200);
        }

        $formData = $request->all();

        $content    = ['name' => $request->name];
        $admin_mail = ['sales@mounteko.com', 'support@mounteko.com'];
        $to_email   = $request->email;

        Mail::send('emails.booking-admin', $formData, function ($m) use ($admin_mail) {
            $m->to($admin_mail);
            $m->subject('Schedule Booking');
        });

        // Mail::send('emails.booking-admin', $formData, function ($m) use ($to_email) {
        //     $m->to($to_email);
        //     $m->subject('Schedule Booking');
        // });

        Alert::success('Success', 'Your schedule has been submitted successfully.');
        return redirect()->back();

        // if ($schedule) {
        //     return response('OK', 200);
        // } else {
        //     return response('Error', 500);
        // }
    }

}
