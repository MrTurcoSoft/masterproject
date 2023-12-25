<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Contracts\Cache\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $settings = Setting::all()->sortBy('settings_must');
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Factory $cache)
    {
        $input = $request->all();

        $settings = [
            'settings_description.required' => 'Lütfen Açıklama alanını doldurunuz.',
            'settings_key.required' => 'Lütfen Anahtar alanını doldurunuz.',
            'settings_value.required' => 'Lütfen Değer alanını doldurunuz.',
            'settings_type.required' => 'Lütfen Tip alanını doldurunuz.',
            'settings_must.required' => 'Lütfen Sıralama alanını doldurunuz.',
        ];

        $this->validate($request,[
            'settings_description' => 'required|max:255',
            'settings_key' => 'required|max:255',
            'settings_type' => 'required|max:255',
            'settings_must' => 'required|max:3',
            'settings_value' => 'required',
        ], $settings);

        Setting::create($input)->id;

        /* Important ********** */
        $cache->forget('settings');
        /* //Important ********** */

        $request->session()->flash('alert-success', 'Setting added successfully!');

        return view('admin.settings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $setting = Setting::findOrFail($id);
        return view('admin.settings.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting   = Setting::findOrFail($id);
        return view('admin.settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Factory $cache)
    {
        $input = $request->all();

        $messages = [
            'settings_description.required' => 'Lütfen Açıklama alanını doldurunuz.',
            'settings_key.required' => 'Lütfen Anahtar alanını doldurunuz.',
            'settings_value.required' => 'Lütfen Değer alanını doldurunuz.',
            'settings_type.required' => 'Lütfen Tip alanını doldurunuz.',
            /*'settings_must.required' => 'Lütfen Sıralama alanını doldurunuz.',*/
        ];

        $this->validate($request,[
            'settings_description' => 'required|max:255',
            'settings_key' => 'required|max:255',
            'settings_type' => 'required|max:255',
            /* 'settings_must' => 'required|max:3',*/
            'settings_value' => 'required',
        ], $messages);

        $data = Setting::findOrFail($id);
        $data->fill($input)->save();

        /* Important ********** */
        $cache->forget('settings');
        /* //Important ********** */

        $request->session()->flash('alert-success', 'Setting updated successfully!');
        return view('admin.settings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
