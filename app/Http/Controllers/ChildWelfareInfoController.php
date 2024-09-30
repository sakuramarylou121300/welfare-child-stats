<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChildWelfareInfo;

class ChildWelfareInfoController extends Controller
{
    /**
     * Store a new child welfare info record.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'target_cdclaa' => 'required|integer',
            'issued_cdlaa' => 'required|integer',
            'received_petitions_cdlclaa' => 'required|integer',
            'endorsed_petitions_nacc' => 'required|integer',
            'papa_presented_rmc' => 'required|integer',
            'papa_not_presented_rmc' => 'required|integer',
            'petition_domestic_adoption_act' => 'required|integer',
            'simulated_birth_records_rectification_act' => 'required|integer',
            'issued_ica_clearance_regular' => 'required|integer',
            'issued_ica_clearance_relative' => 'required|integer',
            'target_foster' => 'required',
            'foster_care_new_children' => 'required',
            'foster_children_subsidized_eligible' => 'required',
        ]);

        // Create a new child welfare info record
        ChildWelfareInfo::create($request->all());

        // Redirect back with success message
        return redirect()->back()->with('success', 'Child welfare info saved successfully');
    }
}
