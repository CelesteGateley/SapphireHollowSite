@extends('layouts.container')

@section('title', 'Create News Item')

@section('content')
    @include('partials.news.max', [
                'title' => $news->title,
                'body' => $news->body,
                'date' => $news->updated_at,
             ])
@endsection