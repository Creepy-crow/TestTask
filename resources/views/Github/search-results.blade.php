@extends('layouts.github')
@section('content')
{{--    {{dd($results)}}--}}
    <main role="main" class="container">
        <div class="my-3 p-3 bg-white rounded box-shadow">
            <h6 class="border-bottom border-gray pb-2 mb-0">Result</h6>
            <div class="media text-muted pt-3">
                <img data-src="{{$results->avatar_url}}" alt="" class="mr-2 rounded">
                <a href="{{route('user', [
                                    'user' => $results->login
                                            ])}}"
                   class="media-body pb-3 mb-0 small lh-125 border-botbottomtom border-gray">
                    <strong class="d-block text-gray-dark">{{$results->login}}</strong>
                </a>
            </div>
            <small class="d-block text-right mt-3">
                <a href="{{$results->repos_url}}">Repositories</a>
            </small>
        </div>
    </main>
@endsection
