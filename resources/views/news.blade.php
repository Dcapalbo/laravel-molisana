{{-- insert the blade layout template --}}
@extends('layouts.main')
{{-- end layout template --}}
@section('title')
  News
@endsection
@section('main_content')
{{-- start main --}}
  <main>
   <div class="main_wrapper">
    <h2>News</h2>
   </div>
  </main>
  <script src="{{asset('js/app.js')}}"></script>
{{-- end main --}}
@endsection
