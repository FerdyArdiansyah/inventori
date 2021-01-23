

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('partials.nav')
        <main class="py-4">
        @include('flash::message')
        @include('layouts._errors')
        @yield('content')
        </main>
    </div>
</body>
</html>
