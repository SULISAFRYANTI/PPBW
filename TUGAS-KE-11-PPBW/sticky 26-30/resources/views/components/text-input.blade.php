@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'w-full border-zinc-800 bg-zinc-950 text-white focus:outline-none rounded-md shadow-sm']) }}>
