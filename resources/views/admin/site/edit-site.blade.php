@extends('admin.master')
@section('title')
    Edit SiTE
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <h3 class="text-center">{{session('message')}}</h3>
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Author Information</h3></div>
                    <div class="card-body">
                        <form action="{{route('update-site')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" name="name" value="{{$site->name}}" type="text" placeholder=" Name" />
                                        <label for="inputFirstName"> Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <img src="{{asset($site->logo)}}" alt="" style="height: 50px;width: 50px">
                                        <input type="file" name="logo" class="form-control">
                                    </div>
                                </div>
                            </div>

                             <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputEmail" name="email" value="{{ $site->email }}" type="email" placeholder="Email" />
                                        <label for="inputEmail">Email</label>
                                    </div>
                                </div>
                            </div>

                                <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPhone" name="phone" value ="{{ $site->phone }}" type="number" placeholder="Phone" />
                                        <label for="inputPhone">Phone</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <textarea type="text" id="sort_bio" name="sort_bio" placeholder="Sort Biography" class="form-control">{{$site->sort_bio}}</textarea>
                                        <label for="sort_bio">Sort Biography</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <img src="{{asset($site->favicon)}}" alt="" style="height: 50px;width: 50px">
                                        <input type="file" name="favicon" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 mb-0">
                                <input type="hidden" name="site_id" value="{{$site->id}}">
                                <div class="d-grid"><input type="submit" value="Update" class="btn btn-outline-info"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


