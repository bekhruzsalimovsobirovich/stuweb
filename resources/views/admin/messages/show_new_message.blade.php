@extends('admin.layouts.master')
@section('title','Show new messages')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img class="card-img card-img-left" src="{{asset('admin/assets/img/elements/12.jpg')}}" alt="Card image">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$get_one_message->message_title}}</h5>
                        <p class="card-text">
                            {{$get_one_message->message_description}}
                        </p>
                        <p class="card-text"><small class="text-muted">{{$get_one_message->created_at}}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
