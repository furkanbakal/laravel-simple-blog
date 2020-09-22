@extends('back.layouts.master')
@section('title',$article->title.' makalesini güncelle')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">@yield('title') 
            </div>
            <div class="card-body">
            @if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach        
        </div>
        @endif
           <form method="post" action="{{route('admin.makaleler.update',$article->id)}}" enctype="multipart/form-data">
           @method('PUT')
           @csrf
           <div class="form-group">
           <label>Makale Başlığı</label>
           <input type="text" name="title" class="form-control" value="{{$article->title}}" required></input>
           </div>
           <div class="form-group">
           <label>Makale Kategori</label>
           <select name="category" class="form-control" required>
           <option value="">Seçim yapınız</option>
           @foreach($categories as $category)
           <option @if($article->category_id==$category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
           @endforeach
           </select>
           </div>
           <div class="form-group">
           <label>Makale Fotograf</label><br  />
           <img src="{{asset($article->image)}}" class="img-thumbnail rounded" width="300"/>
           <input type="file" name="image" class="form-control" ></input>
           </div>
           <div class="form-group">
           <label>Makale İçeriği</label>
           <textarea  id="editor" name="content" class="form-control"  rows="4">{!! $article->content !!}</textarea>
           </div>
           <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Makaleyi güncelle</button>
           </div>
           </form>
            </div>
          </div>
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(document).ready(function() {
  $('#editor').summernote();

});
</script>
@endsection