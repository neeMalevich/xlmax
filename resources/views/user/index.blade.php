@extends('layout.index')

@section('content')

        <form class="mb-4" action="{{route('user.index')}}" type="get">
            <div class="input-group d-flex ">
                <h2 class="mr-2">Поиск: </h2>
                <div class="form-outline">
                    <input name="search_field" placeholder="Поиск" type="search" class="form-control"/>
                </div>
            </div>
        </form>

    <table class="table table-striped projects">
        <h1><a class="text-decoration-none" href="{{route('user.create')}}">Добавить пользователя</a></h1>
        <thead>
        <tr>
            <th>
                id
            </th>
            <th>
                Имя
            </th>
            <th>
                Фамилия
            </th>
            <th>
                Полный возраст
            </th>
            <th>
                Пол
            </th>
            <th>
                Город рождения
            </th>
            <th colspan="3" style="width: 20%">
                Действия
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    {{$user->id}}
                </td>
                <td>
                    {{$user->name}}
                </td>
                <td>
                    {{$user->surname}}
                </td>
                <td>
                    @if($user->date_of_birth == 0)
                        0 лет
                    @else
                        {{$user->date_of_birth}} года
                    @endif
                </td>
                <td>
                    @foreach($genders as $id => $gender)
                        @if($user->gender == $id)
                            {{$gender}}
                        @endif
                    @endforeach
                </td>
                <td>
                    {{$user->city}}
                </td>
                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm mb-2" href="{{route('user.show', $user->id)}}">
                        <i class="fas fa-folder">
                        </i>
                        Просмотр
                    </a>
                    <a class="btn btn-info btn-sm mb-2" href="{{route('user.edit', $user->id)}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Изменить
                    </a>
                    <form class="btn btn-danger btn-sm"
                          action="{{route('user.destroy', $user->id)}}"
                          method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">
                            <i role="button" class="fas fa-trash"></i>
                            Удалить
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
