@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Book</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="row">
                    @foreach($books as $book)
                        <div class="col-md-4">
                            <img src="{{ $book->url }}"> </img>
                            <br>
                            <p>{{ $book->title }}</p>
                            <p>{{ number_format($book->price) }}</p>
                            <p>{{ $book->description }}</p>
                            <a type="button" href="/book/{{ $book->id }}">View</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
