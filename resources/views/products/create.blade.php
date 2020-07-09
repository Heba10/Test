@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('products.store')}}">
    @csrf
    <div class="form-group">
      <label >Title</label>
      <!-- put name to can use it in controler function store -->
      <input name="title" type="text" class="form-control" aria-describedby="emailHelp">
    </div>
    <label >price</label>
      <!-- put name to can use it in controler function store -->
      <input name="price" type="text" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <textarea name="description" class="form-control">

      </textarea>
     <div class="form-group">
      <label for="exampleInputPassword1">Users</label>
      <select name="user_id" class="form-control">
        @foreach($users as $user)  
          <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
        </select>
        <label for="exampleInputPassword1">Brands</label>
        <select name="brand_id" class="form-control">
        @foreach($brands as $brand)  
          <option value="{{$brand->id}}">{{$brand->name}}</option>
        @endforeach
        </select>
        <label for="exampleInputPassword1">categories</label>
        <select name="category_id" class="form-control">
        @foreach($categories as $category)  
          <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection