<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SaranaTempatTinggal; // Import the SaranaTempatTinggal model
use Illuminate\Http\Request;

class SaranaTempatTinggalController extends Controller
{
    /**
     * Display a listing of the Sarana Tempat Tinggal.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new Sarana Tempat Tinggal.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Show the form for creating a new Sarana Tempat Tinggal
        return view('dashboard.demografi.tempattinggal.add');
    }

    /**
     * Store a newly created Sarana Tempat Tinggal in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'jenis_sarana_prasarana_tempat_tinggal' => 'nullable|string|max:255',
            'kondisi_tempat_tinggal' => 'nullable|string|max:255',
            'jumlah_volume_tempat_tinggal' => 'nullable|numeric',
            'keterangan_tempat_tinggal' => 'nullable|string',
        ]);

        // Create a new Sarana Tempat Tinggal record
        SaranaTempatTinggal::create($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Sarana Tempat Tinggal added successfully.');
    }

    /**
     * Show the form for editing the specified Sarana Tempat Tinggal.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find the specific Sarana Tempat Tinggal by ID and pass it to the edit form
        $saranatempattinggal = SaranaTempatTinggal::findOrFail($id);
        return view('dashboard.demografi.tempattinggal.edit', compact('saranatempattinggal'));
    }

    /**
     * Update the specified Sarana Tempat Tinggal in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'jenis_sarana_prasarana_tempat_tinggal' => 'required|string|max:255',
            'kondisi_tempat_tinggal' => 'required|string|max:255',
            'jumlah_volume_tempat_tinggal' => 'required|numeric',
            'keterangan_tempat_tinggal' => 'nullable|string',
        ]);

        // Find the specific Sarana Tempat Tinggal and update it
        SaranaTempatTinggal::whereId($id)->update($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Sarana Tempat Tinggal updated successfully.');
    }

    /**
     * Remove the specified Sarana Tempat Tinggal from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the specific Sarana Tempat Tinggal and delete it
        SaranaTempatTinggal::findOrFail($id)->delete();

        // Redirect to the index page with a success message
        return redirect()->route('dashboard.dashboard.demografi.index')
            ->with('success', 'Sarana Tempat Tinggal deleted successfully.');
    }
}
