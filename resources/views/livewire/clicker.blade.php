<div>
    @if (session("success"))
        <div class="w-100 py-3 bg-green-300 rounded text-center">{{ session("success") }}</div>
    @endif
    <div class="flex m-5">

        <form
            action=""
            wire:submit="createNewUser"
        >
            <input
                type="text"
                wire:model="name"
                placeholder="name"
                class="block rounded border border-grey-100 px-3 py-1 "
            >

            @error("name")
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror

            <input
                type="email"
                wire:model="email"
                placeholder="email"
                class="block rounded border border-grey-100 px-3 py-1 mt-2"
            >

            @error("email")
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror

            <input
                type="password"
                wire:model="password"
                placeholder="password"
                class="block rounded border border-grey-100 px-3 py-1 mt-2"
            >

            @error("password")
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror

            <button
                type="submit"
                class="block rounded border bg-gray-400 text-white mt-4"
            >Create User</button>
        </form>

    </div>

    <hr>

    @foreach ($users as $user)
        <h1>{{ $user->name }}</h1>
    @endforeach
</div>
