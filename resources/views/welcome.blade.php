@extends('books.layout')

@section('contenty')
@if (Route::has('login'))

<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
    <a href="{{ url('books') }}" class="text-sm text-gray-700 underline"> Kitapları Düzenlemek için tıklayınız</a>
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
    @foreach ($books as $book)
    <tr>

        <td><img src="/image/{{ $book->image }}" width="200px"></td>
        <td>{{ $book->name }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->ISBN }}</td>
        </td>
    </tr>
    @endforeach
</table>

@endsection