<?php

namespace App\Http\Controllers;

use App\Merch;
use Illuminate\Http\Request;
use App\Http\Requests\MerchRequest;

class MerchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merch_items = Merch::paginate(15);
        return view('examples.merch.index', compact('merch_items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('examples.merch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MerchRequest $request)
    {
        $newMerch = $request->validated();

        Merch::create($newMerch);

        return redirect()
            ->route('merch.index')
            ->with([
                'message' => "{$newMerch['name']} created successfully",
                'status' => 'success',
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function show(Merch $merch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function edit(Merch $merch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merch $merch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merch $merch)
    {
        //
    }
}
