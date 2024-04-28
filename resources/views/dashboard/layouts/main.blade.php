    <!-- Navbar Container-->
     @include('dashboard.layouts.header')

     @yield('navbar')

     @include('dashboard.layouts.homeLink')


    <!-- Dashboard Container -->
    <div class="w-[1220px] mx-auto">
        @yield("Dashboard & Home links")

        @yield("Dashboard Profile")

        @yield("SA & IPK Container")

        @yield("Card and Table Global Container")

        @yield("biodata")

        @yield("Setting's Global Container")
    </div>

    @include('dashboard.layouts.modalUKT')

    @include('dashboard.layouts.modalLogOut')

    @include('dashboard.layouts.footer')
    
