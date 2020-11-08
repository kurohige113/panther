<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Hello/Index</title>
<style>
body {font-size:16pt; color:#999;}
h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px}
</style>
</head>
<body>
    <h1>Index</h1>
    <p>{{$msg}}</p>
    <p>ViewComposer value<br>'message'={{$view_message}}</p>
    

        <table>
            @foreach ($data as $item)
                <tr>
                    <th>{{$item['name']}}</th>
                    <td>{{$item['mail']}}</td>
                </tr>
            @endforeach
        </table>

    <form method="POST" action="/hello">
        {{ csrf_field() }}
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body>
</html>