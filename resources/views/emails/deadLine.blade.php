<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>List of Checkin Defaulters</h2>
    <table>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Book Title</th>
            <th>Date Checked IN</th>
        </tr>
        @foreach ($books as $key=>$book)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$book->name}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->checked_out}}</td>
        </tr>
    @endforeach
    </table>

</body>
</html>
