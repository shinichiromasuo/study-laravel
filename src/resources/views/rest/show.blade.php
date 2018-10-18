@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
    @parent
    詳細ページ
@endsection

@section('content')
    <table>
        <tr><th>id</th><th>name</th><th>url</th></tr>
        <td>{{$item->id}}</td>
        <td>{{$item->message}}</td>
        <td>{{$item->url}}</td>
        <td><a href="/rest/{{$item->id}}/edit">edit</a></td>
        <form method="post" action="/rest/{{$item->id}}">
        {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <td><input type="submit" value="del"></td>
        </form>
    </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
