<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use SiteHelpers;

class CategoryController extends Controller
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
        $categories = Category::all();
        return view('admin.category.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        $rules = [
            'cat_name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'must' => 'required',
            'cat_bg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=1080,min_height=1080,max_width=1080,max_height=1080'
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

        $requestData = $request->all();
        $fileName = time() . '.' . $request->file('cat_bg')->getClientOriginalExtension();
        $path = $request->file('cat_bg')->storeAs('images/category', $fileName, 'public');
        $requestData['cat_bg'] = '/storage/' . $path;
        $requestData['slug'] = SiteHelpers::slugify($request->cat_name);

        Category::create($requestData);
        toast('Kategori Başarıyla Kaydedildi', 'success');
        return back();
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
    public function edit($id)
    {
        $value = Category::all()->where('id', $id)->firstOrFail();
        return view('admin.category.edit', compact('value'));
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
        if ($request->cat_bg) {
          // Form validation
            $rules = [
                'cat_name' => 'required',
                'title' => 'required',
                'description' => 'required',
                'must' => 'required',
                'cat_bg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=1080,min_height=1080,max_width=1080,max_height=1080'
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
            $fileName = time() . '.' . $request->file('cat_bg')->getClientOriginalExtension();
            $path = $request->file('cat_bg')->storeAs('images/category', $fileName, 'public');
            $image = '/storage/' . $path;
            $root = Category::findOrFail($id);
            File::delete(public_path( $root->cat_bg));
            $root->cat_name = $request->input('cat_name');
            $root->title = $request->input('title');
            $root->description = $request->input('description');
            $root->must = $request->input('must');
            $root->isActive = $request->input('isActive');
            $root->cat_bg = $image;
            $root->slug = SiteHelpers::slugify($request->input('cat_name'));
            $root->save();
            toast('Kategori Başarıyla Güncellendi', 'success');
            return back();
        } else {
            // Form validation
            $rules = [
                'cat_name' => 'required',
                'title' => 'required',
                'description' => 'required',
                'must' => 'required',
            ];

            $customMessages = [
                'required' => ':attribute girişi gereklidir.',
                'image' => 'Sadece resim dosyası yükleyebilirsiniz!',
                'mimes' => 'Sadece jpeg,png,jpg,gif,svg uzantılı resim dosyası yükleyebilirsiniz! ',
                'max' => 'Yüklediğiniz resmin büyüklüğü 2048 Kb. dan küçük olmalıdır!',
                'dimensions' => 'Yüklediğiniz resmin Genişliği 600 px x Yüksekliği 600 px olmalıdır.'
            ];

            $validator = Validator::make($request->all(), $rules, $customMessages);

            if ($validator->fails()) {
                alert('<b><i style="color: red" class="bi bi-x-octagon-fill"></i><br>Hata!</b>', $validator->errors()->first(), 'danger');
                return back();
            }
            $root = Category::findOrFail($id);
            $root->cat_name = $request->input('cat_name');
            $root->title = $request->input('title');
            $root->description = $request->input('description');
            $root->must = $request->input('must');
            $root->isActive = $request->input('isActive');
            $root->slug = SiteHelpers::slugify($request->input('cat_name'));
            $root->save();
            toast('Kategori Başarıyla Güncellendi', 'success');
            return back();
        }
    }

    public function deleteImage(Request $request)
    {
        $id = $request->id;
        $root = Category::findOrFail($id);
if ($root->urunler()->count() < 1) {
    if (!empty($root->cat_bg)) {
        SiteHelpers::CatBgDelete($root);
    }
    $this->delete($id);
} else {
    alert('<b><i style="color: red" class="bi bi-x-octagon-fill"></i><br>Silemezsiniz!</b>', 'Önce Kategoriye Ait ürünleri silmelisiniz. Kategoride '.$root->urunler()->count().' Adet Ürün var!', 'danger');
    echo 'no';
}

    }

    public function delete($id)
    {
        $root = Category::findOrFail($id);
        $root->delete();
        if ($root) {
            echo 'ok';
        } else {
            echo 'no';
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
