<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactFeedback;
use App\Models\Gallery;
use App\Models\Program;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Gallery::where('category', 'Slider')->get();
        $programs = Program::where('category', 'Program')->latest()->get();
        $activities = Program::where('category', 'Activity')->latest()->take(3)->get();
        $services = Program::where('category', 'Service')->latest()->take(3)->get();
        $testimonials1 = Testimonial::latest()->take(2)->get();
        $testimonials2 = Testimonial::latest()->take(2)->skip(2)->get();
        $numberOfActivity = Program::where('category','Activity')->count();
        $numberOfProject = Program::where('category','Project')->count();
        $numberOfProgram = Program::where('category','Program')->count();
        $numberOfEvent = Program::where('category','Event')->count();
        return view('frontend.index', compact('sliders', 'programs', 'activities', 'services', 'testimonials1', 'testimonials2', 'numberOfActivity', 'numberOfProject', 'numberOfProgram', 'numberOfEvent'));
    }

    // public function termsAndConditions()
    // {
    //     return view('frontend.terms_and_conditions');
    // }

    // public function privacyPolicy()
    // {
    //     return view('frontend.privacy_policy');
    // }
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
