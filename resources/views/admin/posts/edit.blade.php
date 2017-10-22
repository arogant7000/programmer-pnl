@extends('admin.master')

@section('page_title')
 Edit Postingan
@endsection

@section('content')


  <div class="box-body">
                <form role="form" action="{{ url('/admin/posts/updatepost')}}" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="post_id" value="{{ $post->id }}{{ old('$post_id')}}">
                  <img src="{{ url('photos/post/'.$post->images) }}" id="showimages" style="max-width:200px;max-height:200px;float:left;" alt="">

                  <div class="row">
                    <div class="col-md-5">
                      <label for="exampleInputFile">Image Post Upload</label>
                      <input type="file" id="inputimages" name="images">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-6">
                      <label>Judul</label>
                      <input type="text" class="form-control" name="title" value="@if(!old('title')){{ $post->title }}@endif{{ old('title') }}" placeholder="Title Here..." required="required">
                    </div>

                    <div class="col-md-3">
                      {{ Form::label('tags', 'Tags:', ['class'=>'form-spacing-top']) }}
                      {{ Form::select('tags[]', $tags, null, ['class'=>'form-control select2-multi', 'multiple'=>'multiple']) }}
                    </div>

                    <div class="col-md-3">
                    <label>Kategori</label>
                    <select class="form-control" name="category_id">
                        @foreach(App\Category::all() as $category)
                            <option value="{{ $category->id }}" @if(isset($post->category_id) && $post->category_id == $category->id){{ 'selected="selected"' }}@endif>{{ $category->name }}</option>
                        @endforeach

                    </select>
                    </div>
                  </div>
                  <div class="form-group row ">
                    <div class="col-md-2">
                      <label><input type="checkbox" name="highlight" {{ $post->highlight == 1 ? 'checked' : '' }}> Highlight</label>
                    </div>
                    <div class="col-md-2">
                      <label><input type="checkbox" name="must_reads" {{ $post->must_reads == 1 ? 'checked' : '' }}> Must Reads</label>
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Isi Postingan</label>
                      <textarea class="form-control editor" name="body" rows="20">
                        @if(!old('body'))
                        {!! $post->body !!}
                        @endif
                        {!! old('body') !!}
                      </textarea>
                  </div>

                  @if($post->active == '1')
                  <input type="submit" name="publish" class="btn btn-success" value="Update" />
                  @else
                  <input type="submit" name="publish" class="btn btn-success" value="Publish" />
                  @endif
                  <input type="submit" name="save" class="btn btn-info" value="Save to Draft!">
                   <a href="{{ url('admin/posts/deletepost/'.$post->id.'?_token='.csrf_token())}}" onclick="return confirm('Apakah anda serius akan menghapus postingan ini?');"><span class="label label-danger"><i class="fa fa-trash-o"></i></span></a>

                </form>
              </div>

@endsection
@section('script')
<script type="text/javascript">
  $('.select2-multi').select2();
  $('.select2-multi').select2({theme: "flat"}).val({!! json_encode($post->tags()->allRelatedIds()) !!}).trigger('change');
</script>
@endsection
