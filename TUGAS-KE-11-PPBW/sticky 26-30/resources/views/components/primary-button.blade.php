<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center border border-zinc-700 px-4 py-2 bg-zinc-800 border border-transparent rounded-md font-medium tracking-tight text-sm text-white hover:bg-zinc-700 focus:bg-zinc-700 active:bg-zinc-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
