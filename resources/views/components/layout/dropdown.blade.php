<div class="flex items-center justify-center">
    <div class="relative inline-block text-left">
        <x-homepage.homebtn id="dropdown-button" class="text-sm flex flex-row items-center justify-start">
            <span>Helper</span>
            <x-jam-arrow-down-right class="w-5 ml-1" />
        </x-homepage.homebtn>

        <div id="dropdown-menu"
            class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-gradient-to-tr from-slate-800 to-slate-600 ring-1 ring-black ring-opacity-5">
            <div class="py-2 p-2" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-button">
                <a class="flex rounded-md px-4 py-2 text-sm text-slate-400 hover:text-slate-200 active:bg-slate-600 active:bg-opacity-40 cursor-pointer"
                    role="menuitem">
                    <div class="flex flex-row items-center justify-start">
                        <x-jam-sun class="w-5 mr-2" />
                        Light
                        <x-jam-moon class="w-5" />
                    </div>
                </a>
                <a class="flex rounded-md px-4 py-2 text-sm text-slate-400 hover:text-slate-200 active:bg-slate-600 active:bg-opacity-40 cursor-pointer"
                    role="menuitem">
                    <div class="flex flex-row items-center justify-start">
                        <x-jam-user-square class="w-5 mr-2" />
                        User Area
                    </div>
                </a>
                <a class="flex rounded-md px-4 py-2 text-sm text-slate-400 hover:text-slate-200 active:bg-slate-600 active:bg-opacity-40 cursor-pointer"
                    role="menuitem">
                    <div class="flex flex-row items-center justify-start">
                        <x-jam-map class="w-5 mr-2" />
                        My SeatMaps
                    </div>
                </a>
                <form
                    class="flex rounded-md px-4 py-2 text-sm text-slate-400 hover:text-slate-200 active:bg-slate-600 active:bg-opacity-40 cursor-pointer mb-0"
                    method="POST" action="/logout" role="menuitem">
                    @csrf
                    <button class="flex flex-row items-center justify-start">
                        <x-jam-log-out class="w-5 mr-2" />
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
