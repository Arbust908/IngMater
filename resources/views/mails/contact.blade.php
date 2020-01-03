@extends('mails.layout')

@section('body')
<article style="width: 320px; margin: 30px auto; background-color: #c3c3c3; border-radius: 8px;">
    <h2>{{$msg['name']}} se quiere contactar</h2>
    <h4><span>{{ $msg['email'] }}</span> es su mail</h4>
    <h4>De <span>{{ $msg['empresa'] }}</span></h4>
    <h4>y su telefono es <span>{{ $msg['telefono'] }}</span></h4>
    <h4>"<span>{{ $msg['msg'] }}</span>"</h4>
</article>
@endsection
