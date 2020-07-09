
@extends('layouts.app')

@section('content')
      <div class="container m-5">
      
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Title</th>
                  
                  <th scope="col">Description</th>
                  <th scope="col">price</th>
                  
                  <th scope="col">Created At</th>

                  <th scope="col">category name</th>
                  <th scope="col">brand name</th>
                 
                </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                <tr>
                <th scope="row">{{ $product->id }}</th>
                  <td>{{ $product->title }}</td>
                
                  <td>{{ $product->description }}</td>

                  <td>{{ $product->price }}</td>
                  <td>{{ $product->created_at }}</td>

         @endforeach

@endsection