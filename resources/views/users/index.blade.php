@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Characters</div>

                    <div class="card-body">
                        <ul>
                            @foreach($users as $user)
                                <li>
                                    <a href="/users/{{ $user->name }}">{{ $user->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection