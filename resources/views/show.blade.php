@extends('layouts.main')

@section('content')
    @php
        
        $genresAsString = $movie->genresAsString();
        $directorsAsString = $movie->directorsAsString();
        $writersAsString = $movie->writersAsString();
        $actorsAsString = $movie->actorsAsString();
        
        $actors = $movie->actors->all();
        
    @endphp
    <div class="movie-info border-b border-onyx-tint">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img class="w-64 md:w-96"
                src="{{ str_starts_with($movie->cover_url, 'storage') ? asset($movie->cover_url) : $movie->cover_url }}"
                alt="{{ $movie->title }}">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie->title }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        class="bi bi-star-fill fill-mellon-primary" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <span class="ml-1">{{ $movie->rating }}%</span>
                    <span class="mx-2">|</span>
                    <span>{{ $movie->release_date }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ $genresAsString }}</span>
                </div>
                <p class="text-onyx-contrast mt-8">
                    {{ $movie->description }}
                </p>
                <div class=" mt-12">
                    <div class="movie-directors border-t-2 border-onyx-tint">
                        <div class="mt-2 mb-2 text-lg">
                            <div class="">Directors: {{ $directorsAsString }}</div>
                        </div>
                    </div>
                    <div class="movie-writers border-y-2 border-onyx-tint">
                        <div class="mt-2 mb-2 text-lg">
                            <div class="">Writers: {{ $writersAsString }}</div>
                        </div>
                    </div>
                </div>

                {{-- <div class="mt-12">
                    <h4 class="text-onyx-contrast font-semibold">Featured Crew</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-onyx-contrast">Scenario, Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-onyx-contrast">Scenario</div>
                        </div>
                    </div>
                </div> --}}
                <div class="mt-12">
                    <button
                        class="flex items-center bg-mellon-primary text-onyx-tint rounded font-semibold px-5 py-4 hover:bg-mellon-shade transition ease-in-out duration-150">
                        <svg class="bi bi-play-circle-fill fill-onyx-shade" xmlns="http://www.w3.org/2000/svg"
                            width="20" height="20" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" />
                        </svg>
                        <span class="ml-2">Play trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- kraj movie info --}}

    <div class="movie-cast border-b border-onyx-tint">
        {{-- Movie cast --}}
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                {{-- Each cast individualy --}}
                @foreach ($actors as $actor)
                    <x-actor-card :actor="$actor" :actingRoles="$actor->actingRolesInMovie($movie)" />
                @endforeach
            </div>
        </div>
    </div>
    {{-- Movie cast --}}
    {{-- Movie images --}}
    {{-- <div class="movie-images border-b border-onyx-tint">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">              
                <div class="mt-8">
                    <a href="#">
                        <img class="h-movie-image hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/actors/Willem_Dafoe.jpg') }}" alt="Willem_Dafoe.jpg">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img class="h-movie-image hover:opacity-75 transition ease-in-out duration-150"
                            src="{{ asset('storage/actors/Robert_Pattinson.jpg') }}" alt="Robert_Pattinson.jpg">
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
