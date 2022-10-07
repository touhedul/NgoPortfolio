<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ContactFeedback;
use App\Models\Gallery;
use App\Models\Program;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Gallery::where('category', 'Slider')->get();
        $projects = Program::where('category', 'Project')->latest()->get();
        $newses = Program::where('category', 'News')->latest()->get();
        $programs = Program::where('category', 'Program')->latest()->get();
        $notices = Program::where('category', 'Notice')->latest()->get();
        $associates = Program::where('category', 'Associate')->latest()->take(3)->get();
        $events = Program::where('category', 'Event')->latest()->take(3)->get();
        $numberOfService = Program::where('category', 'Associate')->count();
        $numberOfProject = Program::where('category', 'Project')->count();
        $numberOfProgram = Program::where('category', 'Program')->count();
        $numberOfEvent = Program::where('category', 'Event')->count();
        $teams = Team::latest()->get();
        $testimonials = Testimonial::latest()->get();
        $clients = Program::where('category', 'Client')->latest()->get();
        $blogs = Blog::latest()->take(5)->get();
        $gallaries = Gallery::where('category', 'Gallery')->latest()->get();
        return view('frontend.index', compact('gallaries', 'blogs', 'clients', 'testimonials', 'teams', 'sliders', 'projects', 'programs', 'associates', 'events', 'notices', 'testimonials', 'newses', 'numberOfService', 'numberOfProject', 'numberOfProgram', 'numberOfEvent'));
    }

    public function termsAndConditions()
    {
        return view('frontend.terms_and_conditions');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy_policy');
    }
    public function contact()
    {
        return view('frontend.contact');
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
            'feedback' => 'nullable|integer'
        ]);
        $feedback = new ContactFeedback();
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->phone = $request->phone;
        $feedback->message = $request->message;
        $feedback->feedback = $request->feedback;
        $feedback->save();
        return back()->with('success', 'Thank you.');
    }
}