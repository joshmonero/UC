@extends('layouts.app')
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
  
@section('content')
        <h1>{{$title}} </h1>
        <p>Where doctor is just few clicks away</p>
		<div  class="container ">
        <div class="col-md-4" style ="float:right">
			  
            <div class="card ">

              
                 

              <div id="Doctor" class="w3-container city tablink">
                  <ul class="nav nav-pills nav-justified">
					
					<li class="nav-item default ">
					  <a class="nav-link" data-toggle="tab" href="#doctor">Doctor</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#patient">Patient</a>
					</li>
					
				  </ul>
              
              
            <div class="card ">
              
			  
			  <div class="tab-content">
					
					<div id="doctor" class="container tab-pane active">
					<br>
					  <h4 class="title">Doctor - Signup</h4>
					  <div class="card-body">
						<form>
						  <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
								<label>Country</label>
								<input type="text" class="form-control"  placeholder="Country"  name="country" required>
							  </div>
							 </div>
							
							</div>
							
							<div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
								<label>Mobile Number</label>
								<input type="text" class="form-control" placeholder="mobilenumber" name="mobilenumber" required>
							  </div>
							</div>
							</div>
							
							
							<div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" placeholder="yourname@email.com" name="email" required>
							  </div>
							</div>
						  </div>
						  <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
							  
								<label>Firstname</label>
								<input type="text" class="form-control"  placeholder="FirstName" value="" name="fname" required>
							  </div>
							</div>
							</div>
							<div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
								<label>Middle Name</label>
								<input type="text" class="form-control" placeholder="MiddleName" value="" name="mname" required>
							  </div>
							</div>
							</div>
							<div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
								<label for="exampleInputEmail1">Lastname</label>
								<input type="email" class="form-control" placeholder="Lastname" name="lname"required >
							  </div>
							</div>
						  </div>
						 
						 <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" placeholder="Username" name="username">
							  </div>
							</div>
						  </div>
						   <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" placeholder="Password" name="pass" required>
							  </div>
							</div>
							</div>
							<div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
								<label>Confirm Password</label>
								<input type="password" class="form-control" placeholder="Confirm password" name="cpass" required>
							  </div>
							</div>
						  </div>
						  
						  
						  <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
								<label>Short Biography</label>
								<textarea rows="3" cols="80" class="form-control" placeholder="Write your biography here..." value=""></textarea>
							  </div>
							</div>
						  </div>
							<input  class="btn btn-primary " type="submit" name="create" value="Create">
							<input  class="btn btn-primary " type="reset" name="clear" value="Reset">
					
					
					</form> 
						 </div>
					</div>
					
					<div id="patient" class="container tab-pane fade"><br>
					  <h4 class="title">Patient - Signup</h4>
					  <div class="card-body">
                <form>
                 <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control"  placeholder="City"  name="city" required>
                      </div>
                    </div>
					</div>
					<div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
                        <label>&nbsp;</label>
                        <input type="text" class="form-control" placeholder="Street/Block" name="stblock" required>
                      </div>
                    </div>
					</div>
					
					
                    <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
                        <label for="exampleInputEmail1">&nbsp;</label>
                        <input type="number" class="form-control" placeholder="ZipCode" name="Zipcode" required>
                      </div>
                    </div>
                  </div>
				  <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
                        <label>Email</label>
                        <input type="e-mail" class="form-control"  placeholder="E-mail" value="" name="email" required>
                      </div>
                    </div>
					</div>
					
                   <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
                        <label >Language</label>
						  <select class="form-control"  name="laguage" required>
						  <option value= "" >Select Langauage</option>
							<option value= "Fil" >Filipino</option>
							<option value= "Eng" >English</option>
							
						  </select>
                      </div>
                    </div>
					</div>
                    <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
                        <label for="exampleInputEmail1">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="Mobile" name="Mobile"required >
                      </div>
                    </div>
                  </div>
                 
                 <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
                        <label for="sel1">Type of Doctor you are looking for</label>
                          <select class="form-control" id="sel1" name="gender" required>
                          <option value= "" >Pls. Select one...</option>
                            <option value= "FM" >Family Medicine</option>
                            <option value= "PD" >Pediatrics</option>
                            <option value= "GenSurg" >General Surgery</option>
                            <option value= "Opt" >Optalmology</option>
                            <option value= "Psyc" >Psychiatry</option>
                            <option value= "Nuero" >Nuero</option>
                            <option value= "Card" >Cardiology</option>
                            <option value= "Surg" >Surgery</option>
                            <option value= "Derm" >Dermatology</option>
                            <option value= "Endoc" >Endocrinology</option>
                            <option value= "OB-Gy" >OB-GYN</option>
                            <option value= "Onc" >Oncology</option>
                            <option value= "Opth" >Opthalmology</option>
                            <option value= "ENT-HNS" >ENT-HNS</option>
                            <option value= "GenPra" >General Practice</option>
                            <option value= "Derm" >Dermatology</option>
                            <option value= "Orth" >Orthopedics</option>
                          </select>
                      </div>
                    </div>
					</div>
                    <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
                         <label >Gender</label>
						  <select class="form-control"  name="laguage" required>
						  <option value= "" >Select Gender</option>
							<option value= "M" >Male</option>
							<option value= "F" >Female</option>
						  </select>
                      </div>
                    </div>
					</div>
                   <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
                        <label>Birthdate</label>
                        <input type="DATE" class="form-control" placeholder="MM/DD/YYYY" name="birthdate" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
                        <label>Symptoms/ Questions:</label>
                        <textarea rows="2" cols="100" class="form-control" placeholder="Write your short biography here..." value=""></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
                        <label>Firstname</label>
                        <input type="text" class="form-control"  placeholder="FirstName" value="" name="fname" required>
                      </div>
                    </div>
					</div>
                    <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" placeholder="MiddleName" value="" name="mname" required>
                      </div>
                    </div>
					</div>
                     <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
                        <label for="exampleInputEmail1">Lastname</label>
                        <input type="email" class="form-control" placeholder="Lastname" name="lname"required >
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12 pr-md-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username">
                      </div>
                    </div>
                  </div>
				    <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="pass" required>
                      </div>
                    </div>
					</div>
                   <div class="row">
							<div class="col-md-12 pr-md-1">
							  <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Confirm password" name="cpass" required>
                      </div>
                    </div>
                  </div>
                  
						<input  class="btn btn-primary " type="submit" name="create" value="Create">
						<input  class="btn btn-primary " type="reset" name="clear" value="Reset">
					
					
					</form> 
				</div>					
                 </div>
					</div>
				  </div>
              
                    
                </div>
            </div>
          
		 
		 </div>
		 
		 
		 <div class="content" style="float:bottom; height:1100">
			<div class="card">
			
			<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			  </ul>
			  <div class="carousel-inner">
				<div class="carousel-item active">
				 
				  <img src="/public/img/mdpic.png" alt="Online Consultation" width="1100" height="500">
				  
				  <div class="carousel-caption">
					<h3>Online Consultation</h3>
					<p>Just enjoy being OPD(Outpatient)</p>
				  </div>   
				</div>
				<div class="carousel-item">
				   <img src="/public/img/mdonline.png" alt="Doctors availabity, 24/7" width="1100" height="500">
				  <div class="carousel-caption">
					<h3>Enjoy the consultation</h3>
					<p>Doctors are always availble</p>
				  </div>   
				</div>
				<div class="carousel-item">
				  <img src="/public/img/patientmd.png" alt="Doctors availabity, 24/7" width="1100" height="500">
				  <div class="carousel-caption">
					<h3>Online Clinic</h3>
					<p>For fast anf easy consultation</p>
				  </div>   
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			  </a>
			</div>
			</div>
			
		</div> 
		
	
		</div>
		 <div class="content" style="position:bottom; ">
			<div class="card" style="align:center;">
			<h2>Bridging Doctors and Patients together easily </h2>
			</div>
		</div>
		  
		 
		
@endsection
