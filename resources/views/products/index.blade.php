
@extends("layouts.main")
@section('content')

    <div class="container">
        <div class="row">
            <div id="header" class="col-12">
                    <h1>Our Menu</h1>
                    <a href="{{ route('products.create') }}" class="btn btn-primary">Create Menu</a>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                        <p>{{ $message }}</p>
                        @endif
                    <div class="col-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Product Price</th>
                                    <th>Category </th>
                                    <th>Images</th>
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
                                        <td>
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
                        {{ $products->links()}}
                    </div>   
            </div>
        </div>
    </div>
@endsection
