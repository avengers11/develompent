<?php

namespace App\Http\Controllers\Admin\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Setting;
use App\Models\WebSiteContent;

class AppearanceController extends Controller
{
    /**
     * Show appearance settings page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $WebSiteContent = WebSiteContent::first();

        $information_rows = ['title', 'author', 'keywords', 'description'];
        $information = [];
        $settings = Setting::all();

        foreach ($settings as $row) {
            if (in_array($row['name'], $information_rows)) {
                $information[$row['name']] = $row['value'];
            }
        }

        return view('admin.frontend.appearance.index', compact('information', 'WebSiteContent'));
    }


    /**
     * Store appearance inputs properly in database and local storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
        ]);

        $rows = ['title', 'author', 'keywords', 'description'];
        foreach ($rows as $row) {
            Setting::where('name', $row)->update(['value' => $request->input($row)]);
        }

        // web site content
        $oldFile = WebSiteContent::first();

        if (!empty($request->file('favicons'))) {
            // remove old file
            if (!empty($oldFile['favicons']) && file_exists(public_path($oldFile['favicons']))) {
                unlink(public_path($oldFile['favicons']));
            }
            // add new file
            $file = $request->file('favicons');
            $fileName1 = '/img/brand/' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img/brand'), $fileName1);
        } else {
            $fileName1 = $oldFile['favicons'];
        }

        // primary_logo
        if (!empty($request->file('primary_logo'))) {
            // remove old file
            if (!empty($oldFile['primary_logo']) && file_exists(public_path($oldFile['primary_logo']))) {
                unlink(public_path($oldFile['primary_logo']));
            }
            // add new file
            $file = $request->file('primary_logo');
            $fileName2 = '/img/brand/' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img/brand'), $fileName2);
        } else {
            $fileName2 = $oldFile['primary_logo'];
        }


        WebSiteContent::where('id', 1)->update([
            "favicons" => $fileName1,
            "primary_logo" => $fileName2,
        ]);


        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('view:clear');

        toastr()->success(__('Appearance settings successfully updated'));
        return redirect()->back();
    }


    /**
     * Upload logo images
     */
    public function uploadImage(UploadedFile $file, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(5);

        $file->storeAs($folder, $name . '.' . $file->getClientOriginalExtension(), $disk);
    }
}
