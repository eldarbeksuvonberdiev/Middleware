@extends('layouts.main')

@section('title', 'Users')
@section('pagename', 'Users')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="card">
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full name</th>
                                    <th>Email</th>
                                    <th>gender</th>
                                    <th>Birth date</th>
                                    <th>Phone</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td>{{ $user->birth_date }}</td>
                                    <td>{{ $user->phone }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
