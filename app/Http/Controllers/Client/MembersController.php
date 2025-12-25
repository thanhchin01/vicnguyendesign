<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Members;

class MembersController extends Controller
{
    public function clientTeamIndex()
    {
        $member = Members::where('status', 1)
            ->orderBy('id', 'asc')
            ->get();
        return view('pages.team', compact('member'));
    }

    public function clientMember()
    {
        $member = Members::where('status', 1)
            ->orderBy('id', 'asc')
            ->get();
        return view('figmaUI.pages.member', compact('member'));
    }
}
