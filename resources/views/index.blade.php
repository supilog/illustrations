@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-2 md:h-[calc(100vh-312px-0.5rem)]">
        <div class="flex flex-col">
            @foreach($illustrations as $illustration)
                <div class="text-center font-Titillium hover:text-pink-300">
                    <a href="{{ route('illustrations', $illustration) }}">{{ $illustration }}</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
