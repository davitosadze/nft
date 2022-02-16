@extends('admin.layout')

@section('content')

    <div class="col-md-12 col-12" id="app">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Category</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('admin.categories.update', $category->id)}}" class="needs-validation" novalidate>
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">Category Name</label>
                        <input value="{{$category->category_name}}" type="text" name="category_name" id="basic-addon-name"
                               class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                               aria-label="Name" aria-describedby="basic-addon-name"/>
                        @error('name')
                        <p class="text-danger">{{$errors->first('name')}}</p>
                        @enderror
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
