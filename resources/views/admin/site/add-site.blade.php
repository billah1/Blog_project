@extends('admin.master')
@section('title')
    Add Site
@endsection
@section('content')
  <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <h3 class="text-center">{{session('message')}}</h3>
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Author Information</h3></div>
                    <div class="card-body">
                        <form action="{{route('new-site')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputName" name="name" type="text" placeholder="Name" />
                                        <label for="inputName">Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input type="file" name="logo" class="form-control">
                                        <label for="logo">Logo</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputEmail" name="email" type="email" placeholder="Email" />
                                        <label for="inputEmail">Email</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPhone" name="phone" type="number" placeholder="Phone" />
                                        <label for="inputPhone">Phone</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <textarea id="sort_bio" name="sort_bio" placeholder="Short Bio" class="form-control"></textarea>
                                        <label for="sort_bio">Short Bio</label>
                                    </div>
                                </div>
                            </div>

                          <div class="row mb-3">
    <div class="col-md-12">
        <div class="form-floating mb-3 mb-md-0">
            <input type="file" name="favicon" class="form-control" id="favicon" accept=".ico, .png, .jpg, .jpeg">
            <label for="favicon">
                <i class="fas fa-image"></i> <!-- Font Awesome icon for image -->
                Favicon
            </label>
        </div>
        <small class="form-text text-muted">Upload a favicon image (ICO, PNG, JPG). Recommended size: 16x16 or 32x32 pixels.</small>
    </div>
</div>


                            <div class="mt-4 mb-0">
                                <div class="d-grid"><input type="submit" value="Submit" class="btn btn-outline-info"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
