<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Сотрудники</title>
</head>
<body>
<div class="container">
    <h1 class="text-center mt-5">Сотрудники:</h1>

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="js_table" >
                @if($values->total() > 0)
                    <table class="table table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ФИО</th>
                            <th scope="col">Дата рождения</th>
                            <th scope="col">Отдел</th>
                            <th scope="col">Должность</th>
                            <th scope="col">Тип сотрудника</th>
                            <th scope="col">Оплата за месяц</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($values as $value)
                            <tr>
                                <th scope="row">{{ $value->full_name }}</th>
                                <td>{{ $value->birthday }}</td>
                                <td>{{ $value->department->name }}</td>
                                <td>{{ $value->position }}</td>
                                <td>{{ $value->type_employe->name  }}</td>
{{--                                <td>{{ $value->type_employe->name  }}</td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $values->links() }}
                @else
                    <h5 class="text-center mt-5">В данный момент сотудников нет</h5>
                @endif
            </div>
        </div>
    </div>
</div>
</body>
</html>
