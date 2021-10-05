@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-box">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        @foreach($articles as $article)
                        <div class="col-md-4 col-sm-6 p-2 item">
                              <div class="card item-card card-block p-2">
                                <img src="{{  asset($article->image) }}" alt="Photo of sunset">
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
                    @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
