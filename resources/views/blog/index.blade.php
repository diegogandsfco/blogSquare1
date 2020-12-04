@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top:70px">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h2>{{$entry->title}}</h2>
              <span class="meta">Posteado el {{date('d-m-Y',strtotime($entry->publication_date))}}</span>
            </div>
        </div>
        <hr>
        <article>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <p>{!!nl2br($entry->description)!!}</p>
                </div>
              </div>
            </div>
        </article>
        
        <div class="pb-2"></div>
        <div class="text-center">
            <a class="btn btn-primary"  href="#" onclick="history.back()" align="left">Volver</a>
        </div>
        <div class="pb-2"></div>
    </div>
@endsection