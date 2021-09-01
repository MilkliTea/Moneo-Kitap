
@extends('products.layout')
     
     @section('contenty')
         <div class="row">
             <div class="col-lg-12 margin-tb">
                 <div class="pull-left">
                     <h2>Kitap düzenle</h2>
                 </div>
                 <div class="pull-right">
                     <a class="btn btn-primary" href="{{ route('products.index') }}"> geri</a>
                 </div>
             </div>
         </div>
          
         @if ($errors->any())
             <div class="alert alert-danger">
                 <strong>Whoops!</strong> There were some problems with your input.<br><br>
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
         @endif
         
         <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data"> 
             @csrf
             @method('PUT')
          
              <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Adı:</strong>
                         <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="ad">
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Yazarı:</strong>
                         <textarea class="form-control" style="height:150px" name="detail" placeholder="Yazar">{{ $product->detail }}</textarea>
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>ISBN:</strong>
                         <input type="text" name="no" value="{{ $product->no }}" class="form-control" placeholder="ISBN">
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Resim:</strong>
                         <input type="file" name="image" class="form-control" placeholder="rESİM">
                         <img src="/image/{{ $product->image }}" width="300px">
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                   <button type="submit" class="btn btn-primary">Gönder</button>
                 </div>
             </div>
          
         </form>
     @endsection 