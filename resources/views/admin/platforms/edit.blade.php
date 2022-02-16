@extends('admin.layout')

@section('content')

    <div class="col-md-12 col-12" id="app">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Platform</h4>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" method="POST" action="{{route('admin.platforms.update', $platform->id)}}" class="needs-validation" novalidate>
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">Platform Name</label>
                        <input value="{{$platform->title}}" type="text" name="title" id="basic-addon-name"
                               class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                               aria-label="Name" aria-describedby="basic-addon-name"/>
                        @error('name')
                        <p class="text-danger">{{$errors->first('name')}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">Icon (PNG is better)</label>
                        <input type="file" name="icon" id="basic-addon-name"
                               class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                               aria-label="Name" aria-describedby="basic-addon-name"/>
                        @error('name')
                        <p class="text-danger">{{$errors->first('name')}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <center><img src="{{$platform->icon}}" style="width: 150px;" alt=""></center>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update Platform</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
