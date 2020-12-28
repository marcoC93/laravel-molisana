@extends('layout.layout')



@section('main')
<div class="container">
    <div class="row">
        @foreach ($formati as $formato)
            <div class="col-md-4">
                <div class="overlay">
                    <div class="card">
                        <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
