@extends('admin.master')

@section('page_title')
 Edit Role
@endsection

@section('content')

  <div class="box-body">
                <form class="form-horizontal" role="form" action="{{ url('/admin/user/updaterole')}}" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="user_id" value="{{ $user->id }}{{ old('$user_id')}}">



                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-7">
                      <input type="text" class="form-control" name="name" value="@if(!old('name')){{ $user->name }}@endif{{ old('name') }}" disabled>
                      </div>
                  </div>





                    <div class="form-group">
                      <label class="col-sm-2 control-label">Role</label>
                      <div class="col-sm-7">
                        @if (Auth::user()->role == 'superadmin' )
                          <select class="form-control" name="role">
                            <option value="superadmin" {{ $user->role === 'superadmin' ? 'selected' : '' }}>Super Admin</option>
                            <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="operator" {{ $user->role === 'operator' ? 'selected' : '' }}>Operator</option>
                          </select>
                          @else
                            <select class="form-control" name="role">
                              <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                              <option value="operator" {{ $user->role === 'operator' ? 'selected' : '' }}>Operator</option>
                            </select>
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
