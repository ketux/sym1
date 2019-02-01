@extends('layouts.app')

@section('content')
	<a href="http://localhost/laravelis/2017.06.07/manoprojektas/public/posts" class="btn btn-default"> Go back</a>
	<h1>{{$post->title}}</h1>
					<div>
						{{$post->body}}
					</div>
	<hr>
		<small>Written on {{ $post->created_at}}</small>

@endsection