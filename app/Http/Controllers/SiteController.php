<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landingpage.landingpage');
    }
    public function about()
    {
        return view('landingpage.about');
    }
    public function services()
    {
        return view('landingpage.services');
    }
    public function contact()
    {
        return view('landingpage.contact');
    }



    // Pages
    public function feature()
    {
        return view('pages.feature');
    }
    public function countries()
    {
        return view('pages.countries');
    }
    public function testimonial()
    {
        return view('pages.testimonial');
    }
    public function training()
    {
        return view('pages.training');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $site)
    {
        //
    }
}
