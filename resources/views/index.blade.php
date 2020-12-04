@extends('layouts.app')

@section('content')
    @include('flash::message')
    <div class="container" style="padding-top:70px">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach ($entries as $entry)
                <div class="post-preview">
                    <a href="{{url('blogEntry',[$entry->id])}}">
                      <h2 class="post-title">
                        {{$entry->title}}
                      </h2>
                    </a>
                    <p class="post-meta">
                        {{$entry->description}}
                    </p>
                </div>
                <hr>
            @endforeach
            <div class="col-lg-12 col-xs-12 sinpadding">
                <div class="pagination pagination-sm">{{ $entries->links() }}</div>
            </div>
        </div>
        
    </div>
    
@endsection
