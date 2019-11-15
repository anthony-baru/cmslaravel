@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end">
    <a href="{{ route('categories.create') }}" class="btn btn-success float-right mb-2 mt-2">Add Category</a>
</div>
<div class="card card-default">
    <div class="card-header">
        Categories
    </div>
</div>
@endsection