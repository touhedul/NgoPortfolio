<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\ContactFeedback;
use App\Models\Gallery;
use App\Models\Job;
use App\Models\Program;
use App\Models\Team;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function programDifferent($category)
    {
        $programs = Program::where('category', $category)->latest()->paginate(12);
        if (count($programs) < 1) {
            abort(404);
        }
        return view('frontend.programs_different', compact('programs', 'category'));
    }

    public function programSingle(Program $program)
    {
        return view('frontend.program_single', compact('program'));
    }

    public function branches()
    {
        $branches = Branch::latest()->get();
        return view('frontend.branches', compact('branches'));
    }

    public function teams()
    {
        $teams = Team::latest()->get();
        $branches = Branch::get();
        $servicesMenus = Program::where('category', 'Program')->select('id', 'title')->latest()->get();
        return view('frontend.teams', compact('teams', 'branches', 'servicesMenus'));
    }

    public function clients()
    {
        $resources = Program::where('category', 'Resource')->latest()->get();
        $branches = Branch::get();
        $servicesMenus = Program::where('category', 'Program')->select('id', 'title')->latest()->get();
        return view('frontend.clients', compact('resources', 'branches', 'servicesMenus'));
    }

    public function projects()
    {
        $branches = Branch::get();
        // $resources = Program::where('category', 'Resource')->latest()->get();
        $projects = Program::where('category', 'Project')->latest()->get();
        $servicesMenus = Program::where('category', 'Program')->select('id', 'title')->latest()->get();
        return view('frontend.projects', compact('projects', 'branches', 'servicesMenus'));
    }
    public function jobs()
    {
        $jobs = Job::latest()->paginate(10);
        return view('frontend.jobs', compact('jobs'));
    }
    public function notices()
    {
        $notices = Program::where('category', 'Notice')->latest()->paginate(10);
        return view('frontend.notices', compact('notices'));
    }
    public function publications()
    {
        $publications = Program::where('category', 'Resource')->latest()->paginate(10);
        return view('frontend.publications', compact('publications'));
    }
    public function galleries()
    {
        $branches = Branch::get();
        $galleries = Gallery::where('category', 'gallery')->latest()->get();
        $servicesMenus = Program::where('category', 'Program')->select('id', 'title')->latest()->get();
        return view('frontend.galleries', compact('galleries', 'branches', 'servicesMenus'));
    }
    public function branchSingle(Branch $branch)
    {
        $branches = Branch::latest()->get();
        return view('frontend.branch_single', compact('branch', 'branches'));
    }

    public function about()
    {
        $branches = Branch::get();
        $servicesMenus = Program::where('category', 'Program')->select('id', 'title')->latest()->get();
        return view('frontend.about', compact('branches', 'servicesMenus'));
    }

    public function services()
    {
        $branches = Branch::get();
        $programs = Program::where('category', 'Program')->latest()->get();
        $servicesMenus = Program::where('category', 'Program')->select('id', 'title')->latest()->get();
        return view('frontend.services', compact('branches', 'programs', 'servicesMenus'));
    }

    public function serviceSingle($id)
    {
        
        $branches = Branch::get();
        $service = Program::where('id', $id)->where('category', 'Program')->first();
        $servicesMenus = Program::where('category', 'Program')->select('id', 'title')->latest()->get();
        return view('frontend.single_service', compact('branches', 'servicesMenus', 'service'));
    }
}
