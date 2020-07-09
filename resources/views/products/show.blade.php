@extends('layouts.app')
@section('content')
<div class="card" style="width: 18rem;">
 
 <div class="card-body">
   <h5 class="card-title">{{$product->title}}</h5>
   <p class="card-text">{{$product->description}}</p>
   
 </div>
</div>
@endsection