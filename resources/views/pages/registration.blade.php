@extends('layouts.default')
@section('content')
<section id="team" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<div class="card">
					<div class="title-style text-center">
						<h1 class="heading">Complete Profile</h1>
					</div>	
					<div class="content">
						<form action="#" method="post">
							<label>Choose Type of Account:</label>
							<select class="mdb-select" name="user_id">
							    <option value="" disabled selected>Choose type of account</option>
							    <option value="1">Senior Citizon</option>
							    <option value="2">Profile Viewer</option>
							    <option value="3">Department</option>
							    <option value="3">Admin</option>
							</select>
							<label>Enter Name:</label>
							<div class="row">
						        <div class="col-md-4">
						            <div class="md-form">
						                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name">
						            </div>
						        </div>
						        <div class="col-md-4">
						            <div class="md-form">
						                <input type="text" id="middlename" name="middlename" class="form-control" placeholder="Second Name">
						            </div>
						        </div>
						        <div class="col-md-4">
						            <div class="md-form">
						                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name">
						            </div>
						        </div>
						    </div>	
						    <label>Enter Date of Birth:</label>
							<div class="md-form">
								<input name="date_of_birth" type="date" class="form-control" id="date_of_birth" placeholder="Enter date of Birth">
							</div>

							<label>Choose Gender:</label>
							<div class="form-inline">
								
					            <fieldset class="form-group">
					                <input name="group1" type="radio" id="radio11" checked="checked">
					                <label for="radio11">Male</label>
					            </fieldset>

					            <fieldset class="form-group">
					                <input name="group1" type="radio" id="radio21">
					                <label for="radio21">Female</label>
					            </fieldset>

					            <fieldset class="form-group">
					                <input name="group1" type="radio" id="radio31">
					                <label for="radio31">Others</label>
					            </fieldset>

							</div>	

							<label>Enter Contact No:</label>
							<div class="md-form">
								<input name="contact_mobile" type="number" class="form-control" id="mobNumber" placeholder="Contact Number">
							</div>
							<label>Home's Contact no:</label>
							<div class="md-form">
								<input name="contact_home" type="number" class="form-control" id="mobNumber" placeholder="Home's Number">
							</div>
							<label>Office Contact no:</label>
							<div class="md-form">
								<input name="contact_work" type="number" class="form-control" id="mobNumber" placeholder="Office Number">
							</div>
							<label>Fax Contact no:</label>
							<div class="md-form">
								<input name="contact_fax" type="number" class="form-control" id="mobNumber" placeholder="Fax Contact Number">
							</div>
							<label>Contact Page:</label>
							<div class="md-form">
								<input name="contact_page" type="text" class="form-control" id="mobNumber" placeholder="Contact Page">
							</div>
							<label>Other Contact No:</label>
							<div class="md-form">
								<input name="contact_other" type="number" class="form-control" id="mobNumber" placeholder="Other Contact Number">
							</div>
							<label>Enter Personal Email Address:</label>
							<div class="md-form">
								<input name="email" type="email" class="form-control" id="email" placeholder="Enter Personal Email Address">
							</div>
							<label>Enter Office Email Address:</label>
							<div class="md-form">
								<input name="email" type="email" class="form-control" id="email" placeholder="Enter Office Email Address">
							</div>
							<label>Enter Other Email Address:</label>
							<div class="md-form">
								<input name="email" type="email" class="form-control" id="email" placeholder="Enter Alternate Email Address">
							</div>
							<label>Enter Permanent Address:</label>
							<div class="md-form">
								<textarea name="address_permanent" rows="1" class="md-textarea form-control" placeholder="Enter Permanent Address"></textarea>
							</div>
							<div class="row">
						        <div class="col-md-6">
						            <div class="md-form">
						                <input type="text" name="city_permanent" class="form-control" placeholder="Enter Permanent City">
						            </div>
						        </div>
						        <div class="col-md-6">
						            <div class="md-form">
						                <input type="text" name="state_permanent" class="form-control" placeholder="Enter Permanent State">
						            </div>
						        </div>
						    </div>
						    <div class="row">
						        <div class="col-md-6">
						            <div class="md-form">
						                <input type="text" name="country_permanent" class="form-control" placeholder="Enter Permanent Country">
						            </div>
						        </div>
						        <div class="col-md-6">
						            <div class="md-form">
						                <input type="text" name="pincode_permanent" class="form-control" placeholder="Enter Permanent Pincode">
						            </div>
						        </div>
						    </div>
						    <label>Enter Current Address:</label>
							<div class="md-form">
								<textarea name="address_current" rows="1" class="md-textarea form-control" placeholder="Enter current Address"></textarea>
							</div>
							<div class="row">
						        <div class="col-md-6">
						            <div class="md-form">
						                <input type="text" name="city_current" class="form-control" placeholder="Enter current City">
						            </div>
						        </div>
						        <div class="col-md-6">
						            <div class="md-form">
						                <input type="text" name="state_current" class="form-control" placeholder="Enter current State">
						            </div>
						        </div>
						    </div>
						    <div class="row">
						        <div class="col-md-6">
						            <div class="md-form">
						                <input type="text" name="country_current" class="form-control" placeholder="Enter current Country">
						            </div>
						        </div>
						        <div class="col-md-6">
						            <div class="md-form">
						                <input type="text" name="pincode_current" class="form-control" placeholder="Enter current Pincode">
						            </div>
						        </div>
						    </div>
						    <label>Enter alternate Address:</label>
							<div class="md-form">
								<textarea name="address_alternate" rows="1" class="md-textarea form-control" placeholder="Enter alternate Address"></textarea>
							</div>
							<div class="row">
						        <div class="col-md-6">
						            <div class="md-form">
						                <input type="text" name="city_alternate" class="form-control" placeholder="Enter alternate City">
						            </div>
						        </div>
						        <div class="col-md-6">
						            <div class="md-form">
						                <input type="text" name="state_alternate" class="form-control" placeholder="Enter alternate State">
						            </div>
						        </div>
						    </div>
						    <div class="row">
						        <div class="col-md-6">
						            <div class="md-form">
						                <input type="text" name="country_alternate" class="form-control" placeholder="Enter alternate Country">
						            </div>
						        </div>
						        <div class="col-md-6">
						            <div class="md-form">
						                <input type="text" name="pincode_alternate" class="form-control" placeholder="Enter alternate Pincode">
						            </div>
						        </div>
						    </div>
						    <label>Enter Retirement date:</label>
							<div class="md-form">
								<input name="retirement" type="date" class="form-control" id="date_of_birth" placeholder="Enter Retirement date">
							</div>
							<label>Enter Biography:</label>
							<div class="md-form">
								<textarea name="biography" rows="1" class="md-textarea form-control" placeholder="Enter Biography"></textarea>
							</div>
							<label>Enter Goals:</label>
							<div class="md-form">
								<input name="goals" type="text" class="form-control" placeholder="Enter Goals">
							</div>
							<label>Enter Interest:</label>
							<div class="md-form">
								<input name="interest" type="text" class="form-control" placeholder="Enter Interest">
							</div>
							<label>Expertise in:</label>
							<div class="md-form">
								<input name="expertise_in" type="text" class="form-control" placeholder="Your Expertise in">
							</div>
							<label>Enter fb Profile link:</label>
							<div class="md-form">
								<input name="fb" type="text" class="form-control" placeholder="Enter fb Profile link">
							</div>
							<label>Enter Google+ Profile link:</label>
							<div class="md-form">
								<input name="google" type="text" class="form-control" placeholder="Enter Google+ Profile link:">
							</div>
							<label>Enter LinkedIn Profile link:</label>
							<div class="md-form">
								<input name="linkedin" type="text" class="form-control" placeholder="Enter LinkedIn Profile link">
							</div>
							<label>Enter your Website link:</label>
							<div class="md-form">
								<input name="website" type="text" class="form-control" placeholder="Enter your website link">
							</div>
							<label>Enter Skype ID:</label>
							<div class="md-form">
								<input name="skype" type="text" class="form-control" placeholder="Enter your Skype ID">
							</div>
							<label>Enter no. of Members in company(only for Profile viewer):</label>
							<div class="md-form">
								<input name="members" type="number" class="form-control" placeholder="Enter Members">
							</div>
							<label>Something About yourself:</label>
							<div class="md-form">
								<textarea name="biography" rows="1" class="md-textarea form-control" placeholder="Enter Description"></textarea>
							</div>
							<label>Upload a Picture of yours:</label>
							<div class="file-field">
						        <div class="btn btn-primary">
						            <span>Choose file</span>
						            <input type="file">
						        </div>
						        <div class="file-path-wrapper">
						           <input class="file-path validate" type="text" placeholder="Upload a pic">
						        </div>
						    </div>
						    <label>Upload your Resume:</label>
						    <div class="file-field">
						        <div class="btn btn-primary">
						            <span>Choose file</span>
						            <input type="file">
						        </div>
						        <div class="file-path-wrapper">
						           <input class="file-path validate" type="text" placeholder="Upload a Resume">
						        </div>
						    </div>
							<div class="md-form col-md-4 pull-right">
								<input name="submit" type="submit" class="btn-secondary-outline waves-effect form-control" id="submit" value="SUBMIT">
							</div>
						</form>
					</div>	
				</div>
			</div>
		</div>
	</div>		
</section>
@stop