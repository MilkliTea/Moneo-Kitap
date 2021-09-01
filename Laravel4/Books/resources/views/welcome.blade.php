
@extends('products.layout')

@section('contenty')
@if (Route::has('login'))

                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('products') }}" class="text-sm text-gray-700 underline"> Kitapları Düzenlemek için tıklayınız</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-center">
                <h1>Moneo Kitap</h1>
            </div>
        
        </div>
    </div>
    
   
    <table class="table table-striped">
        <tr>
          
            <th>Resim</th>
            <th>Kitap adı</th>
            <th>Kitap yazarı</th>
            <th>ISBN</th>
           
        </tr>
        @foreach ($products as $product)
        <tr>
            
            <td><img src="/image/{{ $product->image }}" width="200px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>{{ $product->no }}</td>
            </td>
        </tr>
        @endforeach
    </table>

@endsection 