<?php

namespace App\Http\Controllers;

use App\Models\Page as ModelsPage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Page extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        // dd($request->page);
        if ($request->page == 'our-ministry-') {
            return view('pages.');
        } elseif ($request->page == 'what-iwc-guarantees-you') {
            return view('pages.iwc-gurarantees');
        } else {
            $page = ModelsPage::whereSlug($request->page)->firstOrFail();
            return view('pages.others', compact('page'));
        }
    }
}
