
@extends('appSection@user::main')
@section('content')
    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="f_name" class="form-label">Имя</label>
            <input value="{{ old('f_name') }}" type="text" class="form-control" id="f_name" name="f_name" required>

            @error('f_name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="surname" class="form-label">Фамилия</label>
            <input value="{{ old('l_name') }}" type="text" class="form-control" id="surname" name="l_name" required>

            @error('l_name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="patronymic" class="form-label">Отчество</label>
            <input value="{{ old('m_name') }}" type="text" class="form-control" id="patronymic" name="m_name">

            @error('m_name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="date_birth" class="form-label">Дата рождения</label>
            <input value="{{ old('birthday') }}" type="date" class="form-control" id="date_birth" name="birthday" required>

            @error('birthday')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input value="{{ old('password') }}" type="text" class="form-control" id="password" name="password" required>

            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Мыло</label>
            <input value="{{ old('email') }}" type="email" class="form-control" id="email" name="email" required>

            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="input-group">
            <input value="{{ old('image') }}" type="file" class="form-control" id="inputGroupFile04" aria-label="Загрузка" name="image">

            @error('image')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Создать пользователя</button>
        <a href="{{ route('index') }}" class="btn btn-dark">Вернуться назад</a>
    </form>
@endsection

