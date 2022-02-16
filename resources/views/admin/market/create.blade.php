@extends('admin.layout')

@section('content')

    <div class="col-md-12 col-12" id="app">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Market Item</h4>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" method="POST" action="{{route('admin.market.store')}}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">Item Name</label>
                        <input type="text" name="title" id="basic-addon-name"
                               class="form-control @error('name') is-invalid @enderror" placeholder="Title"
                               aria-label="Name" aria-describedby="basic-addon-name"/>
                        @error('name')
                        <p class="text-danger">{{$errors->first('name')}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">Author</label>
                        <input type="text" name="author" id="basic-addon-name"
                               class="form-control @error('name') is-invalid @enderror" placeholder="Author"
                               aria-label="Name" aria-describedby="basic-addon-name"/>
                        @error('name')
                        <p class="text-danger">{{$errors->first('name')}}</p>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">Price</label>
                        <input type="text" name="price" id="basic-addon-name"
                               class="form-control @error('name') is-invalid @enderror" placeholder="Price"
                               aria-label="Name" aria-describedby="basic-addon-name"/>
                        @error('name')
                        <p class="text-danger">{{$errors->first('name')}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">Description</label>
                        <textarea placeholder="Item Description" name="description" class="form-control" id="" cols="30" rows="3"></textarea>

                    </div>

                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">Category</label>
                        <select name="category_id" class="select2 form-control" id="">
                            <option value="0">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">Image</label>
                        <input type="file" name="image" id="basic-addon-name"
                               class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                               aria-label="Name" aria-describedby="basic-addon-name"/>
                        @error('name')
                        <p class="text-danger">{{$errors->first('name')}}</p>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">Platform Links</label>
                        @foreach($platforms as $platform)
                        <input type="text" name="platforms[{{$platform->id}}]" id="basic-addon-name"
                               class="form-control @error('name') is-invalid @enderror" placeholder="{{$platform->title}}"
                               aria-label="Name" aria-describedby="basic-addon-name"/>
                        <br>
                        @endforeach

                    </div>

                    
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
