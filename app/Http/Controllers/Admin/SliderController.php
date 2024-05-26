<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use SiteHelpers;

class SliderController extends Controller
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

        $slider = Slider::all();
        return view('admin.slider.list', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.new');
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
            'content' => 'required',
            'content2' => 'required',
            'btnText' => 'required',
            'url' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=1920,min_height=1280,max_width=1920,max_height=1280'
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


        Validator::replacer('custom_validation_rule', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':foo', $parameters[0], $message);
        });

        $requestData = $request->all();
        $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('images/sliders', $fileName, 'public');
        $requestData['image'] = '/storage/' . $path;

        Slider::create($requestData);
        toast('Slider Başarıyla Kaydedildi', 'success');
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

        $value = Slider::all()->where('id', $id)->firstOrFail();
        return view('admin.slider.edit', compact('value'));
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
                'content' => 'required',
                'content2' => 'required',
                'btnText' => 'required',
                'url' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=1920,min_height=1280,max_width=1920,max_height=1280'
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


            Validator::replacer('custom_validation_rule', function ($message, $attribute, $rule, $parameters) {
                return str_replace(':foo', $parameters[0], $message);
            });


            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('images/sliders', $fileName, 'public');
            $image = '/storage/' . $path;

            $slider = Slider::findOrFail($id);
            File::delete(public_path( $slider->image));
            $slider->title = $request->input('title');
            $slider->content = $request->input('content');
            $slider->content2 = $request->input('content2');
            $slider->btnText = $request->input('btnText');
            $slider->url = $request->input('url');
            $slider->isActive = $request->input('isActive');
            $slider->image = $image;

            $slider->save();
            toast('Slider Başarıyla Güncellendi', 'success');
            return back();
        } else {
            // Form validation
            $rules = [
                'title' => 'required',
                'content' => 'required',
                'content2' => 'required',
                'btnText' => 'required',
                'url' => 'required'
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


            Validator::replacer('custom_validation_rule', function ($message, $attribute, $rule, $parameters) {
                return str_replace(':foo', $parameters[0], $message);
            });

            $slider = Slider::findOrFail($id);
            $slider->title = $request->input('title');
            $slider->content = $request->input('content');
            $slider->content2 = $request->input('content2');
            $slider->btnText = $request->input('btnText');
            $slider->url = $request->input('url');
            $slider->isActive = $request->input('isActive');
            $slider->save();
            toast('Slider Başarıyla Güncellendi', 'success');
            return back();
        }
    }

    public function deleteImage(Request $request)
    {
        $id = $request->id;
        $root = Slider::findOrFail($id);

        if (!empty($root->image)) {
            SiteHelpers::ImageDelete($root);
        }
        $this->delete($id);

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

    public function delete($id)
    {
        $root = Slider::findOrFail($id);
        $root->delete();
        if ($root) {
            echo 'ok';
        } else {
            echo 'no';
        }

    }
}
