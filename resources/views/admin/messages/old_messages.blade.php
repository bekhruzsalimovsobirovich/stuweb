@extends('admin.layouts.master')
@section('title','Archive messages')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Arxiv xabarlar</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>F.I.O</th>
                        <th>Email</th>
                        <th>Xabar mavzusi</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($old_messages as $key => $old_sms)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$old_sms->client_name}}</td>
                            <td>{{$old_sms->client_email}}</td>
                            <td><a title="batafsil!" href="{{route('old_show', $old_sms->id)}}">{{substr($old_sms->message_title, 0, 20)}}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
