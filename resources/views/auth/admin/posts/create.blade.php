@extends('admin.master')

@section('page_title')
 Postingan Baru
@endsection

@section('content')



  <div class="box-body">
                <form role="form" action="{{ url('/admin/posts/createpost')}}" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <img src="http://placehold.it/100x100" id="showimages" style="max-width:200px;max-height:200px;float:left;" alt="">
                  <div class="row">
                    <div class="col-md-5">
                      <label for="exampleInputFile">Image Post Upload</label>
                      <input type="file" id="inputimages" name="images">
                    </div>
                  </div>
                  <br>
                  <div class="form-group row ">
                    <div class="col-md-6 ">
                      <label>Judul</label>
                      <input type="text" class="form-control" name="title" value="{{ old('title')}}"  required="required">
                    </div>
                    <div class="col-md-3 ">
                      <label>Tags</label>
                      <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                        @foreach ($tags as $tag)
                          <option value='{{ $tag->id }}'>{{ $tag->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label>Category</label>
                      <select class="form-control" name="category_id">
                        @foreach ($categories as $category)
                          <option value='{{ $category->id }}'>{{ $category->name }}</option>
                        @endforeach

                      </select>
                    </div>
                  </div>
                  <div class="form-group row ">
                    <div class="col-md-2">
                      <label><input type="checkbox" name="highlight"> Highlight</label>
                    </div>
                    <div class="col-md-2">
                      <label><input type="checkbox" name="must_reads"> Must Reads</label>
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Isi Postingan</label>
                      <textarea class="form-control editor" name="body" rows="20"></textarea>
                  </div>

                  <input type="cancel" name="" value="Batalkan" class="btn  btn-danger">
                  <input type="submit" name="save" class="btn btn-info" value="Simpan ke Draft!">
                  <input type="submit" name="publish" class="btn btn-success pull-right" value="Publish!">
                </form>
              </div>

@endsection

@section('script')
  <script type="text/javascript">
    $('.select2-multi').select2({
      theme: "flat"
    });
  </script>
@endsection
