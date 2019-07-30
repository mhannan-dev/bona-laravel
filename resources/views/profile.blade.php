@extends('layouts.frontEnd.app')
@section('title')
    {{ $author->name }}
@endsection
@push('css')
    <link href="{{ asset('assets/frontEnd/front-page-category/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontEnd/front-page-category/css/responsive.css') }}" rel="stylesheet">
    <style>
        .favorite_posts{
            color: blue;
        }
        .new_section {
            padding: 10px 0 10px;
        }

    </style>

@endpush

@section('content')

        <section class="jumbotron text-center">
            <div class="container">
                <h3 class="jumbotron-heading text-muted">Posts by <button class="btn btn-primary btn-outline-primary">{{ $author->name }}</button></h3>
                <p class="text-muted">{{ $author->about }}</p>

            </div>
        </section>

        <section class="blog-area section new_section">
            <div class="container">

                <div class="row">
                    @foreach($posts as $post)

                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <div class="single-post post-style-1">

                                <div class="blog-image"><img src="{{ asset('storage/post/'.$post->image) }}" alt="Blog Image"></div>

                                <div class="blog-info">

                                    <h4 class="title"><a href="{{ route('post.details',$post->slug) }}"><b>{{ $post->title }}</b></a></h4>

                                    <ul class="post-footer">
                                        <li>@guest
                                                <a href="javascript:void(0);" onclick="toastr.info('To add favorite list. You need to login first.','Info',{
                                                    closeButton: true,
                                                    progressBar: true,
                                                })"><i class="ion-heart"></i>{{ $post->favorite_to_users->count() }}</a>
                                            @else
                                                <a href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $post->id }}').submit();"
                                                   class="{{ !Auth::user()->favorite_posts->where('pivot.post_id',$post->id)->count()  == 0 ? 'favorite_posts' : ''}}"><i class="ion-heart"></i>{{ $post->favorite_to_users->count() }}</a>

                                                <form id="favorite-form-{{ $post->id }}" method="POST" action="{{ route('post.favorite',$post->id) }}" style="display: none;">
                                                    @csrf
                                                </form>
                                            @endguest</li>
                                        <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                        <li><a href="#"><i class="ion-eye"></i>{{ $post->view_count }}</a></li>
                                    </ul>

                                </div><!-- blog-info -->
                            </div><!-- single-post -->
                        </div><!-- card -->
                    </div><!-- col-lg-4 col-md-6 -->
                    @endforeach






                </div>
            </div>
        </section>




@endsection

@push('js')


@endpush
