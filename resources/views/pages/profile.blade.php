@extends('layouts.default')
@section('content')
<style type="text/css">
	#team{
		padding-bottom: 50px;
	}
	.title-style {
	    margin-bottom: 5%;
	    color:black;
	    text-decoration: underline;
	}
	.row{
		padding-left: 2%;
		padding-right: 2%;
	}
	.sort th{
		width: 40%;
	}
	.card{
		margin-bottom: 25px;
	}
	.heading{
		margin-bottom: 5%;
		text-decoration: underline;
		font-size: 25px;
	}
	
.card-block ul li{
    padding: 10px 0;
    font-size: 16px;
    border-bottom: 1px solid #eee;
}
/*	.row {
    margin-right: 0.0625rem;
    margin-left: 0.0625rem;
}*/
</style>
<section id="team" class="parallax-section">
	<div class="row">
    	<div class="col-md-3 pull-right">
			<div class="card">
			    <!--Card image-->
			    <div class="view overlay hm-white-slight">
			        <img src="images/profile.jpg" class="img-fluid" alt="">
			        <a href="#">
			            <div class="mask"></div>
			        </a>
			    </div>
			    <!--Card content-->
			    <div class="card-block">
			        <!--Text-->
			        <ul>
			            <!-- <li><strong>No of Members In company</strong> 5000</li> For profile viewer -->
			            <li><strong>Name:</strong> Abhinav Rai</li>
			            <li><strong>Date of birth:</strong> 05 Dec, 1993</li>
			            <li><strong>Expertise In:</strong> Web Development</li>
						<li><strong>Retirement Date:</strong> 23 March, 2050</li>
			            <li><strong>Current Location:</strong> Lucknow</li>
			            <li><strong>Phone:</strong> 8743960158</li>
			            <li><strong>Email:</strong> abhinavrai23@timepass.com</li>
			          </ul>
			    </div>
			    <!--/.Card content-->
			</div>
		</div>	
		<div class="col-md-9">
			<div class=" text-center">
				<h1 class="heading">About Me</h1>
			</div>
			<div class="row">
				<div class="col-md-6">
					<table class="table sort">
					  <tbody>
					    <tr>
					      <th scope="row">Gender:</th>
					      <td>Male</td>
					    </tr>
					    <tr>
					      <th scope="row">Home Contact no:</th>
					      <td>979400XXXX</td>
					    </tr>
					    <tr>
					      <th scope="row">Office Contact no:</th>
					      <td>8115392638</td>
					    </tr>
					    <tr>
					      <th scope="row">Other Contact no:</th>
					      <td>8115392638</td>
					    </tr>
					    <tr>
					      <th scope="row">Fax Contact no:</th>
					      <td>9LK23BN23</td>
					    </tr>
					  </tbody>
					</table>
		    	</div>
		    	<div class="col-md-6">
		    		<table class="table sort">
					  <tbody>
					    <tr>
					      <th scope="row">Goals:</th>
					      <td>Movie, Video Games</td>
					    </tr>
					    <tr>
					      <th scope="row">Interest</th>
					      <td>Women(20-28)</td>
					    </tr>
					    <tr>
					      <th scope="row">Office Email ID:</th>
					      <td>abhinav@gmail.com</td>
					    </tr>
					    <tr>
					      <th scope="row">Other Email ID:</th>
					      <td>abhinav@gmail.com</td>
					    </tr>
					    <tr>
					      <th scope="row">Skype ID</th>
					      <td>34987</td>
					    </tr>
					  </tbody>
					</table>
		    	</div>
		    	<div class="col-md-12">
		    		<table class="table">
					  <tbody>	    
					    <tr>
					    	<th>Website link:</th>
					    	<td><a href="http://raiabhinav.freeoda.com">http://raiabhinav.freeoda.com</a></td>
					    </tr>
					    <tr>
					    	<th>Contact Page:</th>
					    	<td><a href="http://raiabhinav.freeoda.com/TechPros/Resume.html">http://raiabhinav.freeoda.com/TechPros/Resume.html</a></td>
					    </tr>
					    <tr>
					    	<th>Google+ link:</th>
					    	<td><a href="#">raiabhinavrai1994@gmail.com</a></td>
					    </tr>
					    <tr>
					    	<th>Facebook Profile link:</th>
					    	<td><a href="https://www.facebook.com/abhinav.rai.7927">https://www.facebook.com/abhinav.rai.7927</a></td>
					    </tr>
					    <tr>
					    	<th>LinkedIn Profile link:</th>
					    	<td><a href="https://www.linkedin.com/in/abhinav-rai-696a95a0">https://www.linkedin.com/in/abhinav-rai-696a95a0</a></td>
					    </tr>
					   </tbody>
					</table>    
		    	</div>	
		    	<div class="col-md-12">
		    		<table class="table">
					  <tbody>
					    <tr>
					      <th scope="row">Permanent Address:</th>
					      <td>H no. 582/1320, Bagh no2, Satyalokh Colony, Manesh Nagar, Kanpur Road, Lucknow, Uttar Pradesh, India. Pin Code-226023</td>
					    </tr>
					    <tr>
					      <th scope="row">Current Address:</th>
					      <td>H no. 582/1320, Bagh no2, Satyalokh Colony, Manesh Nagar, Kanpur Road, Lucknow, Uttar Pradesh, India. Pin Code-226023</td>
					    </tr>
					    <tr>
					      <th scope="row">Alternate Address:</th>
					      <td>H no. 582/1320, Bagh no2, Satyalokh Colony, Manesh Nagar, Kanpur Road, Lucknow, Uttar Pradesh, India. Pin Code-226023</td>
					    </tr>
					    <tr>
					      <th scope="row">Biography:</th>
					      <td>A biography is a detailed description of a person's life. It involves more than just the basic facts like education, work, relationships, and death, but also portrays a subject's experience of these life events.</td>
					    </tr> 
					    <tr> 
					      <th scope="row">About Yourself:</th>
					      <td>A biography is a detailed description of a person's life. It involves more than just the basic facts like education, work, relationships, and death, but also portrays a subject's experience of these life events.</td>
					    </tr>
					   </tbody>
					 </table>
				</div>
				
		    </div>								
		</div>	
	</div>
	</div>		
</section>
@stop