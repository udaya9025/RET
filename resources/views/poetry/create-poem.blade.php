@extends('layouts.app')
@section('title')
Add New Post
@endsection
@section('content')
<script type="text/javascript" src="{{ asset('/js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
  tinymce.init({
    selector : "textarea",
    plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
    toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
  }); 
</script>
<div class="row" align="center">
<form action="poetry/save" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
  <label for="title" style="margin-right:50%;">
    <strong>Title:</strong>
  </label>
    <input required="required" value="{{ old('title') }}" placeholder="Enter title here" type="text" name = "title" class="form-control"  style="width:50%;" />
  </div>
  <div class="form-group" >
  <label for="body" style="margin-right:50%;">Poem:</label>
    <textarea name='body' class="form-control" style="width:50%;">{{ old('body') }}</textarea>
  </div>
  <input type="submit" name='publish' class="btn btn-success" value = "Publish" style="margin-left:5%"/>
  <!-- <input type="submit" name='save' class="btn btn-default" value = "Save Draft" /> -->
</form>
</div>
@endsection