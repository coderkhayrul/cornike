@extends('layouts.website-layout')

@section('website-content')

<!-- Carousel -->
@include('website.slider')
<!--/ Carousel end -->

@include('website.call-to-action')
<!-- Call to action end -->

@include('website.feature')
<!-- Feature are end -->

@include('website.facts')
<!-- Facts end -->

@include('website.service')
<!-- Service end -->

@include('website.project')
<!-- Project area end -->

@include('website.content')
<!-- Content end -->

@include('website.testimonial')
<!--/ Testimonial end -->

@include('website.subscribe')
<!--/ News end -->

@include('website.news')
<!--/ News end -->

@endsection
