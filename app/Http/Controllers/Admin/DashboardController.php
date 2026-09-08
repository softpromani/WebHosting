<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\Faq;
use App\Models\FreeTrailApply;
use App\Models\Newsletter;
use App\Models\PricePlan;
use App\Models\Product;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\WebSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalBlogs = Blog::withoutGlobalScopes()->count();
        $totalProducts = Product::count();
        $totalContacts = ContactUs::count();
        $totalNewsletters = Newsletter::count();
        $totalTeams = Team::count();
        $totalTestimonials = Testimonial::count();
        $totalPricePlans = PricePlan::count();
        $totalFaqs = Faq::count();
        $totalFreeTrials = FreeTrailApply::count();

        // Recent Contact Us inquiries
        $recentContacts = ContactUs::latest()->take(5)->get();

        // Recent Blogs
        $recentBlogs = Blog::withoutGlobalScopes()->with('blogImage')->latest()->take(5)->get();

        // Recent Newsletters
        $recentNewsletters = Newsletter::latest()->take(5)->get();

        // Activity trends for last 6 months
        $months = [];
        $contactCounts = [];
        $newsletterCounts = [];
        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $months[] = $date->format('M Y');
            
            $contactCounts[] = ContactUs::whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->count();

            $newsletterCounts[] = Newsletter::whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->count();
        }

        return view('admin.dashboard', compact(
            'totalBlogs',
            'totalProducts',
            'totalContacts',
            'totalNewsletters',
            'totalTeams',
            'totalTestimonials',
            'totalPricePlans',
            'totalFaqs',
            'totalFreeTrials',
            'recentContacts',
            'recentBlogs',
            'recentNewsletters',
            'months',
            'contactCounts',
            'newsletterCounts'
        ));
    }
    public function free_trial_applies(Request $request)
    {
        if(request()->ajax()) {
            $data = \App\Models\FreeTrailApply::select(['id', 'name', 'email', 'phone_number', 'business_name', 'application_detail', 'license_key', 'number_users', 'username', 'aditional_comment', 'agreement']);
            return $data->make(true);
        }
        $free_trial_applies = \App\Models\FreeTrailApply::orderBy('id', 'desc')->get();
        return view('admin.free_trial_applies.index', compact('free_trial_applies'));
    }
}
