@extends('web.layout.web_layout')

{{-- Title of the HTML page --}}
@section('title')
    Home
@endsection

@section('content')
    <div class="container mx-auto grid grid-cols-3 gap-5 h-5/6 w-5/6">
        <div class="grid col-span-1 grid-rows-2 p-5 h-5/6 items-center my-auto gap-8 rounded-3xl">
            <div class="h-full bg-gradient-to-br from-slate-800 to-slate-600 rounded-3xl p-5 flex flex-col justify-between">
                <h2 class="text-slate-300 font-semibold text-4xl font-manrope leading-normal">
                    This is a personal project developed by AleOnta
                </h2>
                <x-global.mainbtn class="flex items-center">
                    <x-mdi-github class="w-5 mr-1 p-0 inline fill-slate-400" />
                    <span class="font-bold text-slate-100">Other Projects</span>
                </x-global.mainbtn>
            </div>

            @auth
                <h2 class="text-slate-400">User Card Component goes here</h2>
            @else
                <h2 class="text-slate-400">User Login Component goes here</h2>
            @endauth

        </div>
        <div class="col-span-2 p-5 h-5/6 my-auto  flex flex-col justify-between">
            <div id="home-right-container" class="h-[90%] flex flex-row justify-center items-end">
                <h2 class="text-slate-400">Video Goes here</h2>
            </div>
            <div>
                <x-global.mainbtn class="text-center">
                    <a href="/seatpicker-setup">
                        <div class="flex flex-row justify-center items-center">
                            <span>Proceed</span>
                            <x-mdi-arrow-right-bold-circle-outline class="w-5 ml-2 fill-slate-300" />
                        </div>
                    </a>
                </x-global.mainbtn>
            </div>
        </div>
    </div>
@endsection
