@extends('Admin.master')
@section('content')
<h2 style="padding-bottom: 35px;float: left;">All Employees</h2>
<a href="{{Route('admin.employee.create')}}"><button class="btn btn-success" id="addNew">Add New Employee</button></a>

<div class="clear"></div>
@if ($employees->count() >0 )

<div class="table-responsive">
    <table class="table user-table no-wrap">
        <thead>
            <tr>
                <th class="border-top-0">#</th>
                <th class="border-top-0">Name</th>
                <th class="border-top-0">Email</th>
                <th class="border-top-0">phone</th>
                <th class="border-top-0">company</th>
                <th class="border-top-0">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $key => $employee)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$employee->f_name}} {{$employee->l_name}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->phone}}</td>
                <td>{{$employee->company->name}}</td>
                <td>
                    <a href="{{route('admin.employee.edit', $employee->id)}}">
                        <button class="btn btn-success">Edit</button>
                    </a>
                    <form style="display: inline-block" method="POST" action="{{route('admin.employee.destroy', $employee->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

            </tr>

            @endforeach
        </tbody>
    </table>
    {{$employees->links('pagination::bootstrap-4')}}
</div>
@else
<div class="clearfix"></div>
<hr>
   <center>No Employees Added</center>
   <hr>
@endif




@endsection
