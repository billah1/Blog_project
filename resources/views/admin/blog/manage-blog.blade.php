@extends('admin.master')
@section('content')
<div class="container-fluid px-4 pt-5">
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>sl</th>
                        <th>category</th>
                        <th>author</th>
                        <th>title</th>
                        <th>image list</th>
                        <th>Descriptio</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach($blogs as $blog)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$blog->category_name}}</td>
                        <td>{{$blog->author_name}}</td>
                        <td>{{$blog->title}}</td>
                        <td><img style="width: 50px;height: 50px" src="{{asset($blog->image)}}" alt=""></td>
                        <td>{!! $blog->description !!}</td>
                        <td>{{ $blog->status==1?'published':'unpublished' }}</td>
                        <td>
                            {{-- @if($blog->status==1)--}}
                            {{-- <a href="{{ route('status',['id'=>$blog->id]) }}" class="btn btn-warning">unPublished</a>--}}
                            {{-- @else--}}
                            {{-- <a href="{{ route('status',['id'=>$blog->id]) }}" class="btn btn-primary">published</a>--}}
                            {{-- @endif--}}
                            {{-- <a href="{{ route('edit',['id'=>$blog->id]) }}" class="btn btn-primary">Edit</a>--}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
