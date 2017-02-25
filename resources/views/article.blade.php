@extends('template.main')
@foreach($posts as $po)
@section('title'){{ $po->title .'|blog' }}@endsection
@section('content')
<div class="row-fluid">
    <div class="container">
        <div class="col-md-2">
        </div>
        <div align="center" class="col-md-8">
            <img src="{{$po->photo }}" title="{{$po->title  }}">
                <br>
                    <h2>
                        {{ $po->title }}
                    </h2>
                    <br>
                        <p class="text-justify">
                            {{ $po->content }}
                        </p>
                        <br>
                        </br>
                    </br>
                </br>
            </img>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
@endforeach
@stop
