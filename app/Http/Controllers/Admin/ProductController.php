<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use SiteHelpers;

class ProductController extends Controller
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
        $products = Product::all();
        return view('admin.product.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.new',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = $request->categories;
        $data = $request->only('name', 'title', 'slug', 'description', 'must', 'isActive', 'image');
        $data_detay = $request->only('volume', 'boxsize', 'qtyBox', 'BoxNetW', 'BoxGrossW','BoxOnPallet','hsCode','barcode');
// Form validation
        $rules = [
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'must' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=800,min_height=600,max_width=800,max_height=600'
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
        $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('images/products', $fileName, 'public');
        $data['image'] = '/storage/' . $path;


        $data['slug'] = SiteHelpers::slugify($data['name'].'-'.$data['title']);
        $root = Product::create($data);
        $root->detay()->create($data_detay);
        $category=[];
        foreach ($categories as $category) {
            $value = Category::whereId($category)->firstOrFail();
            $root->kategoriler()->attach($value->id);
        }
        toast('Ürün Başarıyla Eklendi', 'success');
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
        $value = Product::all()->where('id', $id)->firstOrFail();
        $product_cat = $value->kategoriler()->pluck('category_id')->all();
        $categories = Category::all();
        return view('admin.product.edit', compact('value','categories','product_cat'));
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
        $root = Product::findOrFail($id);
        $categories = $request->categories;
        $data = $request->only('name', 'title', 'slug', 'description', 'must', 'isActive', 'image');
        $data_detay = $request->only('volume', 'boxsize', 'qtyBox', 'BoxNetW', 'BoxGrossW','BoxOnPallet','hsCode','barcode');

        if ($request->image) {
            // Form validation
            $rules = [
                'name' => 'required',
                'title' => 'required',
                'description' => 'required',
                'must' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=800,min_height=600,max_width=800,max_height=600'
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
            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('images/products', $fileName, 'public');
            $image = '/storage/' . $path;

            File::delete(public_path( $root->image));
            $root->name = $data['name'];
            $root->title = $data['title'];
            $root->description = $data['description'];
            $root->must = $data['must'];
            $root->isActive = $data['isActive'];
            $root->slug = SiteHelpers::slugify($data['name'].'-'.$data['title']);
            $root->image = $image;
            $root->save();
            $root->detay()->update($data_detay);
            $category=[];
            $root->kategoriler()->sync($category);
            foreach ($categories as $category) {
                $value = Category::whereId($category)->firstOrFail();
                $root->kategoriler()->attach($value->id);
            }
            toast('Ürün Başarıyla Güncellendi', 'success');
            return back();
        } elseif (!$request->image) {

                // Form validation
                $rules = [
                    'name' => 'required',
                    'title' => 'required',
                    'description' => 'required',
                    'must' => 'required',
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

                $root->name = $data['name'];
                $root->title = $data['title'];
                $root->description = $data['description'];
                $root->must = $data['must'];
                $root->isActive = $data['isActive'];
                $root->slug = SiteHelpers::slugify($data['name'].'-'.$data['title']);
                $root->save();
                $root->detay()->update($data_detay);
                $category=[];
                $root->kategoriler()->sync($category);
                foreach ($categories as $category) {
                    $value = Category::whereId($category)->firstOrFail();
                    $root->kategoriler()->attach($value->id);
                }
                toast('Ürün Başarıyla Güncellendi', 'success');
                return back();

        }
    }

    public function deleteImage(Request $request)
    {
        $id = $request->id;
        $root = Product::findOrFail($id);
            if (!empty($root->image)) {
                SiteHelpers::ImageDelete($root);
            }
            $this->delete($id);
    }

    public function delete($id)
    {
        $root = Product::findOrFail($id);
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
