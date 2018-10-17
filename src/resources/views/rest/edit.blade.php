@extends('layouts.helloapp')

@section('title', 'Edit')

@section('menubar')
    @parent
    更新ページ
@endsection

@section('content')
    <table>
    <form action="/rest/{{$item->id}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <tr><th>id: </th><td>{{$item->id}}</td></tr>
        <tr><th>message: </th><td><input type="text" name="message" value="{{$item->message}}"></td></tr>
        <tr><th>url: </th><td><input type="text" name="url" value="{{$item->url}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td</tr>
    </form>
    </table>
@endsection

@section('footer')
copylight 2017 tuyano.
@endsection
