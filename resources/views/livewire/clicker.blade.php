<div>
    <h1>{{ $title }}</h1>

    <h3>{{ $hello }}</h3>
    <div class="">{{ count($users) }}</div>
    <button
        wire:click="createNewUser"
        class="btn text-white bg-red-500"
    >Create a New User</button>

</div>
