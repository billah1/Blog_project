@extends('admin.master')
@section('title')
    Manage Website
@endsection
@section('content')
    <div class="container-fluid px-4">
        <h3 class="text-center">{{session('message')}}</h3>
        <div class="card mb-4">
            <div class="card-body text-center">Website management Table
            </div>
        </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Title</th>
                        <th>Url</th>
                        <th>Route Name</th>
                        <th>status</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($websites as $website)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$website->title}}</td>
                        <td>{{$website->url}}</td>
                        <td>{{$website->route_name}}</td>
                        <td>{{$website->status==1?'Published':'Unpublished'}}</td>
                        <td class="d-flex">
                            @if($website->satus==1)
                            <a href="{{route('status',['id'=>$website->id])}}" class="btn btn-outline-info">Unpublished</a>
                            @else
                                <a href="{{route('status',['id'=>$website->id])}}" class="btn btn-outline-info">Published</a>
                            @endif

                            <a href="{{route('edit-website',['id'=>$website->id])}}" class="btn btn-outline-info" style="margin-right: 4px">Edit</a>
                            <form action="{{route('delete-website')}}" method="post">
                                @csrf
                                <input type="hidden" name="website_menu_id" value="{{$website->id}}">
                                <input type="submit" value="Delete" class="btn btn-outline-primary" onclick="return confirm('Are you Sure?')">
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
