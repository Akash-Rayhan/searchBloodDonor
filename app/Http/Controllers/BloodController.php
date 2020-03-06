<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use \App\BloodGroup;

class BloodController extends Controller
{
    public function findGroup(Request $request){
        $data['bloodGroups'] = BloodGroup::all();
        $data['donors'] = User::where('blood_group_id',$request->blood_group_id)->get();

        foreach ($data['donors'] as $donors => $donor) {
            $data['date'] = Carbon::now();
            $nowdate = date_create($donor->last_donation_date);
            $diff = date_diff($data['date'], $nowdate);
            $diffMonths = intval($diff->format("%m"));
            $diffDays = intval($diff->format("%d"));
            $data['totalDiff'][] = $diffMonths * 30 + $diffDays;

        }
        return view('welcome',$data);

    }
}
