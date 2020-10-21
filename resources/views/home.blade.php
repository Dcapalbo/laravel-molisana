@extends('layouts.main')

@php
$data = config('products');
dd($data);
// make some empty array
  $lunga = [];
  $corta = [];
  $cortissima = [];
// make a foreach cicle to iterate and find the value
  foreach ($data as $products) {
    if ($products["tipo"] == "lunga") {
      $lunga[] = $products;
    } else if ($products["tipo"] == "corta") {
      $corta[] = $products;
    } else if ($products["tipo"] == "cortissima") {
      $cortissima[] = $products;
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
      @foreach ($lunga as $products)
      <li>
       <img src="{{$products["src"]}}" alt="">
       <img class="food_logo" src="{{asset('/images/icon.svg')}}" alt="">
       <p>{{$products["titolo"]}}</p>
      </li>
      @endforeach
     </ul>
     <h2>Le corte</h2>
     <ul>
{{-- make a foreach to iterate a specific value from the json array --}}
      @foreach ($corta as $products)
      <li>
       <img src="{{$products["src"]}}" alt="">
       <img class="food_logo" src="{{asset('/images/icon.svg')}}" alt="">
       <p>{{$products["titolo"]}}</p>
      </li>
      @endforeach
     </ul>
     <h2>Le cortissime</h2>
     <ul>
{{-- make a foreach to iterate a specific value from the json array --}}
      @foreach ($cortissima as $products)
      <li>
       <img src="{{$products["src"]}}" alt="">
       <img class="food_logo" src="{{asset('/images/icon.svg')}}" alt="">
       <p>{{$products["titolo"]}}</p>
      </li>
      @endforeach
     </ul>
     </div>
   </main>
@endsection
