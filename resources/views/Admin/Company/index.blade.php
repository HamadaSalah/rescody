@extends('Admin.master')
@section('content')
<h2 style="padding-bottom: 35px;float: left;">All Companies</h2>
<a href="{{Route('admin.company.create')}}"><button class="btn btn-success" id="addNew">Add New Company</button></a>

<div class="clear"></div>

    <div class="table-responsive">
        <table class="table user-table no-wrap">
            <thead>
                <tr>
                    <th class="border-top-0">#</th>
                    <th class="border-top-0">Name</th>
                    <th class="border-top-0">Email</th>
                    <th class="border-top-0">Logo</th>
                    <th class="border-top-0">Website</th>
                    <th class="border-top-0">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $key => $company)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$company->name}}</td>
                    <td>{{$company->email}}</td>
                    <td><img src="{{asset('storage/companies/'.$company->logo)}}" class="img-thumb" alt=""></td>
                    <td>{{$company->website}}</td>
                    <td>
                        <a href="{{route('admin.company.edit', $company->id)}}">
                            <button class="btn btn-success">Edit</button>
                        </a>
                        <form style="display: inline-block" method="POST" action="{{route('admin.company.destroy', $company->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                </tr>

                @endforeach
            </tbody>
        </table>
        {{$companies->links('pagination::bootstrap-4')}}
    </div>




@endsection
