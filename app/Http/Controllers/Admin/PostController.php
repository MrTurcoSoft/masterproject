<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.list', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.new');
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'content' => 'required',
            'tags' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:min_width=1200,min_height=500,max_width=1200,max_height=500',
        ];

        $customMessages = [
            'required' => ':attribute girişi gereklidir.',
            'image' => 'Sadece resim dosyası yükleyebilirsiniz!',
            'mimes' => 'Sadece jpeg,png,jpg,gif,svg uzantılı resim dosyası yükleyebilirsiniz! ',
            'max' => 'Yüklediğiniz resmin büyüklüğü 2048 Kb. dan küçük olmalıdır!',
            'dimensions' => 'Yüklediğiniz resmin Genişliği 1200 px x Yüksekliği 500 px olmalıdır.'
        ];
        $validator = Validator::make($request->all(), $rules, $customMessages);
        if ($validator->fails()) {
            alert('<b><i style="color: red" class="bi bi-x-octagon-fill"></i><br>Hata!</b>', $validator->errors()->first(), 'danger');
            return back();
        }
        Validator::replacer('custom_validation_rule', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':foo', $parameters[0], $message);
        });

        $data = $request->all();

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('images/blogs', $fileName, 'public');
            $image = '/storage/' . $path;
            $data['image'] = $image;
        }
        $data['author'] = Auth::user()->name;
        $post = Post::create($data); Post::create($data);
        if ($request->has('tags')) {
            $tags = explode(',', $request->input('tags'));
            $tagIds = [];
            foreach ($tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => trim($tagName)]);
                $tagIds[] = $tag->id;
            }
            $post->tags()->sync($tagIds);
        }
        toast('Blog Post başarıyla oluşturuldu.', 'success');
        return redirect()->route('posts.index');
    }

    public function edit($id)
    {

        $value = Post::all()->where('id', $id)->firstOrFail();
        return view('admin.posts.edit', compact('value'));
    }

    public function update(Request $request, $id)
    {
        $author = Auth::user()->name;
        $rules = [
            'title' => 'required',
            'content' => 'required',
            'tags' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:min_width=1200,min_height=500,max_width=1200,max_height=500',
        ];

        $customMessages = [
            'required' => ':attribute girişi gereklidir.',
            'image' => 'Sadece resim dosyası yükleyebilirsiniz!',
            'mimes' => 'Sadece jpeg,png,jpg,gif,svg uzantılı resim dosyası yükleyebilirsiniz! ',
            'max' => 'Yüklediğiniz resmin büyüklüğü 2048 Kb. dan küçük olmalıdır!',
            'dimensions' => 'Yüklediğiniz resmin Genişliği 1200 px x Yüksekliği 500 px olmalıdır.'
        ];
        $validator = Validator::make($request->all(), $rules, $customMessages);
        if ($validator->fails()) {
            alert('<b><i style="color: red" class="bi bi-x-octagon-fill"></i><br>Hata!</b>', $validator->errors()->first(), 'danger');
            return back();
        }
        Validator::replacer('custom_validation_rule', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':foo', $parameters[0], $message);
        });


        $post = Post::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::delete('public/' . $post->image);
            }
            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('images/blogs', $fileName, 'public');
            $image = '/storage/' . $path;
            $data['image'] = $image;
        }
        $data['author'] = $author;

        $post->update($data);
        if ($request->has('tags')) {
            $tags = explode(',', $request->input('tags'));
            $tagIds = [];
            foreach ($tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => trim($tagName)]);
                $tagIds[] = $tag->id;
            }
            $post->tags()->sync($tagIds);
        }
        toast('Blog Post başarıyla güncellendi.', 'success');
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        toast('Blog Post başarıyla silindi.', 'success');
        return redirect()->route('posts.index');
    }
}
