@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   <form action="">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name :</strong>
                {{ $product->name }}
                 <!-- <input type="text" class="form-control" name="name" value="" /> -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product price :     </strong>
                {{ $product->price}}
                <!-- <input type="text" class="form-control" name="price" value="" /> -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category</strong>
                {{ $product->category_id }}
                <!-- <input type="text" class="form-control" name="category_id" value="" /> -->
            </div>
        </div>
    </div>
@endsection