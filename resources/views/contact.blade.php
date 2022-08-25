@extends('layouts.app')
@section('js')

@endsection
@section('css')

@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-md-2">
    </div>
        <div class="col-md-8">
            <form action="{{url('/contact/create')}}" method="post">
                @csrf
                <div class=" mb-4">
                        @if(isset($result))
                            @if($result == "success")
                            <p style="color:green;">Mesajınız Gönderildi.</p>
                            @elseif($result == "fail")
                            <p style="color:red;">Mesaj gönderiminiz başarısız.</p>
                            @endif 
                        @endif
                        <h6 style="padding-left: 20px;padding-top:20px;"> </h6>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Adınız Soyadınız</label>
                                <input  class="form-control" name="contactName">
                            </div>
                            <div class="form-group">
                                <label>Mail Adresiniz</label>
                                <input  class="form-control" name="contactEmail">
                            </div>
                            <div class="form-group">
                                <label>Konu başlığınız</label>
                                <input  class="form-control" name="contactTitle">
                            </div>
                            <div class="form-group">
                                <label>Mesajınız</label>
                                <textarea class="form-control" name="contactBody"> </textarea>
                            </div>
                            <br>
                            <div class="row justify-content-center">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                            <div class="form-group">
                            <button type="submit" style="background-color:black;" class="btn btn-primary form-control">Gönder</button>
                            </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                            </div>
                        </div>
                </div>
            </form>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
@endsection