@extends('layouts.github')
@section('content')
    <main role="main" class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
            <img class="mr-3" src="{{ $user->avatar_url }}" alt="" width="48" height="48">
            <div class="lh-100">
                <h6 class="mb-0 text-white lh-100">{{$user->login}}</h6>
            </div>
        </div>
        @foreach($repos as $repo)
            <div class="my-3 p-3 bg-white rounded box-shadow">
                <h6 class="border-bottom border-gray pb-2 mb-0">{{$repo->name}}</h6>
                <div class="media text-muted pt-3">
                    <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
                    <p class="media-body pb-3 mb-0 small lh-125 border-botbottomtom border-gray">
                        <strong class="d-block text-gray-dark">{{$repo->full_name}}</strong>
                        {{$repo->description}}
                    </p>
                </div>
            </div>
        @endforeach
    </main>
@endsection
