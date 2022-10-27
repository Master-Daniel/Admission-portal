<?php

namespace App\Http\Controllers;

use App\Models\AuthAdmin;
use Illuminate\Http\Request;

class AuthAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Staff Login';
        return view('Auth.admin_login', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuthAdmin  $authAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(AuthAdmin $authAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuthAdmin  $authAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthAdmin $authAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuthAdmin  $authAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthAdmin $authAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuthAdmin  $authAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthAdmin $authAdmin)
    {
        //
    }
}
