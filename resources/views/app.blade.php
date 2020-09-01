<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
    @include('partials.htmlheader')
@show
    <body id="page-top">
        <!-- Navigation-->
        @section('navbar')
            @include('partials.navbar')
        @show
        <!-- Masthead-->
        @section('masthead')
            @include('partials.masthead')
        @show
        <!-- About-->
        @section('about')
            @include('partials.about')
        @show
        <!-- Services-->
        @section('services')
            @include('partials.services')
        @show
         <!-- Benefits-->
         @section('benefits')
            @include('partials.benefits')
        @show
        <!-- Portfolio
        @section('portfolio')
            @include('partials.portfolio')
        @show -->
        <!-- Contact-->
        @section('contact')
            @include('partials.contact')
        @show
        <!-- Footer-->
        @section('footer')
            @include('partials.footer')
        @show
        <!-- Scripts-->
        @section('scripts')
            @include('partials.scripts')
        @show
    </body>
</html>
