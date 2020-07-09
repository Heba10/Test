
@extends('layouts.app')

@section('content')
      <div class="container m-5">
      <div class="container m-5">
      <a href="{{route('products.create')}}" class="btn btn-success mb-5">Create product</a>
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
                  <th scope="col">Actions</th>
                 
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
                  <td>{{ $product->category ? $product->category->name : 'not exist'}}</td>
                  <td>{{ $product->brand ? $product->brand->name : 'not exist'}}</td>
                  <td><a href="{{route('products.show',['product' => $product->id])}}" class="btn btn-primary btn-sm">View Details</a></td>

                <td><a href="{{route('products.edit',['product' => $product->id])}}" class="btn btn-primary btn-sm">Edit</a></td>
                <td><form id="Form" method="POST" action="{{route('products.destroy', ['product' => $product->id])}}" >
            @csrf
            {{method_field('DELETE')}}
            <button type="button" onclick="deleteProduct({{$product->id}})" class="btn btn-danger btn-sm">Delete</button>
         
         
          </form>
          
          <script>
  function deleteProduct(id) {
    var Form = document.querySelector(`#Form`);

    var answer = confirm('are you want to delete this product.... ?');

    if(answer) {
      Form.submit();
    }
  }
</script> </td>
              @endforeach
              </tbody>
            </table>
            
      </div>

{{ $products->links() }}

         

@endsection