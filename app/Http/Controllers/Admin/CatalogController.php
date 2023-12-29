<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use SiteHelpers;

class CatalogController extends Controller
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
        $catalog = Catalog::all();
        return view('admin.catalog.list', compact('catalog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catalog.new');
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
            'name' => 'required',
            'file' => 'required|mimes:pdf|max:2048',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=750,min_height=450,max_width=750,max_height=450',
            'dimensions' => 'Yüklediğiniz resmin Genişliği 600 px x Yüksekliği 800 px olmalıdır.'
        ];
        $customMessages = [
            'required' => ':attribute girişi gereklidir.',
            'file.mimes' => 'Sadece PDF uzantılı dosya yükleyebilirsiniz! ',
            'file.max' => 'Yüklediğiniz dosyanın büyüklüğü 2048 Kb. dan küçük olmalıdır!',
            'image.mimes' => 'Sadece jpeg,png,jpg,gif,svg uzantılı resim dosyası yükleyebilirsiniz! ',
            'image.max' => 'Yüklediğiniz resmin büyüklüğü 2048 Kb. dan küçük olmalıdır!',
            'dimensions' => 'Yüklediğiniz resmin Genişliği 750 px X Yüksekliği 450 px olmalıdır.'
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
        $fileName =time().'-'. $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs('file/catalog', $fileName, 'public');
        $requestData['file'] = '/storage/' . $path;

        $fileName =time().'-'. $request->file('image')->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('images/catalog', $fileName, 'public');
        $requestData['image'] = '/storage/' . $path;

        Catalog::create($requestData);
        toast('Katalog Başarıyla Eklendi', 'success');
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
        //
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
        //
    }


    public function deleteImage(Request $request)
    {
        $id = $request->id;
        $root = Catalog::findOrFail($id);

        if (!empty($root->file)) {
            Storage::delete($root->file);
        }
        $this->delete($id);
    }

    public function delete($id)
    {
        $root = Catalog::findOrFail($id);
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
