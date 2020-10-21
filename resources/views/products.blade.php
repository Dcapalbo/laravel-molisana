{{-- insert the blade layout template --}}
@extends('layouts.main')
{{-- end layout template --}}
@section('title')
  Products
@endsection
 @section('main_content')
{{-- start main --}}
  <body>
   <main>
    <div class="products_wrapper">
     <ul>
      <li>
       <h3>{{$products["titolo"]}}</h3>
       <img src="{{$products["src-h"]}}" alt="">
       <img src="{{$products["src-p"]}}" alt="">
       <div class="">
        <p>{!!$products["descrizione"]!!}</p>
       </div>
      </li>
     </ul>
    </div>
   </main>
  </body>
  @endsection
  <script src="{{asset('js/app.js')}}"></script>
{{-- end main --}}
