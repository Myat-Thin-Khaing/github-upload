@extends('layouts.main')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Product Price</th>
                <th>Category </th>
                <th>Image </th>
                <th>Action</th>
            </tr>
        </thead>                    
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category->name}}</td>
                    <td><image height="60Px" src="{{ asset ('/storage/image/'.$product->image)}}"/></td>

                    <td >
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                            <a class="btn btn-success" href="{{ route('products.show',$product->id) }}">View</a>
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                 @endforeach                    
            </tbody>
        </table> 
@endsection