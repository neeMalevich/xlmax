@extends('layout.index')

@section('content')

    <table class="table table-striped projects">

        <div class="d-flex">
            <h1><a class="text-decoration-none" href="{{route('user.create')}}">Добавить пользователя</a></h1>
        </div>

        <thead>
        <tbody>
        <tr>
            <td>
                Id
            </td>
            <td>
                {{$user->id}}
            </td>
        </tr>

        <tr>
            <td>
                Имя
            </td>
            <td>
                {{$user->name}}
            </td>
        </tr>
        <tr>
            <td>
                Фамилия
            </td>
            <td>
                {{$user->surname}}
            </td>
        </tr>

        <tr>
            <td>
                Полный возраст
            </td>
            <td>
                @if($user->date_of_birth == 0)
                    0 лет
                @else
                    {{$user->date_of_birth}} года
                @endif
            </td>
        </tr>


        <tr>
            <td>
                Пол
            </td>
            <td>
                @foreach($genders as $id => $gender)
                    @if($user->gender == $id)
                        {{$gender}}
                    @endif
                @endforeach
            </td>
        </tr>

        <tr>
            <td>
                Город
            </td>
            <td>
                {{$user->city}}
            </td>
        </tr>
        </tbody>
    </table>
    <h1>
        <a class="btn btn-dark" href="{{route('user.index')}}">Назад</a>
    </h1>
@endsection
