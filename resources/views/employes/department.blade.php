<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Сотрудники</title>
    <style>
        .title_employers {
            text-align: center;
        }
        .show_employers{
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center mt-5">Отделы</h1>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('employers') }}">
                                Все сотрудники <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        @foreach($department as $item)
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('department', ['id' => $item->id]) }}">
                                    {{ $item->title }} <span class="sr-only">(current)</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h3 class="show_employers">Сотрудники отдела</h3>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('department', ['id' => $id, 'paginate' => 10]) }}">
                                По 10 <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('department', ['id' => $id, 'paginate' => 25]) }}">
                                По 25 <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('department', ['id' => $id, 'paginate' => 50]) }}">
                                По 50 <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('department', ['id' => $id, 'paginate' => 100]) }}">
                                По 100 <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            @if($employes->total() > 0)
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
                    @foreach($employes as $value)
                        <tr>
                            <th scope="row">{{ $value->full_name }}</th>
                            <td>{{ $value->birthday }}</td>
                            <td>{{ $value->department->title }}</td>
                            <td>{{ $value->position }}</td>
                            <td>{{ $value->type_employe->title}}</td>
                            <td>{{ $value->count_hours * $value->amount_hour  }}$</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $employes->links('pagination::bootstrap-4') }}
            @else
                <h5 class="text-center mt-5">В данный момент сотудников нет</h5>
            @endif
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>
