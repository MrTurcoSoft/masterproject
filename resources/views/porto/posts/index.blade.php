@extends('porto.layouts.porto')
@section('title',\SiteHelpers::ayar('mark').' | Blog Posts ')
@section('page-css')


@endsection

@section('content')
    <section class="page-header page-header-modern bg-color-grey page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-dark font-weight-bold text-8">Blog Posts</h1>
                    <span class="sub-title text-dark">Check out our Latest News!</span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Blog Posts</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row">
            <div class="col">
                <div class="blog-posts">

                    <div class="row">
                        @if($posts->count() == 0)
                            <div class="col-md-12">
                                <div class="alert alert-warning">
                                    <strong>Warning!</strong> No posts found.
                                </div>
                            </div>
                        @endif
                        @foreach($posts as $post)
                            <div class="col-md-4">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="{{route('blog-posts.show',$post->slug)}}">
                                            <img src="{{asset($post->image)}}"
                                                 class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                 alt="{{$post->title}}"/>
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a
                                                href="{{route('blog-posts.show',$post->slug)}}">{{$post->title}}</a></h2>
                                        <p>{!! Str::limit($post->content, 150)  !!}...</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">{{$post->author}}</a> </span>
                                            @if($post->tags->count())
                                            <span>
                                                <i class="far fa-folder"></i>
                                                @foreach($post->tags as $tag)
                                                 <a href="#">{{$tag->name}}</a>,
                                                    @endforeach
                                            </span>
                                            @endif
                                            <span>
                                                    <i class="fa-regular fa-eye"></i> {{$post->views}}

                                            </span>
                                            <span class="d-block mt-2"><a href="{{route('blog-posts.show',$post->slug)}}"
                                                                          class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>
                        @endforeach


                    </div>

                    {{ $posts->links('vendor.pagination.custom') }}


                </div>
            </div>

        </div>

    </div>

@endsection


@section('page-js')

    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        })
    </script>

@endsection
