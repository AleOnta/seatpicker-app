<nav class="nav columns-2 bg-dark-main flex flex-row justify-between items-center absolute top-0 left-0 right-0 z-10">
    <div class=" px-12 text-slate-50 flex flex-row items-center">
        <div id="nav-logo-container">
            <img src="{{ url('images/SeatPicker_Logo_Transparent.png') }}" alt="SeatPicker App Logo" width="100px" />
        </div>
        <div class="flex flex-row items-center text-sm ml-14 gap-12">
            <a class="" href="/">Home</a>
            <a class="text-slate-400" href="https://www.github.com/AleOnta">About</a>
            <a class="text-slate-400" href="/maps/public">Available Maps</a>
        </div>
    </div>
    <div class="px-12">
        @auth
            <x-layout.dropdown />
        @else
            <a href="/signup">
                <x-global.mainbtn class="text-xs">
                    Sign-Up
                </x-global.mainbtn>
            </a>
        @endauth
    </div>
</nav>
