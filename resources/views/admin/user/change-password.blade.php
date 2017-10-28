@extends('admin.master')

@section('page_title')
 Change Password
@endsection

@section('content')

  <div class="box-body">
                <form class="form-horizontal" role="form" action="{{ url('/admin/user/updatepassword')}}" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="user_id" value="{{ $user->id }}{{ old('$user_id')}}">



                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-7">
                      <input type="text" class="form-control" name="name" value="@if(!old('name')){{ $user->name }}@endif{{ old('name') }}" disabled>
                      </div>
                  </div>


                  <div class="form-group{{ $errors->has('old') ? ' has-error' : '' }}">
                              <label for="password" class="col-sm-2 control-label">Old Password</label>

                              <div class="col-sm-7">
                                  <input id="password" type="password" class="form-control" name="old">

                                  @if ($errors->has('old'))
                                      <span class="help-block">
                                      <strong>{{ $errors->first('old') }}</strong>
                                  </span>
                                  @endif
                              </div>
                  </div>


                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-sm-2 control-label">Password</label>

                                <div class="col-sm-7">
                                    <input id="password" type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-sm-2 control-label">Confirm Password</label>

                                <div class="col-sm-7">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                    </div>




                  <input type="cancel" name="" value="Batalkan" class="btn  btn-danger">
                  <input type="submit" name="save" class="btn btn-info" value="Simpan ke Draft!">
                  <input type="submit" name="publish" class="btn btn-success pull-right" value="Tambah!">
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
