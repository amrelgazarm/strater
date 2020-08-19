<!DOCTYPE html>
<html lang="en">

<!-- header-->
 @include('includes.header')
<body id="page-top">
<!-- Navigation-->

@include('includes.navigationBar')
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Our Studio!</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
    </div>
</header>



@yield('content')








<!-- Footer-->
@include('includes.footer')
<!-- Portfolio Modals-->
@include('includes.models')



<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="{{URL::asset('assets/mail/jqBootstrapValidation.js')}}"></script>
<script src="{{URL::asset('assets/mail/contact_me.js')}}"></script>
<!-- Core theme JS-->
<script src="{{URL::asset('js/scripts.js')}}"></script>
</body>
</html>
