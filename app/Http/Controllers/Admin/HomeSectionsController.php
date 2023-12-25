<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Homesection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeSectionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        parent::__construct();
        $user = Auth::User();
        Session::put('user', $user);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Homesection::all();
        return view('admin.homesections.list', compact('sections'));

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
    public function edit($id,$section)
    {
        $value = Homesection::all()->where('id', $id)->firstOrFail();
        return view('admin.homesections.edit', compact('value','section'));
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
        if ($request->section == 1)
        {
            // Form validation
            $rules = [
                'title' => 'required',
                'description' => 'required'
            ];

            $customMessages = [
                'required' => ':attribute girişi gereklidir.',
                'image' => 'Sadece resim dosyası yükleyebilirsiniz!',
                'mimes' => 'Sadece jpeg,png,jpg,gif,svg uzantılı resim dosyası yükleyebilirsiniz! ',
                'max' => 'Yüklediğiniz resmin büyüklüğü 2048 Kb. dan küçük olmalıdır!',
                'dimensions' => 'Yüklediğiniz resmin Genişliği 1920 px x Yüksekliği 1280 px olmalıdır.'
            ];

            $validator = Validator::make($request->all(), $rules, $customMessages);

            if ($validator->fails()) {
                alert('<b><i style="color: red" class="bi bi-x-octagon-fill"></i><br>Hata!</b>', $validator->errors()->first(), 'danger');
                return back();
            }
            $root = Homesection::findOrFail($id);
            $root->title = $request->input('title');
            $root->description = $request->input('description');
            $root->save();
            toast('Bölüm 1 Başarıyla Güncellendi', 'success');
            return back();

        } elseif ($request->section == 2)
        {
            // Form validation
            $rules = [
                'title' => 'required',
                'description' => 'required',
                'btnText'=> 'required',
                'url' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=1000,min_height=1000,max_width=1000,max_height=1000'
            ];

            $customMessages = [
                'required' => ':attribute girişi gereklidir.',
                'image' => 'Sadece resim dosyası yükleyebilirsiniz!',
                'mimes' => 'Sadece jpeg,png,jpg,gif,svg uzantılı resim dosyası yükleyebilirsiniz! ',
                'max' => 'Yüklediğiniz resmin büyüklüğü 2048 Kb. dan küçük olmalıdır!',
                'dimensions' => 'Yüklediğiniz resmin Genişliği 1000 px x Yüksekliği 1000 px olmalıdır.'
            ];

            $validator = Validator::make($request->all(), $rules, $customMessages);

            if ($validator->fails()) {
                alert('<b><i style="color: red" class="bi bi-x-octagon-fill"></i><br>Hata!</b>', $validator->errors()->first(), 'danger');
                return back();
            }
            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('images/homesections', $fileName, 'public');
            $image = '/storage/' . $path;
            $root = Homesection::findOrFail($id);
            File::delete(public_path( $root->image));
            $root->title = $request->input('title');
            $root->description = $request->input('description');
            $root->btnText = $request->input('btnText');
            $root->url = $request->input('url');
            $root->image = $image;
            $root->save();
            toast('Bölüm 2 Başarıyla Güncellendi', 'success');
            return back();
        } elseif ($request->section == 4)
        {
            // Form validation
            $rules = [
                'title' => 'required',
                'btnText'=> 'required',
                'url' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=2000,min_height=2000,max_width=2000,max_height=2000'
            ];

            $customMessages = [
                'required' => ':attribute girişi gereklidir.',
                'image' => 'Sadece resim dosyası yükleyebilirsiniz!',
                'mimes' => 'Sadece jpeg,png,jpg,gif,svg uzantılı resim dosyası yükleyebilirsiniz! ',
                'max' => 'Yüklediğiniz resmin büyüklüğü 2048 Kb. dan küçük olmalıdır!',
                'dimensions' => 'Yüklediğiniz resmin Genişliği 2000 px x Yüksekliği 2000 px olmalıdır.'
            ];

            $validator = Validator::make($request->all(), $rules, $customMessages);

            if ($validator->fails()) {
                alert('<b><i style="color: red" class="bi bi-x-octagon-fill"></i><br>Hata!</b>', $validator->errors()->first(), 'danger');
                return back();
            }
            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('images/homesections', $fileName, 'public');
            $image = '/storage/' . $path;
            $root = Homesection::findOrFail($id);
            File::delete(public_path( $root->image));
            $root->title = $request->input('title');
            $root->btnText = $request->input('btnText');
            $root->url = $request->input('url');
            $root->image = $image;
            $root->save();
            toast('Bölüm 4 Başarıyla Güncellendi', 'success');
            return back();
        }
    }


    public function deleteImage(Request $request)
    {
        //
    }

    public function delete($id)
    {
        //

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
