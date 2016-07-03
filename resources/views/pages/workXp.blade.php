@extends('layouts.default')
@section('content')
<style type="text/css">
	.heading{
		padding-bottom: 5%;
		color: red;
		font-size: 25px;
		text-decoration: underline;
	}
	input[type=submit] {
    padding-top: 5%;
}
</style>
<script type="text/javascript">
	$(document).ready(function(){

		var docHeight = $(window).height();
		var footerHeight = $('#copyright').height();
		var footerTop = $('#copyright').position().top + footerHeight;
		// variable for same feilds---- same
	    var same = '<div class="md-form"><input name="org" type="text" class="form-control" placeholder="Enter organization/Society/Company name"></div><div class="md-form"><input name="rank" type="text" class="form-control" placeholder="Enter your Rank"></div><div class="md-form"><input name="position" type="text" class="form-control" placeholder="Enter your Position"></div><div class="md-form"><input name="role" type="text" class="form-control" placeholder="Enter your Role"></div><div class="md-form"><input name="location" type="text" class="form-control" placeholder="Enter Location"></div><div class="md-form"><textarea name="biography" rows="1" class="md-textarea form-control" placeholder="Enter Description"></textarea></div>';

		   
		if (footerTop < docHeight) {
			$('#copyright').css('margin-top', 10 + (docHeight - footerTop - 160) + 'px');
		}

		$('#sector').on('change', function (e) {
		    var valueSelected = this.value;
		    if(valueSelected == 'public'){
		    	document.getElementById("addAccording").innerHTML = '<select class="mdb-select" id="publicSector" name="typePublic"><option value="" disabled selected>In Public  Sector</option><option value="gov">Government of India</option><option value="state">State Government</option><option value="psv">PSV</option></select>';
		    }
		    else if(valueSelected == 'private'){
		    	document.getElementById("addAccording").innerHTML = same;
		    	document.getElementById("inPublic").innerHTML = null;
		    }
		});

		$('#addAccording').on('change', '#publicSector', function(e){
		    var valSelected = this.value;
		    if(valSelected == 'gov'){
		    	document.getElementById("inPublic").innerHTML = '<div class="md-form"><input name="ministrate" type="text" class="form-control" placeholder="Enter Ministrate"></div><div class="md-form"><input name="department" type="text" class="form-control" placeholder="Enter Departement"></div>' + same;
		    }
		    else if(valSelected == 'state'){
		    	document.getElementById("inPublic").innerHTML = '<div class="md-form"><input name="state" type="text" class="form-control" placeholder="Enter State"></div><div class="md-form"><input name="ministrate" type="text" class="form-control" placeholder="Enter Ministrate"></div><div class="md-form"><input name="department" type="text" class="form-control" placeholder="Enter Departement"></div>' + same;
		    }
		    else if(valSelected == 'psv'){
		    	document.getElementById("inPublic").innerHTML = same;
		    }
		});
	});	
</script>
</select>
<section id="team" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<p>
				  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				    Add new Experience
				  </a>
				</p>
				<div class="collapse" id="collapseExample">
				  <div class="card">
					<div class="content">
						<form action="#" method="post">
							<select class="mdb-select" id="sector" name="employement">
							    <option value="" disabled selected>Choose Sector</option>
							    <option value="public" id="public">Public Sector</option>
							    <option value="private" id="private">Private Sector</option>
							</select>
							<div id="addAccording">
							</div>
							<div id="inPublic">
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
	</div>		
</section>
@stop
