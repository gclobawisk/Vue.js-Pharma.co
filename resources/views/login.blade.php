<body>
    
    {{-- HTML element to mount the Vue application --}}

    <div id="app">
        {{-- the Vue component --}}
        <Login />
    </div>

    {{-- including the app.js file --}}
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>