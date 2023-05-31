
@extends('layouts')

@section('content')



 @include('partials._breadcrumb')

@php 
 $hello = "Donald"
 @endphp

 @if (count($jobs) == 0 )
 <p style="color:red"> No jobs available </p>
 @endif



 


 <br>
<center>
<h1>Latest Jobs</h1>
</center>

 <!-- Start Rn Blog Area  -->
 <div class="main-content">
    @include('partials._search')
    <div class="rn-blog-area rn-section-gap">
       
        <div class="container">
            <div class="row mt_dec--30">
                <div class="col-lg-12">
                    <div class="row row--15">
                        @foreach ($jobs as $jobber)  
                        
                        <!--same name from job card and same name as jobber used in three places-->
                            <x-job-card :jobber="$jobber"/>
    
                            @endforeach

                       
                        
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="rwt-load-more text-center mt--60">
                        <a class="btn-default" href="blog-grid.html">View More Post
                            <i class="feather-loader"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Rn Blog Area  -->



       

{{-- Directives--}}
@foreach ($jobs as $jobber)  
<h2><a href="/onejob/{{ $jobber ['id'] }}">{{ $jobber ['title'] }}</a></h2>
<p>{{  $jobber ['description'] }}</p>
<b>{{ $hello}}</b>
@endforeach


@endsection 


