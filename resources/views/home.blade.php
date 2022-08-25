@extends('layouts.app')
@section('js')
<script type="text/javascript" src="{{ URL::asset('js/article.js') }}"></script>
@endsection
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/article.css') }}">
@endsection
@section('content')
<div class="w3-col l3">
<div class="w3-margin">
    <div class="w3-container w3-padding">
      Popüler Kategoriler
    </div>
    <ul class="w3-ul w3-hoverable ">
      @foreach($categories as $category)
      <a href="{{ url('category', ['id' => $category->id]) }}" style="color:black">
      <li class="w3-padding-10 w3-hover-text-white">
        <span style="color:#9ab">{{ $category->category }}</span>
      </li>
      </a>
      @endforeach
     </ul>
  </div>
  <hr>   
  <div class=" w3-margin">
    <div class="w3-container w3-padding">
      Son Eklenen İçerikler
    </div>
    <ul class="w3-ul w3-hoverable">
      @foreach($popularPosts as $post)
      <a href="{{ url('article', ['id' => $post->id]) }}"  style="color:black">
      <li class="w3-padding-16 w3-hover-text-white">
        <span style="color:#9ab" >{{ $post->content_title }}</span>
      </li>
      </a>
      @endforeach
      </ul>
  </div>
</div>
</div>

  <div class="w3-col l8">
    <div class="w3-center">En son yazılan yazılar</div>
    <hr>
  <!-- Blog entry -->
  @foreach ($articles as $key=>$article)
  <div class="w3-margin"> <!-- The w3-margin class adds 16px margin to all sides of an element. -->
    <div class="w3-container">
      <div class="article-title"><b>{{$article->content_title}}</b></div>
      <div class='article-description'>{{$article->content_description}}, {{$article->created_at}}</div><br>
      <div class="article-writer" >Yazar : <a class="article-writer-link" href="/writerprofile/{{$article->users->id}}">{{$article->users->name}} </a></div>
    </div>
  
  <div class="w3-container">
    <div class="article-content">
      <span class="class-span">
         {!!$article->content!!}</span>
    </div>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <br>
        <a  class="article-content-link" href="{{url('article/'.$article->id)}}"> Yazının tamamı için tıklayınız. » </a>
        </div>
        <div class="w3-col m4 w3-hide-small w3-right">
          <p><span class="w3-padding-large w3-right">Yorumlar {{ count($article->comments) }}</span></p>
        </div>
      </div>
    </div>
  </div>
  <hr>
  @endforeach
<!-- END BLOG ENTRIES -->
  </div>

<!-- END w3-content -->
@endsection