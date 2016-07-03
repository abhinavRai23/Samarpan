@extends('layouts.default')
@section('content')
<style type="text/css">
    .card{
        margin-bottom: 5%;
    }
</style>
<section id="team" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-sm-12">
                <div class="card">
                    <div class="title-style text-center">
                        <h1 class="heading">Bulk upload</h1>
                    </div>  
                    <div class="content">
		                <form class="" role="form" method="POST" action="{{ url('/bulk_upload') }}"  enctype="multipart/form-data">
                            {{ csrf_field() }}

      
                            <div class="form-group{{  $errors->has('email') ? ' has-error' : '' }}">

                                <div class="file-field">
                                    <div class="btn btn-primary">
                                        <span>Choose file</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                       <input class="file-path validate" type="text" placeholder="Upload a file">
                                    </div>
                                    @if ($errors->has('file'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('file') }}</strong>
                                        </span>
                                    @endif
                                    @if (session('filetype_error'))
                                        <span class="help-block">
                                            <strong>{{ session('filetype_error') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> Upload
                                    </button>
                                    @if (session('uploded_success'))
                                        <span class="help-block">
                                            <strong>{{ session('uploded_success') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                    <td colspan="18" class="title-style">
                        <strong style="padding-right:10px;">Note:-</strong>
                        <span">Upload only CSV files with below Format.</span>
                    </td>
                </tr>
                <tr>
                  <th>#</th>
                  <th>FirstName</th>
                  <th>MiddleName</th>
                  <th>Lastname</th>
                  <th>Date of Birth</th>
                  <th>Gender</th>
                  <th>Contact Mobile</th>
                  <th>Contact Home</th>
                  <th>Contact Page</th>
                  <th>Contact Fax</th>
                  <th>Personal Email</th>
                  <th>Permanent Address</th>
                  <th>City</th>
                  <th>State</th>
                  <th>Country</th>
                  <th>Pin Code</th>
                  <th>Retirement Date</th>
                  <th>Expertise In</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Abhinav</td>
                  <td></td>
                  <td>Rai</td>
                  <td>23/03/1994</td>
                  <td>Male</td>
                  <td>8743960158</td>
                  <td>97940072XX</td>
                  <td>http://www.google.com</td>
                  <td>123ER44SDG</td>
                  <td>abhinavrai23@timepass.com</td>
                  <td>582/1328, Manesh Nagar</td>
                  <td>Lucknow</td>
                  <td>Uttar Pradesh</td>
                  <td>India</td>
                  <td>226023</td>
                  <td>23/03/2050</td>
                  <td>COC, Dota2</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div> 
</section>

@stop
