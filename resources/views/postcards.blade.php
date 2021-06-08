@extends('layouts.app')

@section('head')
<main id="root">
  <ul>
    <li v-for="postcard in postcards" :key="postcard.id">
      <h4>@{{postcard.title}}</h4>
      <p>@{{postcard.content}}</p>
    </li>
  </ul>
</main>
@endsection

@section('main')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
@endsection

@section('foot-script')
  <script src="{{ asset('js/postcards.js') }}" charset="utf-8"></script>
@endsection
