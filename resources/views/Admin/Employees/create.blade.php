@extends('Admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Add New Employee</h4>
          </div>

        <div class="card-body">
          <form method="POST" action="{{Route('admin.employee.store')}}" enctype="multipart/form-data">
              @csrf
            <div class="row">
                <div class="col-md-12">
                    @error('name')
                    <span class="validateforms">{{ $errors->first('f_name') }}</span>
                    @enderror
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Name</label>
                      <input type="text" class="form-control" name="f_name" required>
                    </div>
                </div>
                <div class="col-md-12">
                    @error('name')
                    <span class="validateforms">{{ $errors->first('l_name') }}</span>
                    @enderror
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Name</label>
                      <input type="text" class="form-control" name="l_name" required>
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
                        <label class="bmd-label-floating">Phone</label>
                        <input type="number" class="form-control" name="phone">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <select class="form-control form-control-sm myselectbox" name="company_id">
                            @foreach ($companies as $company)
                                <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Add Employee</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
