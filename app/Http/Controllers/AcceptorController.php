<?php

namespace App\Http\Controllers;

use App\Models\Acceptor;
use App\Http\Requests\StoreAcceptorRequest;
use App\Http\Requests\UpdateAcceptorRequest;
use Illuminate\Http\Request;

class AcceptorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donations = Acceptor::all();

        return view('acceptor', compact('acceptors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('acceptfood');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $donations = new Acceptor();

        $donations->name = $request->name;
        $donations->email = $request->email;
        $donations->contact = $request->contact;
        $donations->food_name = $request->food_name;

        $donations->save();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $donations = Acceptor::all();

        return view('acceptorview', compact('donations'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acceptor $acceptor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAcceptorRequest $request, Acceptor $acceptor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acceptor $acceptor)
    {
        //
    }
}
