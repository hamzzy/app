@extends('layouts.app')

@section('content')
    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
        <!-- Edit Personal Info -->
        <div class="widget personal-info">
            <h3 class="widget-header user">Edit Personal Information</h3>
            <form action="#">
                <!-- First Name -->
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" class="form-control" id="first-name">
                </div>
                <!-- Last Name -->
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" class="form-control" id="last-name">
                </div>
                <!-- File chooser -->
                <div class="form-group choose-file">
                    <i class="fa fa-user text-center"></i>
                    <input type="file" class="form-control-file d-inline" id="input-file">
                </div>
                <!-- Comunity Name -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="text">Phone</label>
                    <input type="text" class="form-control" name="Phone">
                </div>
                <!-- Checkbox -->
                <div class="form-group">
                    <label for="current-password">Current Password</label>
                    <input type="password" class="form-control" id="current-password">
                </div>
                <!-- Submit button -->
                <button class="btn btn-info">Update</button>
            </form>
        </div>


        </div>
    </div>

@endsection
