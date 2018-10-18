<table>
<form action="/rest" method="post">
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}<li>
            @endforeach
        </ul>
    </div>
    @endif
    {{ csrf_field() }}
    <tr><th>message: </th><td><input type="text" name="message" value="{{old('message')}}"></td></tr>
    <tr><th>url: </th><td><input type="text" name="url" value="{{old('url')}}"></td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>
</form>
</table>
