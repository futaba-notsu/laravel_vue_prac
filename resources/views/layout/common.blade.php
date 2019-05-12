<!doctype html>
<html lang="ja">
<head>
    @yield('head')
</head>
<body>
    @yield('header')
    <div class="flex stretch">
        <div id="app_sidebar">
            <sidebar-component
                icon="{{ asset('images/user_icon.jpg') }}" 
                icon_name="user_icon"
                url_home = "{{ route( 'prac.index' ) }}"
                url_create = "{{ route( 'prac.create' ) }}"
            ></sidebar-component>
        </div>
        @yield('content')
    </div>

    @yield('footer')

    <script src=" {{ mix('js/app.js') }} "></script>
</body>
</html>