@extends('template.main')
@section('title'){{ 'larablog' }}@endsection
@section('content')
<header>
    <div class="blur">
        <div class="geostar-fill" id="title">
            Larablog
        </div>
        <div id="subtitle">
            Articulos sobre 
        </div>
        <div align="center">
            <a class="btn btn-web btn-lg" href="#" onclick="$('#posts').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">
                ver blog
            </a>
        </div>
    </div>
</header>
<section id="posts">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        @foreach($posts as $p)
        <h3 class="text-center">
            {{ $p->title }}
        </h3>
        <div align="center">
            <img class="img_responsive img-thumbnail" src="{{ $p->photo }}" title="{{ $p->title }}">
            </img>
        </div>
        {{-- agrupar todo el texto de cada post --}}
        <h4 class="text-justify">
            {{ substr($p->content,0,100).'..' }}
        </h4>
        <h5 class="text-info ">
            Temas Relacionados:
        </h5>
        <?php
            {{ $tags =explode(',', 
                $p->
        tags);}}
        ?>
        <div align="center">
            @foreach($tags as $t)
            <label class="label label-primary">
                {{ $t }}
            </label>
            @endforeach
        </div>
        <br>
            <div align="center">
                <a class="btn btn-info" href="articulos/{{ $p->slug }}">
                    Leer el Articulo Completo...
                </a>
            </div>
            @endforeach
        </br>
    </div>
    <div class="col-md-2">
    </div>
    <div class="row-fluid">
        <div class="container">
        </div>
    </div>
</section>
{{-- incluimosel footer --}}
@include('template.partials.footer')
@stop
