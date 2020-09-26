@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
   
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
        <div class="form-group mt-2">
            <label for="exampleforselect">Name</label>
            <input type="text" name="name" value="{{ old ('name')}}"  class="form-control" placeholder="name">
        </div>

        <div class="form-group">
            <label for="exampleforselect">Price</label>
            <input type="number" name="price" value="{{ old ('price')}}" class="form-control" placeholder="price">
        </div>
        
        <select name="category_id" class="form-control" id="exampleforselect">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>    
            @endforeach
        </select>
       
        <div class="form-group mt-4" >
            <label for="exampleFormControlFile1">Select Image</label>
            <input type="file"  name="image" class="form-control-file" id="exampleFormControlFile1">
        </div>
        
         <button type="submit" class="btn btn-primary mt-3">Submit</button>   
</form>
@endsection