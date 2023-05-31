@props(['jobber'])


<div class="col-lg-4 col-md-6 col-12 mt--30" data-sal="slide-up" data-sal-duration="700">
    <div class="rn-card box-card-style-default">
        <div class="inner">
            <div class="thumbnail"><a class="image" href="blog-details.html"><img class="w-100" src={{"images/blog-grid/blog-01.jpg"}} alt="Blog Image"></a>
            </div>
            <div class="content">
                <ul class="rn-meta-list">
                    <li><a href="#">Irin Pervin</a></li>
                    <li class="separator">/</li>
                    <li>10 Dec 2021</li>
                </ul>

                
                <div class="inner mt--20">
                <!--same name from job card and same name as jobber used in three places-->
                    <x-job-tags :tagsCsv="$jobber->tags"/>

                   </div>
                    
               
                     
                   
                <h4 class="title"><a href="/onejob/{{ $jobber->id }}">{{ $jobber->title }}</a></h4>
            </div>
        </div>
    </div>
</div>