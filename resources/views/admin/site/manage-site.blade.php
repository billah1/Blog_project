@extends('admin.master')
@section('title')
    Manage Author
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header text-center">
                Author Site Table
            </div>
            <h3 class="text-center">{{session('message')}}</h3>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th> Name</th>
                        <th> Site logo</th>
                        <th>email</th>
                         <th>phone</th>
                          <th>favicon</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($sites as $site)
                    <tr>
                        <td>{{$site->name}}</td>
                        <td><img style="width: 50px;height: 50px" src="{{asset($site->logo)}}" alt=""></td>
                        <td>{{$site->email}}</td>
                        <td>{{$site->phone}}</td>
                        <td><img style="width: 50px;height: 50px" src="{{asset($site->favicon)}}" alt=""></td>
                        <td>{{$site->status==1?'Published':'Unpublished'}}</td>
                        <td class="d-flex">
                            @if($site->status==1)
                            <a href="{{route('status',['id'=>$site->id])}}" class="btn btn-outline-primary">Unpublished</a>
                            @else
                                <a href="{{route('status',['id'=>$site->id])}}" class="btn btn-outline-info">Published</a>
                            @endif
                            <a href="{{route('edit-site',['id'=>$site->id])}}" class="btn btn-outline-info" style="margin-left: 10px">Edit</a>
                                <form action="delete-author" method="post">
                                    @csrf
                                    <input type="hidden" name="author_id" value="{{$site->id}}">
                                    <input type="submit" class="btn btn-outline-danger" value="Delete" style="margin-left: 10px" onclick="return confirm('Are you Sure?')">
                                </form>
                        </td>

                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
