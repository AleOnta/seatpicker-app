@props(['mapId' => ''])
@if ($mapId != '')
    <a href={{ '/maps/public/show/' . $mapId }}>
        <button
            {{ $attributes->merge(['class' => 'w-full font-manrope font-semibold text-slate-300 text-start text-base border border-[#3e3e3e] rounded-lg bg-slate-400 bg-opacity-40 px-4 py-2  hover:text-slate-200 hover:border-slate-200 cursor-pointer transition']) }}>
            {{ $slot }}
        </button>
    </a>
@else
    <button
        {{ $attributes->merge(['class' => 'w-full font-manrope font-semibold text-slate-300 text-start text-base border border-[#3e3e3e] rounded-lg bg-slate-400 bg-opacity-40 px-4 py-2  hover:text-slate-200 hover:border-slate-200 cursor-pointer transition']) }}>
        {{ $slot }}
    </button>
@endif
