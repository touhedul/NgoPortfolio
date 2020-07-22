<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\AdminHelper;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\ContactFeedback;
use App\Models\Job;
use App\Models\Program;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Yajra\DataTables\DataTables;


class AdminController extends Controller
{
    public function dashboard()
    {
        $activities = Program::where('category', 'Activity')->count();
        $events = Program::where('category', 'Event')->count();
        $projects = Program::where('category', 'Event')->count();
        $services = Program::where('category', 'Event')->count();
        $affiliates = Program::where('category', 'Event')->count();
        $branches = Program::where('category', 'Event')->count();
        $teams = Team::count();
        $testimonials = Testimonial::count();
        $jobs = Job::count();
        return view('admin.dashboard', compact(
            'activities',
            'events',
            'projects',
            'services',
            'affiliates',
            'branches',
            'teams',
            'testimonials',
            'jobs'
        ));
    }

    public function changePasswordView()
    {
        return view('admin.change_password');
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'oldpassword' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $admin = Admin::find(Auth::id());
        if (Hash::check($request->oldpassword, $admin->password)) {
            $admin->password = Hash::make($request->password);
            $admin->save();
            return back()->with('success', 'Password Change Successful.');
        } else {
            return back()->with('error', 'Password Mismatch.');
        }
    }

    public function contacts(Request $request)
    {
        $contactFeedbacks = ContactFeedback::whereNotNull('phone')->get();
        if ($request->ajax()) {
            return DataTables::of($contactFeedbacks)
                ->addIndexColumn()
                ->addColumn('created_at', function (ContactFeedback $contactFeedbacks) {
                    return $contactFeedbacks->created_at->toFormattedDateString();
                })
                ->addColumn('action', function (ContactFeedback $contactFeedbacks) {
                    return '<a onclick="return confirm(\'Are you sure?\')" href="' . route('admin.contact-feedback.delete', $contactFeedbacks->id) . '">Delete</a> ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.contacts');
    }

    public function feedbacks(Request $request)
    {
        $contactFeedbacks = ContactFeedback::whereNull('phone')->get();
        if ($request->ajax()) {
            return DataTables::of($contactFeedbacks)
                ->addIndexColumn()
                ->addColumn('created_at', function (ContactFeedback $contactFeedbacks) {
                    return $contactFeedbacks->created_at->toFormattedDateString();
                })
                ->addColumn('action', function (ContactFeedback $contactFeedbacks) {
                    return '<a onclick="return confirm(\'Are you sure?\')" href="' . route('admin.contact-feedback.delete', $contactFeedbacks->id) . '">Delete</a> ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $averageFeedback = ContactFeedback::avg('feedback');
        $averageFeedback = round($averageFeedback, 2);
        return view('admin.feedbacks', compact('averageFeedback'));
    }

    public function contactFeedbackDelete(ContactFeedback $contactFeedback)
    {
        $contactFeedback->delete();
        return back()->with('success', 'Delete Successful.');
    }
}
