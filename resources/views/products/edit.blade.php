@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('products.index') }}"> Go Back</a>
            </div>
        </div>
    </div>
   
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
   <form method="post" action="{{ route('products.update',$product->id)}}" >
    @csrf
    @method('PUT') 
   
        <div class="form-group">
            <label for="exampleforcontrolinput1">Name</label>
            <input type="text" name="name" value="{{ old('name')?? $product->name }}"  class="form-control" placeholder="name">
        </div>

        <div class="form-group">
            <label for="exampleforcontrolinput1">Price</label>
            <input type="number" name="price" value="{{ old('price')?? $product->price }}" class="form-control" placeholder="price">
        </div>

            
        <select name="category_id"  class="form-control" id="exampleforcontrolinput1">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>    
            @endforeach
        </select>

        <div class="form-group mt-4" >
            <label for="exampleFormControlFile1">Select Image</label>
            <input type="file"  name="image" value="{{ old('image')?? $product->image }}" class="form-control-file" placeholder="image" id="exampleFormControlFile1">
        </div>
        
         <button type="submit" class="btn btn-primary mt-3">Update</button> 
    </form>
@endsection