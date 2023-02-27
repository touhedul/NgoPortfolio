<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
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
        $newses = Program::where('category', 'News')->latest()->take(1)->get();
        $programs = Program::where('category', 'Program')->latest()->take(6)->get();
        $notices = Program::where('category', 'Notice')->latest()->get();
        $associates = Program::where('category', 'Associate')->latest()->take(3)->get();
        $events = Program::where('category', 'Event')->latest()->take(1)->get();
        $resources = Program::where('category', 'Resource')->latest()->get();
        $branches = Branch::get();
        $teams = Team::take(4)->get();
        $testimonials = Testimonial::latest()->get();
        $numberOfService = Program::where('category', 'Associate')->count();
        $numberOfProject = Program::where('category', 'Project')->count();
        $numberOfProgram = Program::where('category', 'Program')->count();
        $numberOfEvent = Program::where('category', 'Event')->count();
        $servicesMenus = Program::where('category', 'Program')->select('id', 'title')->latest()->get();
        return view('frontend.index', compact('servicesMenus','resources','branches', 'sliders', 'projects', 'programs', 'associates', 'events', 'notices', 'testimonials','newses', 'numberOfService', 'numberOfProject', 'numberOfProgram', 'numberOfEvent', 'teams'));
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
        $branches = Branch::get();
        $servicesMenus = Program::where('category', 'Program')->select('id', 'title')->latest()->get();
        return view('frontend.contact', compact('branches', 'servicesMenus'));
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
