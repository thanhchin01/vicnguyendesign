<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Client\DesignRequest;
use App\Models\DesignRequests;

class DesignRequestsController extends Controller
{
    //
    public function index()
    {
        return view('figmaUI.pages.contact');
    }

    public function store(DesignRequest $request)
    {
        DesignRequests::create([
            'fullname'              => $request->fullname,
            'email'                 => $request->email,
            'job'                   => $request->job,
            'age'                   => $request->age,
            'phone'                 => $request->phone,
            'project_type'          => $request->project_type,
            'area'                  => $request->area,
            'scale'                 => $request->scale,
            'location'              => $request->location,
            'investment_cost'       => $request->investment_cost,
            'people'                => $request->people,
            'expected_rooms'        => $request->expected_rooms,
            'other_construction'    => $request->other_construction,
            'function_description'  => $request->function_description,
            'design_speed'          => $request->design_speed,
            'complete_speed'        => $request->complete_speed,
            'habits'                => $request->habits,
            'content'               => $request->content
        ]);

        return back()->with('success', 'Gửi thông tin dự án thành công');
    }
}
