@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Category</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('categories.index') }}"> Back</a>
            </div>
        </div>
    </div>
   <form action="">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name :</strong>
                {{ $categories->name }}
            </div>
        </div>
    </div>
@endsection