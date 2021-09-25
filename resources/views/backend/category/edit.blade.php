@extends('layout')
@section('title','Categories')
@section('content')
<div class="card">
    <form class="form-horizontal" method="POST" action="{{route('categories.update',['category'=>$category->id])}}">
        @csrf
        @method('PUT')
        <div class="card-body">
            <h4 class="card-title">Edit {{$category->name}}</h4>
            @yield('_partials.toast')
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
                        placeholder=" Name " value="{{$category->name ?? old('name')}}">
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-3 text-end control-label col-form-label">Description</label>
                <div class="col-sm-9">
                    <textarea type="text" name="description" class="form-control" id="description"
                        placeholder="Description">{{$category->description ?? old('description')}}</textarea>
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
                        <option value="1" {{$category->type == 'Active' ? 'selected':''}}>Active</option>
                        <option value="0" {{$category->type == 'InActive' ? 'selected':''}}>In Active</option>
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
                        <option value="1" {{$category->status == 'Active' ? 'selected':''}}>Active</option>
                        <option value="0" {{$category->status == 'InActive' ? 'selected':''}}>In Active</option>
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