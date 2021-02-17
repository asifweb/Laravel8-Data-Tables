@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col col-sm-6">
            <a href="" class="btn btn-primary">Add New Product</a>
        </div>
        <div class="col col-sm-6">
        </div>
    </div>
    <table class="table table-hover table-striped table-bordered mt-4">
    <thead>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Category</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
    </tbody>
    </table>

@endsection