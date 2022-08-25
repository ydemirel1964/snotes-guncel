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
  <!-- Blog entry -->
  @if(count($article_categories) > 0)
            <p>
                 {{$category_name}} Kategorisinin öne çıkan yazıları
            </p>
  @else
            <p>
                 {{$category_name}} kategorisine ait yazı bulunamamıştır.
            </p>
  @endif
  <hr>
  @foreach ($article_categories as $key=>$article)
  <div class="w3-margin">
    <div class="w3-container">
      <div class="article-title"><b>{{$article->content_title}}</b></div>
      <div class="article-description">{{$article->content_description}}, {{$article->created_at}}</div><br>
      <div class="article-writer">Yazar : <a class="article-writer-link" href="/writerprofile/{{$article->user_id}}">{{$article->name}} </a></div>
    </div>
    <div class="w3-container">
    <div class="article-content"> 
      <span class="class-span">
         {!!$article->content!!}</span>
        </div>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <br>
        <a class="article-content-link" href="{{url('article/'.$article->id)}}"> Yazının tamamı için tıklayınız. » </a>
        </div>
        <div class="w3-col m4 w3-hide-small w3-right">
          <p><span class="w3-padding-large w3-right">Yorumlar {{ $article->comment === NULL ? 0 : count($article->comment)}}</span></p>
        </div>
      </div>
    </div>
  </div>
  <hr>
  @endforeach
<!-- END BLOG ENTRIES -->
{{ $article_categories->links() }}
</div>
<!-- END w3-content -->
</div>
@endsection
