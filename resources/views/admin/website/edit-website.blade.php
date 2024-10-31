@extends('admin.master')
@section('title')
    Edit Website
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Website Form list</h3></div>
                    <div class="card-body">
                        <form action="{{ route('update-website') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text" name="title" value="{{ $website->title }}" placeholder="title" />
                                <label for="inputEmail">Title</label>
                            </div>
                              <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text" name="url"  value="{{ $website->url }}" placeholder="url" />
                                <label for="inputEmail">Url</label>
                            </div>
                              <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text" name="route_name"  value="{{ $website->route_name }}" placeholder="route_name" />
                                <label for="inputEmail">Route Name</label>
                            </div>
                              <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text" name="params"  value="{{ $website->params }}" placeholder="params" />
                                <label for="inputEmail">params</label>
                            </div>
                              <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="number" name="parent_id"  value="{{ $website->parent_id }}" placeholder="parent_id" />
                                <label for="inputEmail">parent Vlaue</label>
                            </div>
                              <div class="row">
                            <label  class="col-md-3 form-label">Publication Type</label>
                            <div class="col-md-9 pt-3">
                                <label><input type="radio"  name="type" {{$website->type == 'external' ? 'checked' : '' }}  checked value="external"><span>External</span></label>
                                <label><input type="radio" name="type" {{$website->type == 'internal' ? 'checked' : '' }}  value="internal"><span>INTERNAL</span></label>
                            </div>
                        </div>
                           <div class="row">
                            <label  class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9 pt-3">
                                <label><input type="radio"  name="status" {{$website->status == 1 ? 'checked' : '' }}  checked value="1"><span>Published</span></label>
                                <label><input type="radio" name="status" {{$website->status == 1 ? 'checked' : '' }}  value="0"><span>Unpublished</span></label>
                            </div>
                        </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" class="form-control btn btn-success" value="submit" >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
