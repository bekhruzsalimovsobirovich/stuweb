@extends('main.layout.master')
@section('title', 'Biz haqimizda')
@section('content')
    <section class="contact-section"><br><br>
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <h1>Guvohnoma</h1>
                <div id="map" style="height: 1300px;">
                    <object type="application/pdf" data="{{asset('main/docs/guvohnoma.pdf')}}" width="100%" height="1300"></object>
                </div>
                <br><br><br>
                <h1>Litsenziya</h1>
                <div id="map" style="height: 1300px;">
                    <object type="application/pdf" data="{{asset('main/docs/litsen.pdf')}}" width="100%" height="1300"></object>
                </div>
            </div>
        </div>
    </section>
@endsection
