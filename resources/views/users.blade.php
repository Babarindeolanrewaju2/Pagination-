<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th width="300px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data) && $data->count())
                @foreach($data as $key => $value)
                    <tr>
                        <td>{{ $value->name }}</td>
                        <td>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
        </tbody>
    </table>

    {!! $data->links() !!}
</body>
</html>
