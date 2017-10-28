@extends('admin.master')

@section('page_title')
 Data User
@endsection

@section('content')
  <div class="row">
  <div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><a href="/daftar" class="btn btn-success">Tambah User</a></h3>

      <div class="box-tools">
        {!! Form::open(['method'=>'GET','url'=>'admin/guru','role'=>'search']) !!}
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
          <th>ID</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Role</th>
          <th>Tindakan</th>
        </tr>
        @foreach ($user as $key => $value)
        <tr>
          <td>{{$value->id}}</td>

          <td>
            {{ $value->name }}
          </td>
          <td>
            {{ $value->email }}
          </td>
          <td>
            {{ $value->role }}
          </td>
          <td>
            <form class="" action="" method="post">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <a href="{{ url('admin/user/edituser/'.$value->id)}}"><span class="label label-primary"><i class="fa fa-edit"></i></span></a>
              <a href="{{ url('admin/user/editpassword/'.$value->id)}}"><span class="label label-primary"><i class="fa fa-edit"></i></span></a>
              <a href="{{ url('admin/user/editrole/'.$value->id)}}"><span class="label label-primary"><i class="fa fa-edit"></i></span></a>
              <a href="{{ url('admin/user/deleteuser/'.$value->id.'?_token='.csrf_token())}}" onclick="return confirm('Are you sure you want to delete this?');"><span class="label label-danger"><i class="fa fa-trash-o"></i></span></a>
            </form>
          </td>
        </tr>
      @endforeach
      </table>

    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  </div>
  </div>

@endsection
