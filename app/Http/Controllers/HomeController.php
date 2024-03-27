<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        return view('frontend.about.index');
    }

    public function contact()
    {
        return view('frontend.contact.index');
    }

    public function blog_list()
    {
        return view('frontend.blog.blog-list');
    }

    public function blog_grid()
    {
        return view('frontend.blog.blog-grid');
    }

    public function blog_details()
    {
        return view('frontend.blog.blog-details');
    }

    public function team_list()
    {
        return view('frontend.team.team-list');
    }

    public function team_details()
    {
        return view('frontend.team.team-details');
    }

    public function service()
    {
        return view('frontend.service.index');
    }

    public function service_details()
    {
        return view('frontend.service.service-details');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
