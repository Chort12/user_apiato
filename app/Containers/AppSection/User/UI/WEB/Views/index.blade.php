@extends('appSection@user::main')
@section('content')
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Отчество</th>
                <th scope="col">Дата рождения</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>

            <a href=" {{ route('create') }} " class="btn btn-success m-2">Создать пользователя</a>

            @foreach ($users as $user)
                <tr>
                    <th scope="row"><a href="{{ route('show', $user->getId()) }}">{{ $user->getId() }}</a></th>
                    <td>{{ $user->getFName()}}</td>
                    <td>{{ $user->getLName()}}</td>
                    <td>{{ $user->getMName() }}</td>
                    <td>{{ $user->getBirthday() }}</td>
                    <td>{{ $user->getEmail() }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$users->links()}}
@endsection
