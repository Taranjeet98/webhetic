@extends('layouts.user')
@section('content')

<div class="container mt-2">
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('posts.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Title</label>
                <input class="form-control" id="title" placeholder="Post Title" name="title" value="{{ $article->title }}">
              </div>
              <div class="form-group col-md-6">
                <label>Slug</label>
                <input class="form-control" id="slug" placeholder="Slug" name="slug" value="{{ $article->slug }}">
              </div>
            </div>
            <div class="">
              <label class="form-label">Image</label>
              <input type="file" class="form-control" id="postimage" name="image" />
            </div>
            <div class="form-group">
              <label>Sub Title</label>
              <input class="form-control" id="sub-title" placeholder="Post Sub title" name="sub_title" value="{{ $article->sub_title }}">
            </div>
            <div class="form-group">
              <label>Description</label>
              <input class="form-control" id="des" placeholder="Post Description" name="description" value="{{ $article->description }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-sm-2"></div>
</div>
</div>

@endsection