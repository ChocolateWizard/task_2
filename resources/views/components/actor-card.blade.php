@props(['actor', 'actingRoles'])
<div class="mt-8">
    <a href="#">
        <img class="h-movie-cast-profile hover:opacity-75 transition ease-in-out duration-150"
            src="{{ str_starts_with($actor->profile_photo_url, 'storage') ? asset($actor->profile_photo_url) : $actor->profile_photo_url }}"
            alt="{{ $actor->first_name . ' ' . $actor->last_name }}">
    </a>
    <div class="mt-2">
        <a href="#" class="text-lg mt-2 hover:text-gray:300">{{ $actor->first_name . ' ' . $actor->last_name }}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            @if (count($actingRoles) == 0)
                <span>No roles in movie</span>
            @elseif (count($actingRoles) == 1)
                <span>{{ $actingRoles[0]->role }}</span>
            @else
                <span>{{ $actingRoles[0]->role . ', ' . ' . . .' }}</span>
            @endif
        </div>
    </div>
</div>
