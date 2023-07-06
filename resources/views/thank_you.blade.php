@extends('layouts.main')
@section('content')

<section class="container mt-5 my-3 pt-5">
    <div class="container mt-2 text-center">
        <h1 class="text-muted">Thank You</h1>
            
             @if (Session::has('order_id')&&Session::get('order_id') != null)
              
            <h3 style="color: blue; " class="my-5 ">Order Id :  {{Session::get('order_id')}}</h3>


              <p>Please Keep Order Id In Safe Place For Future Reference!</p>
               
             @endif
            
    </div>
</section>

@endsection