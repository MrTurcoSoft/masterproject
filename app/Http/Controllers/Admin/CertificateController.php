<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use SiteHelpers;

class CertificateController extends Controller
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
        $certificate = Certificate::all();
        return view('admin.certificate.list', compact('certificate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.certificate.new');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=600,min_height=800,max_width=600,max_height=800'
        ];
        $customMessages = [
            'required' => ':attribute girişi gereklidir.',
            'image' => 'Sadece resim dosyası yükleyebilirsiniz!',
            'mimes' => 'Sadece jpeg,png,jpg,gif,svg uzantılı resim dosyası yükleyebilirsiniz! ',
            'max' => 'Yüklediğiniz resmin büyüklüğü 2048 Kb. dan küçük olmalıdır!',
            'dimensions' => 'Yüklediğiniz resmin Genişliği 600 px x Yüksekliği 800 px olmalıdır.'
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
        $path = $request->file('image')->storeAs('images/certificates', $fileName, 'public');
        $requestData['image'] = '/storage/' . $path;

        Certificate::create($requestData);
        toast('Sertifika/Belge Başarıyla Eklendi', 'success');
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
        $value = Certificate::all()->where('id', $id)->firstOrFail();
        return view('admin.certificate.edit', compact('value'));
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
        if ($request->image) {
            // Form validation
            $rules = [
                'name' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=600,min_height=800,max_width=600,max_height=800'
            ];
            $customMessages = [
                'required' => ':attribute girişi gereklidir.',
                'image' => 'Sadece resim dosyası yükleyebilirsiniz!',
                'mimes' => 'Sadece jpeg,png,jpg,gif,svg uzantılı resim dosyası yükleyebilirsiniz! ',
                'max' => 'Yüklediğiniz resmin büyüklüğü 2048 Kb. dan küçük olmalıdır!',
                'dimensions' => 'Yüklediğiniz resmin Genişliği 600 px x Yüksekliği 800 px olmalıdır.'
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
            $path = $request->file('image')->storeAs('images/certificates', $fileName, 'public');
            $image = '/storage/' . $path;

            $root = Certificate::findOrFail($id);
            File::delete(public_path( $root->image));
            $root->name = $request->input('name');
            $root->isActive = $request->input('isActive');
            $root->image = $image;
            $root->save();
            toast('Sertifika/Belge Başarıyla Güncellendi', 'success');
            return back();

        } else {
            // Form validation
            $rules = [
                'name' => 'required'
            ];
            $customMessages = [
                'required' => ':attribute girişi gereklidir.',
                'image' => 'Sadece resim dosyası yükleyebilirsiniz!',
                'mimes' => 'Sadece jpeg,png,jpg,gif,svg uzantılı resim dosyası yükleyebilirsiniz! ',
                'max' => 'Yüklediğiniz resmin büyüklüğü 2048 Kb. dan küçük olmalıdır!',
                'dimensions' => 'Yüklediğiniz resmin Genişliği 600 px x Yüksekliği 800 px olmalıdır.'
            ];
            $validator = Validator::make($request->all(), $rules, $customMessages);
            if ($validator->fails()) {
                alert('<b><i style="color: red" class="bi bi-x-octagon-fill"></i><br>Hata!</b>', $validator->errors()->first(), 'danger');
                return back();
            }
            Validator::replacer('custom_validation_rule', function ($message, $attribute, $rule, $parameters) {
                return str_replace(':foo', $parameters[0], $message);
            });

            $root = Certificate::findOrFail($id);
            $root->name = $request->input('name');
            $root->isActive = $request->input('isActive');
            $root->save();
            toast('Sertifika/Belge Başarıyla Güncellendi', 'success');
            return back();
        }
    }


    public function deleteImage(Request $request)
    {
        $id = $request->id;
        $root = Certificate::findOrFail($id);

        if (!empty($root->image)) {
            SiteHelpers::ImageDelete($root);
        }
        $this->delete($id);
    }

    public function delete($id)
    {
        $root = Certificate::findOrFail($id);
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
