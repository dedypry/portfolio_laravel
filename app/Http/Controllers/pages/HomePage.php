<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomePage extends Controller
{
  public function index()
  {
    $profile = Profile::where("email", 'dedypry30@gmail.com')->first();
    $skills = Skill::where('profile_id', $profile->id)->get();
    $experience = Experience::where('profile_id', $profile->id)->get();
    $services = Service::where('profile_id', $profile->id)->get();
    return view('landing.index', compact(['profile', 'skills', 'experience', 'services']));
  }
}
