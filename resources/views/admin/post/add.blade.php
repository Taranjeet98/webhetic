@extends('layouts.app')
@section('content')

<div class="container mt-2">
<div class="row">
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Title</label>
      <input class="form-control" id="title" placeholder="Post Title" name="title">
    </div>
    <div class="form-group col-md-6">
      <label>Slug</label>
      <input class="form-control" id="slug" placeholder="Slug" name="slug">
    </div>
  </div>
  <div class="">
    <label class="form-label">Image</label>
    <input type="file" class="form-control" id="postimage" name="image" />
  </div>
  <div class="form-group">
    <label>Sub Title</label>
    <input class="form-control" id="sub-title" placeholder="Post Sub title" name="sub_title">
  </div>
  <div class="form-group">
    <label>Description</label>
    <input class="form-control" id="des" placeholder="Post Description" name="description">
  </div>
  <button type="submit" class="btn btn-primary">Add New Post</button>
</form>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script type="text/javascript">
  $("#title").on('keyup', function()
  {
    var theTitle = this.value.toLowerCase().trim();
    slugInput =$('#slug'),
    theSlug = theTitle.replace(/&/g,'-and-')
    .replace(/[^a-z0-9-]+/g,'-')
    .replace(/\-\-+/g,'-')
    .replace(/^-+|-+&/g,"");
    slugInput.val(theSlug);
  });
</script>

@endsection