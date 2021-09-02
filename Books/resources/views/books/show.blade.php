
@extends('books.layout')
   
   @section('contenty')
       <div class="row">
           <div class="col-lg-12 margin-tb">
               <div class="pull-left">
                   <h2> Kitabın;</h2>
               </div>
               <div class="pull-right">
                   <a class="btn btn-primary" href="{{ route('books.index') }}"> Geri</a>
               </div>
           </div>
       </div>
        
       <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong> Adı:</strong>
                   {{ $book->name }}
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Yazar:</strong>
                   {{ $book->author }}
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>ISBN:</strong>
                   {{ $book->no }}
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Resim:</strong>
                   <img src="/image/{{ $book->image }}" width="500px">
               </div>
           </div>
       </div>
   @endsection 