@extends('mails.layout')

@section('body')
<article style="width: 320px; margin: 30px auto; background-color: #c3c3c3; border-radius: 8px;">
    <h2>Alguien se sumo al Newsletter</h2>
    <h4><span>{{ $msg['mail'] }}</span> se quiere sumar</h4>
</article>
@endsection
