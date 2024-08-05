<div>

    <div class="flex flex-row justify-center gap-x-6 justify-items-center">
        <button
            wire:click="add"
            class="btn text-white text-2xl bg-teal-500 border rounded-lg w-12"
        >
            +
        </button>
        <div>{{ $count }}</div>
        <button
            wire:click="reduce"
            class="btn text-white text-2xl bg-teal-500 border rounded-lg w-12 "
        >
            -
        </button>
    </div>

</div>
