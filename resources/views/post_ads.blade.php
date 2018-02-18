@extends('layouts.app')


@section('content')
    <br/>
    <br/>

<div class="container">

    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
        <!-- Edit Personal Info -->
        <form action="#">
        <div class="widget personal-info">
            <h3 class="widget-header user">Ads Details</h3>

                <!-- First Name -->

                <!-- Last Name -->
                <div class="form-group">
                    <label for="last-name">Category</label>
                    <select class="form-control"></select>
                </div>
                <div class="form-group">
                    <label for="last-name">SubCategory</label>
                    <select class="form-control"></select>
                </div>
                <div class="form-group">
                    <label for="first-name">Title</label>
                    <input type="text" class="form-control" id="first-name">
                </div>
                <div class="form-group">
                    <label for="first-name">Description</label>
                     <textarea class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="first-name">Price</label>
                    <input class="form-control" type="text">
                </div>
                <!-- File chooser -->
                <div class="form-group choose-file">
                    <input type="file" class="form-control-file d-inline" id="input-file">
                </div>




</div>

                <!-- Edit Personal Info -->
                <div class="widget personal-info">
                    <h3 class="widget-header user">Ads Photo and Video</h3>
                    <p>Max size of video 3mb</p>
                    <p>Max size of picture 3mb</p>
                    <h3 class="widget-header user">Video</h3>
                    <div class="card" style="width: 200px; height:250px;">
                        <div class="form-group fil choose-file">
                            <i class="fa fa-file-photo-o fa-5x">
                                <input type="file"  >
                            </i>
                        </div>

                    </div>
                    <h3 class="widget-header user">Picture</h3>
                   <div class="row">
                       <div class="col-md-4">
                           <div class="card" style="width: 200px; height:250px;">
                               <div class="form-group fil choose-file">
                                   <i class="fa fa-file-photo-o fa-5x">
                                       <input type="file"  >
                                   </i>
                               </div>

                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="card" style="width: 200px; height:250px;">
                               <div class="form-group fil choose-file">
                                   <i class="fa fa-file-photo-o fa-5x">
                                       <input type="file"  >
                                   </i>
                               </div>

                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="card" style="width: 200px; height:250px;">
                               <div class="form-group fil choose-file">
                                   <i class="fa fa-file-photo-o fa-5x">
                                       <input type="file"  >
                                   </i>
                               </div>

                           </div>
                       </div
                       </div>
                   </div>


                </div>





                <!-- Edit Personal Info -->
                <div class="widget personal-info">

                    <h3 class="widget-header user">Contact Info</h3>
                    @auth
                    <h4>Name: {{auth()->user()->first_name}}</h4>
                    <h4>Phone:{{auth()->user()->phone}}</h4>
                    @else
                        <h4>Name: </h4>
                        <h4>Phone:</h4>
                        @endguest
                    <div class="form-group">
                        <select class="form-control">
                            <option value="">helloo</option>
                        </select>
                    </div>

                </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Post Ads</button>
            </div>
        </form>





    </div>





</div>













@endsection()