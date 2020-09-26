
@extends("layouts.main")
@section('content')
     
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Category</h1>
                <a href=" {{route('categories.create')}}" class="btn btn-primary">Add New Category</a>
                    @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                            <p>{{ $message }}</p>
                    @endif
            </div>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date Created</th>
                        <th>Active</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at->diffForHumans() }} </td>
                        <td>
                            <form action="{{ route('categories.destroy',$category->id) }}" method="post">
                             
                                <a class="btn btn-primary" href="{{ route('categories.show',$category->id) }}">View</a>
                                <a class="btn btn-success" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                              
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$categories->links ()}}
        </div> 
    </div>
@endsection