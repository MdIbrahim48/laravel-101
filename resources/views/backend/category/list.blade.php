@extends('layout')
@section('title','Categories')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Collspan Table Example</h5>
    </div>
    @include('_partials.toast')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Type</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->type}}</td>
                <td>{{$category->status}}</td>
                <td style="display: inline-flex">
                    <form action="{{route('categories.destroy',['category'=>$category->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are You Delete?')"><i class="fas fa-trash"></i></button>
                    </form>
                    <a href="{{route('categories.edit',['category'=>$category->id])}}" style="margin-left: 2%" class="btn-xs btn-primary">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
            </tr> 
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{$categories->links()}}
    </div>
</div>
@endsection