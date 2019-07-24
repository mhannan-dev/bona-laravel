@extends('layouts.frontend.app')

@section('title')
    {{ $post->title }}
@endsection

@push('css')

    <link href="{{ asset('assets/frontEnd/single-post-1/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontEnd/single-post-1/css/responsive.css') }}" rel="stylesheet">

    <link href="" rel="stylesheet">
    <style>
        .header-bg{
            height: 400px;
            width: 100%;
            background-image: url({{ Storage::disk('public')->url('post/'.$post->image) }});
            background-size: cover;
        }
        .favorite_posts{
            color: blue;
        }
    </style>
@endpush

@section('content')
@foreach($post as $post_data)
    {{ $post_data->title }}
    @endforeach
@endsection

@push('js')

@endpush
