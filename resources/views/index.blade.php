@extends('layouts.app')


@section('content')
    <section id="intro" class="section-intro">
        <div class="overlay">
            <div class="container">
                <div class="main-text">
                    <h1 class="intro-title">Welcome To <span style="color: #3498DB">ClassAds</span></h1>
                    <p class="sub-title">Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs and more</p>

                    <!-- Start Search box -->
                    <div class="row search-bar">
                        <div class="advanced-search">
                            <form class="search-form" method="get">
                                <div class="col-md-3 col-sm-6 search-col">
                                    <div class="input-group-addon search-category-container">
                                        <label class="styled-select">
                                            <select class="dropdown-product selectpicker" name="product-cat" >
                                                <option value="0">All Categories</option>
                                                <option class="subitem" value="community"> Community</option>
                                                <option value="items-for-sale"> Items For Sale</option>
                                                <option value="jobs"> Jobs</option>
                                                <option value="personals"> Personals</option>
                                                <option value="training"> Training</option>
                                                <option value="real_estate"> Real Estate</option>
                                                <option value="services"> Services</option>
                                                <option value="vehicles"> Vehicles</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 search-col">
                                    <div class="input-group-addon search-category-container">
                                        <label class="styled-select location-select">
                                            <select class="dropdown-product selectpicker" name="product-cat" >
                                                <option value="0">All Locations</option>
                                                <option value="New York">New York</option>
                                                <option value="California">California</option>
                                                <option value="Washington">Washington</option>
                                                <option value="churches">Birmingham</option>
                                                <option value="Birmingham">Chicago</option>
                                                <option value="Phoenix">Phoenix</option>
                                            </select>
                                        </label>
                                    </div>


                                </div>
                                <div class="col-md-3 col-sm-6 search-col">
                                    <input class="form-control keyword" name="keyword" value="" placeholder="Enter Keyword" type="text">
                                    <i class="fa fa-search"></i>
                                </div>
                                <div class="col-md-3 col-sm-6 search-col">
                                    <button class="btn btn-common btn-search btn-block"><strong>Search</strong></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Search box -->
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="col-md-12">
            <div class="text-center " id="lo">
                <h2>Trending Ads</h2>

            </div>
        </div>

    </div>

<div class="container con">
       <div class="row">
           @foreach($post as $pos)
           <div class="col-md-3">
               <div class="card car">
                   <a href="{{ route('details') }}/{{$pos->id}}"> <img class="card-img-top img" src="image/pro.jpg"></a>
                   <div class="card-block">
                           <li class="list-group-item">{{$pos->title}}</li>
                   </div>
               </div>
           </div>
               @endforeach



       </div>

    <div class="container bot">
    <button type="submit" class="btn btn-social-linkedin">MORE</button>
    </div>

    <!--container end -->
    </div> <!--container  fro product end -->


<div class="container">
    <section class=" section">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section title -->
                    <div class="section-title car text-center">
                        <h2>All Categories</h2>
                    </div>
                    <div class="row">
                        <!-- Category list -->
                        @foreach($cat as $cat)
                        <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                            <div class="card car">
                                <div class="card-block">
                                    <div class="fon">
                                    <i class="fa fa-laptop fa-10x"></i>
                                    </div>

                                    <h4 class="text-center">{{$cat->name}}</h4>
                                </div>
                                 @foreach($cat->subcat as $sub)
                                <ul class="list-group" >
                                    <li class="list-group-item "><a href="{{$sub->id }}"> {{$sub->name}} <span class="badge"></span></a></li>
                                </ul>
                                     @endforeach




                            </div>
                        </div> <!-- /Category List -->
                            @endforeach()













                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>

</div>


    @stop

