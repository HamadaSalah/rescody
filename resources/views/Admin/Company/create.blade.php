@extends('Admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Add New Company</h4>
          </div>

        <div class="card-body">
          <form method="POST" action="{{Route('admin.company.store')}}" enctype="multipart/form-data">
              @csrf
            <div class="row">
                <div class="col-md-12">
                    @error('name')
                    <span class="validateforms">{{ $errors->first('name') }}</span>
                    @enderror

                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Name</label>
                      <input type="text" class="form-control" name="name" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Logo</label>
                        <input type="file" class="form-control" name="logo">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Website</label>
                        <input type="text" class="form-control" name="website">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Add Company</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
