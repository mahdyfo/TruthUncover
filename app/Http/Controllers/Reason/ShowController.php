<?php

namespace App\Http\Controllers\Reason;

use App\Http\Controllers\Controller;
use App\Models\Reason;

class ShowController extends Controller
{
    public function show(Reason $reason)
    {
        // Load 2nd and 3rd level reasons
        $reason->load('reasons.reasons');

        return view('reasons.show', compact('reason'));
    }
}
