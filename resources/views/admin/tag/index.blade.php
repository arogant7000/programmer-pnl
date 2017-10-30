@extends('admin.master')

@section('page_title')
 Tags
@endsection

@section('content')
  <div class="row">
  <div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <div class="box-tools">
        {!! Form::open(['method'=>'GET','url'=>'admin/categories','role'=>'search']) !!}
        <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="search" class="form-control pull-right" placeholder="Search">

          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>

    <div class="col-md-3">
      <div class="well">
        {!! Form::open(['route'=>'tags.store', 'method'=>'POST']) !!}
              <h3 class="btn btn-info">Tag Baru</h3><br><br>

              {{ Form::label('name', 'Nama :') }}
              {{ Form::text('name', null, ['class'=>'form-control']) }} <br>
              {{ Form::submit('Buat Tag', ['class'=>'btn btn-primary btn-block']) }}
        {!! Form::close() !!}

      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>#</th>
          <th>Nama Tag</th>
          <th>Tindakan</th>
        </tr>
        <?php $no=1; ?>
        @foreach ($tags as $key => $value)
        <tr>
          <td>{{$value->id}}</td>

          <td><a href="{{ route('tags.show', $value->id) }}">{{$value->name}}</td></a>

          <td>
            <form class="" action="" method="post">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <a href="{{ route('tags.edit', $value->id) }}"><span class="label label-primary"><i class="fa fa-edit"></i></span></a>
              <a href="{{ url('admin/tag/deletetag/'.$value->id.'?_token='.csrf_token())}}" onclick="return confirm('Are you sure you want to delete this?');"><span class="label label-danger"><i class="fa fa-trash-o"></i></span></a>
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
