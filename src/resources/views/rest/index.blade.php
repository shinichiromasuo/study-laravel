@extends('layouts.helloapp')
<style>
    .pagination { font-size:15pt; }
    .pagination li { display:inline-block }
    tr th a:link { color: white; }
    tr th a:visited { color: white; }
    tr th a:hover { color: white; }
    tr th a:active { color: white; }
</style>
@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
        <a href="/rest/create">CREATE</a>
        <table>
        <tr><th>id</th><th>message</th></tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->message }}</td>
            <td><a href="/rest/{{ $item->id }}">show</a></td>
        </tr>
        @endforeach
        </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
