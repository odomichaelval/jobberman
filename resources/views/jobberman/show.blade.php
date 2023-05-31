


@extends('layouts')


@section('content')

<!-- Start Advance Pricing Area  -->
<div class="rn-blog-details-area">
    <div class="post-page-banner rn-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="content text-center">
                        <div class="page-title">
                            <h1 class="theme-gradient">{{  $onejob ['title'] }}</h1>
                        </div>
                        <ul class="rn-meta-list">
                            <li>
                                <i class="feather-user"></i>
                                <a href="#">Irin Pervin</a>
                            </li>
                            <li>
                                <i class="feather-calendar"></i>
                                10 Dec 2021 
                            </li>
                        </ul>
                        <div class="thumbnail alignwide mt--60"><img class="w-100 radius" src="{{ asset('images/blog-grid/blog-01.jpg') }}" alt="Blog Images"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-details-content pt--60 rn-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="content">

                        <p>{{  $onejob->description }}</p>
                        <div class="category-meta">
                        <span class="text"> Tags:</span> 
                        <x-job-tags :tagsCsv="$onejob->tags"/>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Advance Pricing Area  -->

@endsection