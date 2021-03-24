@extends('site.layouts.app')

@section('content')
<div>
    <div class="wrapper">
        <div class="resim">
            <img src="storage/images/{{ $user->photo }}" />
        </div>
        <h1 class="text-center">{{ $user->name }} <i class="fa fa-check-circle" aria-hidden="true"></i></h1>
        <h4 class="text-center">{{ $user->username }}</h4>
        <p class="text-center mt-4">{{ $user->description }}</p>

    </div>
    <div class="buttons">
        <div class="mb-2 mt-2 text-center">
            @foreach($user->links as $link)
                <a 
                class="d-block rounded-0 mt-2 mb-2 pt-2 pb-2 w-100 btn btn-danger" 
                href="{{ $link->url }}"
                target="_blank"
                >{{ $link->title }}</a> 
            @endforeach
        </div>
    </div>
</div>
@endsection