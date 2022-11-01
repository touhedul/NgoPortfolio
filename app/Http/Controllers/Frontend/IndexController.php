<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Branch;
use App\Models\ContactFeedback;
use App\Models\Gallery;
use App\Models\Job;
use App\Models\Program;
use App\Models\Setting;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Gallery::where('category', 'Slider')->get();
        $projects = Program::where('category', 'Project')->latest()->get();
        $news = Program::where('category', 'News')->latest()->get();
        $programs = Program::where('category', 'Program')->latest()->get();
        $notices = Program::where('category', 'Notice')->latest()->get();
        $associates = Program::where('category', 'Associate')->latest()->take(3)->get();
        $events = Program::where('category', 'Event')->latest()->take(3)->get();
        $numberOfService = Program::where('category', 'Associate')->count();
        $numberOfProject = Program::where('category', 'Project')->count();
        $numberOfProgram = Program::where('category', 'Program')->count();
        $numberOfEvent = Program::where('category', 'Event')->count();
        $teams = Team::where('designation','Manager')->latest()->get();
        $testimonials = Testimonial::latest()->take(6)->get();
        $clients = Program::where('category', 'Client')->latest()->get();
        $blogs = Blog::latest()->get();
        $gallaries = Gallery::where('category', 'Gallery')->latest()->get();
        $setting = Setting::all();
        $jobs = Job::latest()->get();
        $branches = Branch::all();
        return view('frontend.index', compact('jobs', 'setting', 'gallaries', 'blogs', 'clients', 'testimonials', 'teams', 'sliders', 'projects', 'programs', 'associates', 'events', 'notices', 'testimonials', 'news', 'numberOfService', 'numberOfProject', 'numberOfProgram', 'numberOfEvent','branches'));
    }

    public function termsAndConditions()
    {
        return view('frontend.terms_and_conditions');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy_policy');
    }


    public function feedback()
    {
        return view('frontend.feedback');
    }
    public function submitFeedback(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191',
            'phone' => 'nullable|string|max:191',
            'message' => 'nullable|string|max:65500',
        ]);
        $feedback = new ContactFeedback();
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->phone = $request->phone;
        $feedback->type = json_encode(request()->type);
        $feedback->message = $request->message;
        $feedback->save();
        return back()->with('success', 'Thank you.');
    }

    public function gallery()
    {
        $gallaries = Gallery::where('category', 'Gallery')->latest()->get();
        return view('frontend.gallery-page', compact('gallaries'));
    }

    public function about()
    {
        return view('frontend.about-page');
    }

    public function blog()
    {
        $blogs = Blog::latest()->get();
        return view('frontend.blog-page', compact('blogs'));
    }

    public function contact()
    {
        return view('frontend.contact-page');
    }

    public function project()
    {
        $projects = Program::where('category', 'Project')->latest()->get();
        return view('frontend.project-page', compact('projects'));
    }

    public function team()
    {
        $teams = Team::latest()->get();
        return view('frontend.team-page', compact('teams'));
    }

    public function service()
    {
        $programs = Program::where('category', 'Program')->latest()->get();
        return view('frontend.service-page', compact('programs'));
    }
    public function serviceType($serviceType)
    {
        $type=   str_replace('_', ' ', $serviceType);
        $programs = Program::where('category', 'Program')->where('type',$type)->latest()->get();
        return view('frontend.service-type', compact('programs','type'));
    }

    public function client()
    {
        $clients = Program::where('category', 'Client')->latest()->get();
        return view('frontend.client-page', compact('clients'));
    }

    public function testimonial()
    {
        $testimonials = Testimonial::latest()->get();
        return view('frontend.testimonial-page', compact('testimonials'));
    }

    public function jobs()
    {
        $jobs = Job::latest()->get();
        return view('frontend.job-page', compact('jobs'));
    }

    public function jobDetails($id)
    {
        $job = Job::findOrFail($id);
        return view('frontend.job-single', compact('job'));
    }
    public function teamType($Teamtype){

      $type=   str_replace('_', ' ', $Teamtype);
        $teams = Team::where('type',$type)->latest()->get();
        return view('frontend.team-type', compact('teams','type'));
    }

}
