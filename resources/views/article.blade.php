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
  @foreach ($articles as $key=>$article)
  <div class="w3-margin">
    <div class="w3-container"><br>
      <div class="article-title"><b>{{$article->content_title}}</b></div>
      <div class="article-description">{{$article->content_description}}, {{$article->created_at}}</div>
      <div class="article-writer">Yazar : <a class="article-writer-link" href="/writerprofile/{{$article->users->id}}"> {{$article->users->name}} </a></div>
    </div>
    <br>
    <div class="w3-container">
    <div class="article-content">{!!$article->content!!}</div>
    </div>
    <hr>
    @if(count($comments)>0)
    <div class="w3-container"><br>
    <div class="article-comment">  Yazıya ait yorumlar aşağıda listelenmiştir. </div>
    </div><hr>
   
    @foreach($comments as $comment)
    <div class="w3-container">
    <div class="comment-writer">Yazar : {{$comment->users->name}} </div><br>
    <div class="comment-comment">{{$comment->comment}}</div>
    </div>
    <hr>
    @endforeach
    @endif
    @auth
    <div class="form-group">
    <form action="{{url('/comment/create')}}" method="get">
    <textarea style='margin:20px;width:95%' class="form-control"  name="articlecomment" rows="3" placeholder="Tartışmaya katıl ve bir yorum bırak!" required></textarea>
    <input type="hidden" class="form-control" name="articleid" value="{{$article->id}}"><br>
    &nbsp&nbsp&nbsp <button type="submit" >Yorum Gönder</button>
    <br><br>
    </form>
    </div>
    @endauth
  </div>
  @endforeach
 
<!-- END BLOG ENTRIES -->
</div>
<!-- END w3-content -->
</div>
@endsection
