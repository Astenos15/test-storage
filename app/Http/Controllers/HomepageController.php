<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateHomepageRequest;
use Illuminate\Support\Facades\File;
use App\Models\Homepage;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $image = Homepage::firstOrFail();
        return view('homepage.index', ['image' => $image]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Homepage $homepage)
    {
        return view('homepage.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateHomepageRequest $request, Homepage $homepage)
    // {
    //     $request->validated();

    //     $path = public_path('images/home');

    //     // ensure folder exists
    //     if (!File::exists($path)) {
    //         File::makeDirectory($path, 0755, true);
    //     }

    //     // delete old file if exists (keep only one)
    //     File::cleanDirectory($path);

    //     // save new file with fixed name
    //     $filename = 'home.' . $request->file('image')->getClientOriginalExtension();
    //     $request->file('image')->move($path, $filename);

    //     $imagePath = 'images/home/' . $filename;

    //     Homepage::updateOrCreate(
    //         [], // no conditions, so it will always target the first (or create new)
    //         ['image_path' => $imagePath]
    //     );

    //     Alert::success('Success', 'Homepage updated!');
    //     return back()->with('success', 'Homepage updated!');
    // }

    public function update(UpdateHomepageRequest $request, Homepage $homepage)
    {
        $request->validated();

        // Always keep only 1 file inside storage/app/public/home
        $directory = 'home';
        Storage::disk('public')->deleteDirectory($directory);
        Storage::disk('public')->makeDirectory($directory);

        // Save new file with fixed name (e.g. home.jpg / home.png)
        $filename = 'home.' . $request->file('image')->getClientOriginalExtension();
        $path = $request->file('image')->storeAs($directory, $filename, 'public');

        // Save the relative path into DB
        Homepage::updateOrCreate(
            [], // no conditions, so it will always target the first (or create new)
            ['image_path' => $path] // e.g. home/home.jpg
        );

        Alert::success('Success', 'Homepage updated!');
        return back()->with('success', 'Homepage updated!');
    }
}
