@extends('layout.index')

@section('content')

    <div class="row">
        <div class="col-lg-12 col-xl-12">
            <div class="card card-primary">
                <div class="card-body">
                    <form action="{{route('user.store')}}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Имя пользователя:</label>
                            <input name="name" type="text" class="form-control">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Фамилия:</label>
                            <input name="surname" type="text" class="form-control">
                            @error('surname')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label>Дата рождения</label>
                            <input name="date_of_birth" type="date" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label>Пол:</label>
                            <select name="gender" class="form-control custom-select">
                                @foreach($genders as $id => $gender)
                                    <option value="{{$id}}">{{$gender}}</option>
                                @endforeach
                            </select>
                            @error('gender')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Город:</label>
                            <input name="city" type="text" class="form-control">
                            @error('city')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-success" type="submit">Добавить пользователя</button>
                    </form>
                    <h1>
                        <a class="btn btn-dark" href="{{route('user.index')}}">Назад</a>
                    </h1>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection
