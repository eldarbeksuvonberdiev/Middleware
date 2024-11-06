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
                                    <th>name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
