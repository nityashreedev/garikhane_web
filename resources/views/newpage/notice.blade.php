@extends('layouts.frontendlayout')
@section('content')
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
        <div class="shadow-main">
        <h1> सूचना</h1>
    </div>
</div>
 <div class="event">
        <div class="main-container-1">
            <div class="container">

                <div class="row">
                   @if($notice)
                   
                   @foreach ($notice->chunk(3) as $chunk)
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        @foreach ($chunk as $n)
                        <div class="events-line">
                            <div class="col-md-2 col-sm-2 col-xs-3 height100">
                                <div class="events-title text-center">
                                    <p>
                                        @if(isset($n->link))
                                        <a href="{{$n->link }}" target="_blank">{{ $n->created_at->format('d') }}
                                        <span>{{ $n->created_at->format('M') }}</span>
                                        </a>
                                        @else
                                        
                                        <a href="{{ url('notice/detail/'.$n->id) }}">{{ $n->created_at->format('d') }}
                                        <span>{{ $n->created_at->format('M') }}</span>
                                       
                                            
                                        </a>
                                         @endif
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-9 pl">
                                <h6>
                                    @if(isset($n->link))
                                    <a href="{{$n->link }}" target="_blank" class="white">{{$n->title}} </a>
                                    @else
                                    <a href="{{ url('notice/detail/'.$n->id) }}" class="white">{{$n->title}} </a>
                                    @endif
                                </h6>
                                <ul class="gb-list">
                                    <li>
                                        @if(isset($n->link))
                                       
                                        <a href="{{$n->link}}" target="_blank"><i class="icon-clock" aria-hidden="true"></i>
                                            {{ $n->created_at->format('M') }} {{ $n->created_at->format('d') }}, {{ $n->created_at->format('Y') }}</a>
                                        @else
                                        <a href="{{ url('notice/detail/'.$n->id) }}"><i class="icon-clock" aria-hidden="true"></i>
                                            {{ $n->created_at->format('M') }} {{ $n->created_at->format('d') }}, {{ $n->created_at->format('Y') }}</a>
                                        @endif
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    @endforeach
                    {!! $notice->render() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection