@extends('layouts.main')
@section('content')
    
<!-- Products Start -->
<div id="products">
    <div class="container">
        <div class="section-header">
            <h2>Get Your Products</h2>
            <p>
                We provide you with the best types of smart and unique watches
            </p>
        </div>
        <div class="row align-items-center">
            @foreach ($products as $product)
            <div class="col-md-3">
                <div class="product-single">
                    <div class="product-img">
                        <img style="width: 100px,height:100px;"
                         src="{{ asset('img/'.$product->image) }} " alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h2>{{$product->name}}</h2>

                        @if ($product->sale != null)
                           
                        <h3>${{$product->sale}}</h3>
                        <h3 class="text-muted" style="text-decoration: line-through;font-size:20px">${{$product->price}}</h3>
                        @else
                        <h3>${{$product->price}}</h3> 
                        @endif
                           
                      @if ($product->id > 8)
                      <div  type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        New!
                    </div>
                      @endif
                       

                        <form action="{{ route('add_to_cart') }}" method="post">
                            @csrf
                            
                            <input type="hidden" name="id" value="{{$product->id}}" >
                            <input type="hidden" name="name" value="{{$product->name}}" >
                            <input type="hidden" name="price" value="{{$product->price}}" >
                            <input type="hidden" name="sale" value="{{$product->sale}}" >
                            <input type="hidden" name="quantity" value="1" >
                            <input type="hidden" name="image" value="{{$product->image}}" >
                            <input type="submit" value="Add To Cart" class="btn btn-group-sm ">
                            </form>
                            
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
<!-- Products End -->

@endsection