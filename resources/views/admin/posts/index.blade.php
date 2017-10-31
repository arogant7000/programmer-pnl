@extends('admin.master')

@section('page_title')
 Postingan
@endsection

@section('content')
  <div class="row">
  <div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><a href="/admin/posts/create" class="btn btn-success">Tambah Postingan Baru</a></h3>

      <div class="box-tools">
        {!! Form::open(['method'=>'GET','url'=>'admin/posts','role'=>'search']) !!}
        <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="search" class="form-control pull-right" placeholder="Search">

          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>#</th>
          <th>Gambar</th>
          <th>Judul</th>
          <th>Isi</th>
          <th>Tanggal Buat</th>
          <th>Tindakan</th>
        </tr>
        <?php $no=1; ?>
        @foreach ($posts as $key => $value)
        <tr>
          <td>{{$no++}}</td>

          <td>
            <img src="{{ asset('images/'.$value->images) }}" id="showimages" style="max-width:100px;max-height:50px;float:left;" alt="post pic">
          </td>
          <td>{{$value->title}}</td>
          <td>
            {!! str_limit($value->body, $limit = 50, $end = '......') !!}
          </td>
          <td>{{ $value->created_at->format('h:i \a\t M d,Y' ) }}</td>
          <td>
            <form class="" action="" method="post">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <a href="{{ url('/p/'.$value->slug)}}"><span class="label label-success"><i class="fa fa-eye-slash"></i></span></a>
              <a href="{{ url('admin/posts/editpost/'.$value->slug)}}"><span class="label label-primary"><i class="fa fa-edit"></i></span></a>
              <a href="{{ url('admin/posts/deletepost/'.$value->id.'?_token='.csrf_token())}}" onclick="return confirm('Are you sure you want to delete this?');"><span class="label label-danger"><i class="fa fa-trash-o"></i></span></a>
            </form>
          </td>
        </tr>
      @endforeach
      </table>
      {!! $posts->links() !!}
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  </div>
  </div>

@endsection
