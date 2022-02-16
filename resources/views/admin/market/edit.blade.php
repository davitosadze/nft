@extends('admin.layout')

@section('content')

    <div class="col-md-12 col-12" id="app">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Market Item</h4>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" method="POST" action="{{route('admin.market.update', $market->id)}}" class="needs-validation" novalidate>
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">Item Name</label>
                        <input value="{{$market->title}}" type="text" name="title" id="basic-addon-name"
                               class="form-control @error('name') is-invalid @enderror" placeholder="Title"
                               aria-label="Name" aria-describedby="basic-addon-name"/>
                        @error('name')
                        <p class="text-danger">{{$errors->first('name')}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">Author</label>
                        <input value="{{$market->author}}" type="text" name="author" id="basic-addon-name"
                               class="form-control @error('name') is-invalid @enderror" placeholder="Author"
                               aria-label="Name" aria-describedby="basic-addon-name"/>
                        @error('name')
                        <p class="text-danger">{{$errors->first('name')}}</p>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">Price</label>
                        <input value="{{$market->price}}" type="text" name="price" id="basic-addon-name"
                               class="form-control @error('name') is-invalid @enderror" placeholder="Price"
                               aria-label="Name" aria-describedby="basic-addon-name"/>
                        @error('name')
                        <p class="text-danger">{{$errors->first('name')}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">Description</label>
                        <textarea placeholder="Item Description" name="description" class="form-control" id="" cols="30" rows="3">{{$market->description}} </textarea>

                    </div>

                    <div class="form-group">
                        <label class="form-label" for="basic-addon-name">Category</label>
                        <select name="category_id" class="select2 form-control" id="">
                            <option value="0">Select Category</option>
                            @foreach($categories as $category)
                                <option @if($market->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->category_name}}</option>
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
                        @foreach($market->platforms as $platform)
                        
                            <input  type="text" name="platforms[{{$platform->platform->id}}]" value="{{$platform->link}}" id="basic-addon-name"
                            class="form-control @error('name') is-invalid @enderror" placeholder="{{$platform->platform->title}}"
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
