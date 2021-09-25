@extends('layout')
@section('title','Categories')
@section('content')
<div class="card">
    <form class="form-horizontal" method="POST" action="{{route('categories.store')}}">
        @csrf
        <div class="card-body">
            <h4 class="card-title">Add Category</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <span>{{$error}}</span>
                        <br>
                    @endforeach
                </div>
            @endif
            <div class="form-group row">
                <label for="fname"
                    class="col-sm-3 text-end control-label col-form-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" name="name" class="form-control @error('name') invalid @enderror" id="fname"
                        placeholder=" Name " value="{{old('name')}}">
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Description</label>
                <div class="col-sm-9">
                    <input type="text" name="description" value="{{old('description')}}" class="form-control" id="lname"
                        placeholder="Description">
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="cono1"
                    class="col-sm-3 text-end control-label col-form-label">Type</label>
                <div class="col-sm-9">
                    <select name="type" id="" class="">
                        <option selected disabled>Select</option>
                        <option value="1">Active</option>
                        <option value="0">In Active</option>
                    </select>
                    @error('type')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="cono1"
                    class="col-sm-3 text-end control-label col-form-label">Status</label>
                <div class="col-sm-9">
                    <select name="status" id="" class="">
                        <option selected disabled>Select</option>
                        <option value="1">Active</option>
                        <option value="0">In Active</option>
                    </select>
                    <span class="text-danger">{{$errors->first('status')}}</span>
                </div>
            </div>
        </div>
        <div class="border-top">
            <div class="card-body text-center">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection