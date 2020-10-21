@extends('layouts.main')

@php

$data = config('products');
// make some empty array
  $lunga = [];
  $corta = [];
  $cortissima = [];
// make a foreach cicle to iterate and find the value
  foreach ($data as $key => $products) {
    if ($products["tipo"] == "lunga") {
      $lunga[$key] = $products;
    } else if ($products["tipo"] == "corta") {
      $corta[$key] = $products;
    } else if ($products["tipo"] == "cortissima") {
      $cortissima[$key] = $products;
    }
  }
@endphp
{{-- end php --}}
{{-- starts html --}}
@section('title')
  la molisana - sito ufficiale
@endsection

@section('main_content')
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
