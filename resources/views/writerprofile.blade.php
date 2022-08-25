@extends('layouts.app')
@section('js')
<script type="text/javascript" src="{{ URL::asset('js/article.js') }}"></script>
@endsection
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/article.css') }}">
@endsection
@section('content')
<div class="w3-row">
<div class="w3-col l12 s12">
<b>{{$userarticles[0]->users->name}}</b>   yazarına ait yazılar 
<hr>
  <!-- Blog entry -->
  @foreach ($userarticles as $item)
  <div class=" w3-margin">
    <div class="w3-container">
      <div class="article-title"><b>{{$item->content_title}}</b></div>
      <div class="article-description">{{$item->content_description}}, {{$item->created_at}} </div>
    </div>
    <div class="w3-container">
    <div class="article-content"><span class="class-span">{!!$item->content!!}</span></div>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <br>
        <a class="article-content-link" href="{{url('article/'.$item->id)}}"> Yazının tamamı için tıklayınız. » </a>
        </div>
        <div class="w3-col m4 w3-hide-small w3-right">
          <p><span class="w3-padding-large w3-right">Yorumlar  {{ count($item->comments) }}</span></p>
        </div>
      </div>
    </div>
  </div>
  <hr>
  @endforeach
<!-- END BLOG ENTRIES -->
{{ $userarticles->links() }}
</div>

@endsection
