<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use SiteHelpers;

class AboutController extends Controller
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
        $about = About::all()->first();
        return view('admin.about.list', compact('about'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$type)
    {

        $value = About::all()->where('id', $id)->firstOrFail();
        return view('admin.about.edit', compact('value','type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->bg) {
            // Form validation
            $rules = [
                'bg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=1080,min_height=1080,max_width=1080,max_height=1080'
            ];

            $customMessages = [
                'required' => ':attribute girişi gereklidir.',
                'image' => 'Sadece resim dosyası yükleyebilirsiniz!',
                'mimes' => 'Sadece jpeg,png,jpg,gif,svg uzantılı resim dosyası yükleyebilirsiniz! ',
                'max' => 'Yüklediğiniz resmin büyüklüğü 2048 Kb. dan küçük olmalıdır!',
                'dimensions' => 'Yüklediğiniz resmin Genişliği 1080 px x Yüksekliği 1080 px olmalıdır.'
            ];
            $validator = Validator::make($request->all(), $rules, $customMessages);
            if ($validator->fails()) {
                alert('<b><i style="color: red" class="bi bi-x-octagon-fill"></i><br>Hata!</b>', $validator->errors()->first(), 'danger');
                return back();
            }
            Validator::replacer('custom_validation_rule', function ($message, $attribute, $rule, $parameters) {
                return str_replace(':foo', $parameters[0], $message);
            });
            $fileName = time() . '.' . $request->file('bg')->getClientOriginalExtension();
            $path = $request->file('bg')->storeAs('images/about', $fileName, 'public');
            $image = '/storage/' . $path;

            $root=About::findOrFail($id);
            File::delete(public_path( $root->bg));
            $root->bg=$image;
            $root->save();
            toast('Header Arka Planı Başarıyla Güncellendi', 'success');
            return back();
        } elseif ($request->image) {
            // Form validation
            $rules = [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=3000,min_height=3000,max_width=3000,max_height=3000'
            ];

            $customMessages = [
                'required' => ':attribute girişi gereklidir.',
                'image' => 'Sadece resim dosyası yükleyebilirsiniz!',
                'mimes' => 'Sadece jpeg,png,jpg,gif,svg uzantılı resim dosyası yükleyebilirsiniz! ',
                'max' => 'Yüklediğiniz resmin büyüklüğü 2048 Kb. dan küçük olmalıdır!',
                'dimensions' => 'Yüklediğiniz resmin Genişliği 3000 px x Yüksekliği 3000 px olmalıdır.'
            ];
            $validator = Validator::make($request->all(), $rules, $customMessages);
            if ($validator->fails()) {
                alert('<b><i style="color: red" class="bi bi-x-octagon-fill"></i><br>Hata!</b>', $validator->errors()->first(), 'danger');
                return back();
            }
            Validator::replacer('custom_validation_rule', function ($message, $attribute, $rule, $parameters) {
                return str_replace(':foo', $parameters[0], $message);
            });
            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('images/about', $fileName, 'public');
            $image = '/storage/' . $path;

            $root=About::findOrFail($id);
            File::delete(public_path( $root->image));
            $root->image=$image;
            $root->save();
            toast('Hakkımızda Resmi Başarıyla Güncellendi', 'success');
            return back();
        } else {
            // Form validation
            $rules = [
                'name' => 'required',
                'description' => 'required'
            ];
            $customMessages = [
                'required' => ':attribute girişi gereklidir.',
            ];
            $validator = Validator::make($request->all(), $rules, $customMessages);
            if ($validator->fails()) {
                alert('<b><i style="color: red" class="bi bi-x-octagon-fill"></i><br>Hata!</b>', $validator->errors()->first(), 'danger');
                return back();
            }
            Validator::replacer('custom_validation_rule', function ($message, $attribute, $rule, $parameters) {
                return str_replace(':foo', $parameters[0], $message);
            });
            $root = About::findOrFail($id);
            $root->name = $request->name;
            $root->description = $request->description;
            $root->slug = SiteHelpers::slugify($request->name);
            $root->save();
            toast('Hakkımızda İeriği Başarıyla Güncellendi', 'success');
            return back();

        }
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
