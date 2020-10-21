
{{-- insert the blade layout template --}}
@extends('layouts.main')
{{-- end layout template --}}
@section('title', 'prodotti')
@section('main_content')
{{-- start main --}}
  @section('layouts.main')
    <main>
     <div class="main_wrapper">
      <h2>Le lunghe</h2>
      <ul>
 {{-- make a foreach to iterate a specific value from the json array --}}
       @foreach ($lunga as $key => $products)
       <li>
         <img src="{{$products["src"]}}" alt="">
         <a href="prodotti/show/{{$key}}"><p>{{$products["titolo"]}}</p></a>
         <img class="food_logo" src="{{asset('/images/icon.svg')}}" alt="">
       </li>
       @endforeach
      </ul>
      <h2>Le corte</h2>
      <ul>
 {{-- make a foreach to iterate a specific value from the json array --}}
       @foreach ($corta as $key => $products)
       <li>
        <img src="{{$products["src"]}}" alt="">
        <a href="prodotti/show/{{$key}}"><p>{{$products["titolo"]}}</p></a>
        <img class="food_logo" src="{{asset('/images/icon.svg')}}" alt="">
       </li>
       @endforeach
      </ul>
      <h2>Le cortissime</h2>
      <ul>
 {{-- make a foreach to iterate a specific value from the json array --}}
       @foreach ($cortissima as $key => $products)
       <li>
         <img src="{{$products["src"]}}" alt="">
         <a href="prodotti/show/{{$key}}"><p>{{$products["titolo"]}}</p></a>
         <img class="food_logo" src="{{asset('/images/icon.svg')}}" alt="">
       </li>
       @endforeach
      </ul>
      </div>
    </main>
  @endsection
  <script src="{{asset('js/app.js')}}"></script>
{{-- end main --}}
@endsection
