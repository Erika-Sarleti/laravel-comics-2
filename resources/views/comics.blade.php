@extends('template.layout')

@section('title','DC comics - Comics')

@section('content')
<main>
    <div class="container-comics">
        <div class="current-btn">Current series</div>
        <ul class="current-series">
            @foreach ($comics as $comic)
            <li>
                <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                <h3>{{$comic['series']}}</h3>
            </li>
            @endforeach
        </ul>
        <button class="load-more">Load More</button>
    </div>
    <div class="blue-section">
        <div class="container-info">
            <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
            <span class="info-text">DIGITAL COMICS</span>
        </div>
        <div class="container-info">
            <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
            <span class="info-text">MERCHANDISE</span>
        </div>
        <div class="container-info">
            <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
            <span class="info-text">SHOP LOCATOR</span>
        </div>
        <div class="container-info">
            <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
            <span class="info-text">SUBSCRIPTION</span>
        </div>
        <div class="container-info">
            <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
            <span class="info-text">POWER VISA</span>
        </div>
    </div>
</main>

@endsection