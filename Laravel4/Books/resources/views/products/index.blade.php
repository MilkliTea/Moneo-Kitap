
@extends('products.layout')

     @section('contenty')

     @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
    </div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

         <div class="row">
             <div class="col-lg-12 margin-tb">
                 <div class="pull-left">
                     <h1>Kitap</h1>
                 </div>
                 <div class="pull-right">
                     <a class="btn btn-success" href="{{ route('products.create') }}"> Kitap ekle</a>
                 </div>
             </div>
         </div>
         
         @if ($message = Session::get('success'))
             <div class="alert alert-success">
                 <p>{{ $message }}</p>
             </div>
         @endif
          
         <table class="table table-bordered">
             <tr>
                 <th>No</th>
                 <th>Resim</th>
                 <th>Kitap adı</th>
                 <th>Kitap yazarı</th>
                 <th>ISBN</th>
                 <th width="280px">Düzenle</th>
             </tr>
             @foreach ($products as $product)
             <tr>
                 <td>{{ ++$i }}</td>
                 <td><img src="/image/{{ $product->image }}" width="100px"></td>
                 <td>{{ $product->name }}</td>
                 <td>{{ $product->detail }}</td>
                 <td>{{ $product->no }}</td>
                 <td>
                     <form action="{{ route('products.destroy',$product->id) }}" method="POST">
          
                         <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">göster</a>
           
                         <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">düzenle</a>
          
                         @csrf
                         @method('DELETE')
             
                         <button type="submit" class="btn btn-danger">Sil</button>
                     </form>
                 </td>
             </tr>
             @endforeach
         </table>
         <div width="100px" height="100px">  {!! $products->links() !!}</div>    
       
             
     @endsection 