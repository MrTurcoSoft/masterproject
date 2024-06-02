<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Contracts\Cache\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


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
        if (Auth::user()->isAdmin == 0) {
            $settings = Setting::all()->sortBy('settings_must');
        } else {
            $settings = Setting::all()->where('see_is_user', 1)->sortBy('settings_must');
        }
        return view('admin.settings.list', compact('settings'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Factory $cache)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $type)
    {
        $setting = Setting::findOrFail($id);
        return view('admin.settings.edit', compact('setting', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Factory $cache)
    {

        $input = $request->all();
        $data = Setting::findOrFail($id);

        if ($request->settings_type == 'textarea' || $request->settings_type == 'text' || $request->settings_type == 'switch') {
            // Form validation
            $rules = [
                'settings_value' => 'required'
            ];

            $customMessages = [
                'required' => ':attribute girişi gereklidir.',
                'image' => 'Sadece resim dosyası yükleyebilirsiniz!',
                'mimes' => 'Sadece jpeg,png,jpg,gif,svg uzantılı resim dosyası yükleyebilirsiniz! ',
                'max' => 'Yüklediğiniz resmin büyüklüğü 2048 Kb. dan küçük olmalıdır!',
                'dimensions' => 'Yüklediğiniz resmin Genişliği 800 px x Yüksekliği 600 px olmalıdır.'
            ];

            $validator = Validator::make($request->all(), $rules, $customMessages);

            if ($validator->fails()) {
                alert('<b><i style="color: red" class="bi bi-x-octagon-fill"></i><br>Hata!</b>', $validator->errors()->first(), 'danger');
                return back();
            }
            $data->fill($input)->save();
            /* Important ********** */
            $cache->forget('settings');
            /* //Important ********** */

            toast('Site Ayarı Başarıyla Güncellendi', 'success');
            return back();
        } elseif ($request->settings_key == 'logo')
        {
            // Form validation
            $rules = [
                'settings_value' => 'required|image|mimes:png,svg|max:2048|dimensions:min_width=1450,min_height=816,max_width=1450,max_height=816'
            ];

            $customMessages = [
                'required' => ':attribute girişi gereklidir.',
                'image' => 'Sadece resim dosyası yükleyebilirsiniz!',
                'mimes' => 'Sadece png veya svg uzantılı resim dosyası yükleyebilirsiniz! ',
                'max' => 'Yüklediğiniz resmin büyüklüğü 2048 Kb. dan küçük olmalıdır!',
                'dimensions' => 'Yüklediğiniz resmin Genişliği 1450 px x Yüksekliği 816 px olmalıdır.'
            ];

            $validator = Validator::make($request->all(), $rules, $customMessages);

            if ($validator->fails()) {
                alert('<b><i style="color: red" class="bi bi-x-octagon-fill"></i><br>Hata!</b>', $validator->errors()->first(), 'danger');
                return back();
            }
            $fileName = time() . '.' . $request->file('settings_value')->getClientOriginalExtension();
            $path = $request->file('settings_value')->storeAs('images/settings', $fileName, 'public');
            $input['settings_value'] = '/storage/' . $path;
            File::delete(public_path( $data->settings_value));
            $data->fill($input)->save();
            /* Important ********** */
            $cache->forget('settings');
            /* //Important ********** */

            toast('Logo Başarıyla Güncellendi', 'success');
            return back();
        } elseif($request->settings_key == 'slogo')
        {
            // Form validation
            $rules = [
                'settings_value' => 'required|image|mimes:png,svg|max:2048|dimensions:min_width=730,min_height=411,max_width=730,max_height=411'
            ];

            $customMessages = [
                'required' => ':attribute girişi gereklidir.',
                'image' => 'Sadece resim dosyası yükleyebilirsiniz!',
                'mimes' => 'Sadece png veya svg uzantılı resim dosyası yükleyebilirsiniz! ',
                'max' => 'Yüklediğiniz resmin büyüklüğü 2048 Kb. dan küçük olmalıdır!',
                'dimensions' => 'Yüklediğiniz resmin Genişliği 730 px x Yüksekliği 411 px olmalıdır.'
            ];

            $validator = Validator::make($request->all(), $rules, $customMessages);

            if ($validator->fails()) {
                alert('<b><i style="color: red" class="bi bi-x-octagon-fill"></i><br>Hata!</b>', $validator->errors()->first(), 'danger');
                return back();
            }
            $fileName = time() . '.' . $request->file('settings_value')->getClientOriginalExtension();
            $path = $request->file('settings_value')->storeAs('images/settings', $fileName, 'public');
            $input['settings_value'] = '/storage/' . $path;
            File::delete(public_path( $data->settings_value));
            $data->fill($input)->save();
            /* Important ********** */
            $cache->forget('settings');
            /* //Important ********** */

            toast('Logo Başarıyla Güncellendi', 'success');
            return back();
        } elseif($request->settings_key == 'favicon')
        {
            // Form validation
            $rules = [
                'settings_value' => 'required|image|mimes:png,svg|max:2048|dimensions:min_width=100,min_height=56,max_width=100,max_height=56'
            ];

            $customMessages = [
                'required' => ':attribute girişi gereklidir.',
                'image' => 'Sadece resim dosyası yükleyebilirsiniz!',
                'mimes' => 'Sadece png veya svg uzantılı resim dosyası yükleyebilirsiniz! ',
                'max' => 'Yüklediğiniz resmin büyüklüğü 2048 Kb. dan küçük olmalıdır!',
                'dimensions' => 'Yüklediğiniz resmin Genişliği 100 px x Yüksekliği 56 px olmalıdır.'
            ];

            $validator = Validator::make($request->all(), $rules, $customMessages);

            if ($validator->fails()) {
                alert('<b><i style="color: red" class="bi bi-x-octagon-fill"></i><br>Hata!</b>', $validator->errors()->first(), 'danger');
                return back();
            }
            $fileName = time() . '.' . $request->file('settings_value')->getClientOriginalExtension();
            $path = $request->file('settings_value')->storeAs('images/settings', $fileName, 'public');
            $input['settings_value'] = '/storage/' . $path;
            File::delete(public_path( $data->settings_value));
            $data->fill($input)->save();
            /* Important ********** */
            $cache->forget('settings');
            /* //Important ********** */

            toast('Logo Başarıyla Güncellendi', 'success');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
