<div>
    <div class="flex m-5">
        <form
            action=""
            wire:submit="createNewUser"
        >
            <input
                type="text"
                wire:model="name"
                placeholder="name"
            >
            <input
                type="email"
                wire:model="email"
                placeholder="email"
            >
            <input
                type="password"
                wire:model="password"
                placeholder="password"
            >

            <button
                type="submit"
                class="btn rounded-lg w-[150px] h-[43px] border border-black"
            >Create User</button>
        </form>

    </div>

    <hr>

    @foreach ($users as $user)
        <h1>{{ $user->name }}</h1>
    @endforeach
</div>
