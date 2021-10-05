@extends('layouts.user')
@section('content')

<div class="container mt-2">
	@include('partials.alert')
	<div class="row">
		<div class="col-sm-12 text-center">
			<h1>My Posts</h1>
		</div>
	</div>
	<div class="row">
  	@forelse($articles as $article)
    	<div class="col-md-3 col-sm-6 p-2 item">
      		<div class="card item-card card-block p-2">
	    		<img src="{{ asset($article->image) }}" alt="Photo of sunset">
	        	<h5 class="item-card-title mt-3 mb-3">{{ $article->title }}</h5>
	        	<p class="card-text">{{ $article->description }}</p> 
	        	<a href="{{ route('posts.edit', $article->id) }}" class="btn btn-info">Edit</a>
	        	<form action="{{ route('posts.destroy', $article->id) }}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger btn-block mt-2">
						delete
					</button>
				</form>
  			</div>
    	</div>
	@empty
	<center><h3>No Posts Available<a href="{{ route('posts.create') }}"> Create New Post</a></h3></center>
    @endforelse
    </div>
    <br>
</div>


@endsection