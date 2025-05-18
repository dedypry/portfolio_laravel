<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $profile = Profile::where("email", 'dedypry30@gmail.com')->first();
        $skills = Skill::where('profile_id', $profile->id)->get();
        $experience = Experience::where('profile_id', $profile->id)->orderBy('start_at', 'desc')->get();
        $services = Service::where('profile_id', $profile->id)->get();
        $portfolio = Portfolio::where('profile_id', $profile->id)->get();

        return view('landing.index', compact(['profile', 'skills', 'experience', 'services', 'portfolio']));
    }
}
