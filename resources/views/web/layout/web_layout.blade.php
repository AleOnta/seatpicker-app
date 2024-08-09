<html lang="en">

<head>
    @include('web.layout.head')
</head>

<body class="bg-dark-main overflow-hidden">
    <header>
        @include('web.layout.nav')
    </header>
    <main class="flex items-center justify-center h-full relative">
        @yield('content')

    </main>
    <footer>
        @include('web.layout.footer')
    </footer>
</body>

</html>
