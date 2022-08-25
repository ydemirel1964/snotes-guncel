@extends('layouts.app')
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<div class="container-fluid">
    <div class="row"> 
        <div class="col-lg-12">
            @if (count($searchresult) < 1)
            <p> <h3> "{{ $searchTerm }}" </h3> kelimesine ait herhangi bir sonuç bulunamamıştır.</p>
            @else
            <p> <h3> "{{ $searchTerm }}" </h3> kelimesine ait arama sonuçları aşağıda listelenmiştir.</p>
            @endif
        @foreach ($searchresult as $data)
            <!-- Featured blog post-->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="small text-muted">{{$data->name}} - {{$data->updated_at}}</div>
                    <h2 class="card-title"> {{$data->content_title}}</h2>
                    <p class="card-text">
                         {{$data->content_description}}
                    </p>
                    <a href="{{url('article/'.$data->id)}}"> Devamını oku! </a>
                </div>
            </div>
        @endforeach
        {!! $searchresult->render() !!}
        </div>
    </div>
    <br><br>
</div>
@endsection
