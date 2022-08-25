@extends('admin.layouts.admin')
@section('js')

@endsection
@section('css')

@endsection
@section('content')

<div class="w3-row" style="margin:10px;max-width:1500px;">
<a style="color: black;text-decoration:none;" href="{{url('admin/articlecreate')}}"> <p><button style="margin:20px;" class="w3-button w3-padding-large w3-white w3-border w3-right"><b>YENİ YAZI EKLEME »</b></button></p> </a>
<table class="w3-table-all" >
    <thead>
      <tr class="w3">
        <th>Başlık</th>
        <th>Açıklama</th>
        <th>Yazar</th>
        <th>##</th>
      </tr>
    </thead>

  <!-- Blog entry -->
  @foreach ($articles as $key=>$article)
  <tr>
      <td>{{$article->content_title}}</td>
      <td style='word-wrap: break-word;max-width:500px;'>{{$article->content_description}}</td>
      <td>{{$article->users->name}}</td>
      <td>
        <a href="{{ url('admin/article/update', ['id' => $article->id]) }}"><button>GUNCELLE</button></a>
        <a href="{{ url('admin/article/delete', ['id' => $article->id]) }}"><button>SİL</button></a>
      </td>
    </tr>
  @endforeach
  </table>
<!-- END BLOG ENTRIES -->

</div>  
{{ $articles->links() }}<br><br>
<!-- END w3-content -->
</div>
@endsection
