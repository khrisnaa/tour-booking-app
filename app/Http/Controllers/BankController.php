<?php

namespace App\Http\Controllers;

use App\Http\Requests\Bank\StoreBankRequest;
use App\Models\Bank;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.banks.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBankRequest $request)
    {

        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('logo')) {
                $logoPath = $request->file('logo')->store('bank_logos/'.date('Y/m/d'), 'public');
                $validated['logo'] = $logoPath;
            };

            Bank::create($validated);
        });

        return redirect()->route('admin.banks.index')->with('success', ['title' => 'Successfully created', 'description' => 'You have successfully created a tour package']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Bank $bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bank $bank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bank $bank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bank $bank)
    {
        //
    }
}
