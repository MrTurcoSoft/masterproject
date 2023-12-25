<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SectionTab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use SiteHelpers;

class SectiontabsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = SectionTab::all();
        return view('admin.sectiontabs.list', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sectiontabs.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'btnText' => 'required',
            'url' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=600,min_height=600,max_width=600,max_height=600'
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


        Validator::replacer('custom_validation_rule', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':foo', $parameters[0], $message);
        });

        $requestData = $request->all();
        $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('images/sectiontabs', $fileName, 'public');
        $requestData['image'] = '/storage/' . $path;

        SectionTab::create($requestData);
        toast('Tab Başarıyla Kaydedildi', 'success');
        return back();
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
    public function edit($id)
    {
        $value = SectionTab::all()->where('id', $id)->firstOrFail();
        return view('admin.sectiontabs.edit', compact('value'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->image) {
            // Form validation
            $rules = [
                'title' => 'required',
                'description' => 'required',
                'btnText' => 'required',
                'url' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=600,min_height=600,max_width=600,max_height=600'
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
            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('images/sectiontabs', $fileName, 'public');
            $image = '/storage/' . $path;
            $root = SectionTab::findOrFail($id);
            File::delete(public_path( $root->image));
            $root->title = $request->input('title');
            $root->description = $request->input('description');
            $root->btnText = $request->input('btnText');
            $root->url = $request->input('url');
            $root->isActive = $request->input('isActive');
            $root->image = $image;
            $root->save();
            toast('Tab Başarıyla Güncellendi', 'success');
            return back();
        } else {
            // Form validation
            $rules = [
                'title' => 'required',
                'description' => 'required',
                'btnText' => 'required',
                'url' => 'required'
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
            $root = SectionTab::findOrFail($id);
            $root->title = $request->input('title');
            $root->description = $request->input('description');
            $root->btnText = $request->input('btnText');
            $root->url = $request->input('url');
            $root->isActive = $request->input('isActive');
            $root->save();
            toast('Tab Başarıyla Güncellendi', 'success');
            return back();
        }
    }

    public function deleteImage(Request $request)
    {
        $id = $request->id;
        $root = SectionTab::findOrFail($id);
        if (SectionTab::all()->where('isActive', 1)->count() > 4) {
            if (!empty($root->image)) {
                SiteHelpers::ImageDelete($root);
            }
            $this->delete($id);
        } else {
            alert('<b><i style="color: red" class="bi bi-x-octagon-fill"></i><br>Silemezsiniz!</b>', 'Aktif en az 4 tane Tab Kaydı bulunması gerekiyor', 'danger');
            echo 'no';
        }
    }

    public function delete($id)
    {
        $root = SectionTab::findOrFail($id);
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
