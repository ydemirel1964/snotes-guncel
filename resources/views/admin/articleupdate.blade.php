@extends('admin.layouts.admin')
@section('js')

@endsection
@section('css')

@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @foreach ($articles as $item)
            <form action="{{url('admin/article/update/'.$item->id)}}" method="put">
            <h6 style="padding-left: 20px;padding-top:20px;"><b>{{$item->id}}</b> ID'Lİ YAZI GUNCELLEME</h6>
                @csrf
                <div class="card shadow mb-4">
                       
                        <div class="card-body">
                            <div class="form-group">
                                <label>Yazı Başlığı</label>
                                <input value="{{$item->content_title}}" class="form-control" name="articlecontenttitle">
                            </div>
                            <div class="form-group">
                                <label>Yazı Özeti</label>
                                <input value="{{$item->content_description}}" class="form-control" name="articlecontentdescription">
                            </div>
                               
                                <div class="form-group">
                                    <label>Yazı İçeriği</label>
                                   <textarea class="form-control" id="summernote" name="articlecontent" rows="18">
                                       {{ $item->content }}
                                   </textarea>
                                </div>
                                <script type="application/javascript">
                                  $('#summernote').summernote({
                                    placeholder: 'Hello stand alone ui',
                                    tabsize: 2,
                                    height: 120,
                                    toolbar: [
                                      ['style', ['style']],
                                      ['font', ['bold', 'underline', 'clear']],
                                      ['color', ['color']],
                                      ['para', ['ul', 'ol', 'paragraph']],
                                      ['table', ['table']],
                                      ['insert', ['link', 'picture']],
                                      ['view', [ 'codeview']]
                                    ]
                                  });
                                </script>
                                  <div class="form-group">
            
                                    Kategori
                                    <select name="categories[]" class="form-control" multiple="multiple">
                                        @if(count($categories)>0)
                                            @foreach($categories as $category)
                                                @if(array_search($category->id,$selectedCategoriesId) !== false)
                                                <option value="{{$category->id}}" selected>{{$category->category}}</option>
                                                @else
                                                <option value="{{$category->id}}">{{$category->category}}</option>
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            <button type="submit" class="btn btn-primary">Güncelle</button>
                        </div>
                </div>
                </form>
            @endforeach
        </div>
    </div>
</div>
@endsection