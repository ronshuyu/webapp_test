<!-- End Header -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <!-- ======= Sidebar ======= -->
  

  <aside style="background-color:FFFFF" id="sidebar" class="sidebar">

    <ul  class="sidebar-nav" id="sidebar-nav">

      
        <a style="background-color:FFFFFF" class="nav-link " href="login1.php">
         
          <span style="color:#1E7D0E"><b>Dashboard</b></span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a style="background-color:FFFFF"style class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <span style="color:#1E7D0E"><b>Liabilities</b></span><i style="color:#1E7D0E" class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a style="background-color:FFFFF" href="login1.php">
              <i class="bi bi-circle"></i><span style="color:#1E7D0E"><b>Grades</b></span>
            </a>
  
          </li>
        </ul>
      
      

  </aside><!-- End Sidebar-->

  <main  id="main" class="main">
  <nav  style="background-color:#159802" class="navbar navbar-light bg-faded">
	<font color="#FFFFFF">
  	<h1 style="font-family:arial"><b> Dashboard</b></h1>
	</font>
  </nav>
	
<nav>
        <ol style="background-color:#EDEDED" class="breadcrumb">
          <li class="breadcrumb-item"><a href="login1.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    <section class="section dashboard">
 <div class="container">
		   <div class="row">
		   <div class="row">
		   <div class="col-lg-5">
			
		      

					<form>
					     <b>Student Information</b>
             <div class="form-group">
                 <label> Complete Name</label>
                 <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">

			        <label> Age</label>
			        <input type="number" class="form-control" id="age" placeholder="Age">
		          	<label>Address</label>
			          <input type="text" class="form-control" id="address" placeholder="p7 Sta. Maria Road">
			       <label>Email Address</label>
			          <input type="text" class="form-control" id="email" placeholder="johnappleseed@gmail.com">
    				</form> 
					<br>
				
					<a style="color:#808080">_________________________________________________________</a>
						<br>
						<br>
					    <b>School Information</b>
            			<div class="form-group">
                		<label> Student ID</label>
                		<input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="XX-XXX-C">
						<label> Course</label>
				        <input type="text" class="form-control" id="age" placeholder="">
		        		<label>Major</label>
			      	    <input type="text" class="form-control" id="address" placeholder="">
			     	    <label>Year</label>
			            <input type="text" class="form-control" id="email" placeholder="">
						<br>
					<a style="color:#808080">_________________________________________________________</a>
						<br>
						<br>
						<label> General Weighted Average</label>
			        <input style="background-color:#EDEDED" type="number" class="form-control" id="age" placeholder="" readonly>
					<br>
		          	<label>Grade</label>
			          <input style="background-color:#EDEDED" type="text" class="form-control" id="address" placeholder="" readonly>
					  <br>
			       <label>Remarks</label>
			          <input style="background-color:#EDEDED" type="text" class="form-control" id="email" placeholder="" readonly>
    				</form> 
					</div>
				</div>
</div>


		      <div class="col">
			  <div class="col-lg-9">

					    <b>Prelim Period</b>
					     <div class="form-group">
							 <label> Complete Name</label>
							 <input type="number" class="form-control" id="prelim" placeholder="14">
							 <input type="number" class="form-control" id="midterm" placeholder="Activity">
							 <input type="number" class="form-control" id="semis" placeholder="Recitiation">
							 <input type="number" class="form-control" id="final" placeholder="Prelim Score">
					     </div>   
					     <div class="form-group">
							<label for="cname"><b>Average</b></label>
      				<input style="background-color:#EDEDED" type="number" class="form-control" id="Average" placeholder="" readonly>
<br>
					     <b>Midterm Period</b>
					     <div class="form-group">
							 <input type="number" class="form-control" id="prelim" placeholder="Quiz">
							 <input type="number" class="form-control" id="midterm" placeholder="Activity">
							 <input type="number" class="form-control" id="semis" placeholder="Recitiation">
							 <input type="number" class="form-control" id="final" placeholder="Midterm Score">
					     </div>   
					     <div class="form-group">
							<label for="cname"><b>Average</b></label>
      				<input style="background-color:#EDEDED" type="number" class="form-control" id="Average" placeholder="" readonly>
				         </div>


					     <b>Semi-Finals Period</b>
					     <div class="form-group">
							 <input type="number" class="form-control" id="prelim" placeholder="Quiz">
							 <input type="number" class="form-control" id="midterm" placeholder="Activity">
							 <input type="number" class="form-control" id="semis" placeholder="Recitiation">
							 <input type="number" class="form-control" id="final" placeholder="Semi-Finals Score">
					     </div>   
					     <div class="form-group">
							<label for="cname"><b>Average</b></label>
      				<input style="background-color:#EDEDED" type="number" class="form-control" id="Average" placeholder="" readonly>
				         </div>

					     <b>Finals Period</b>
					     <div class="form-group">
							 <input type="number" class="form-control" id="prelim" placeholder="Quiz">
							 <input type="number" class="form-control" id="midterm" placeholder="Activity">
							 <input type="number" class="form-control" id="semis" placeholder="Recitiation">
							 <input type="number" class="form-control" id="final" placeholder="Finals Score">
					     </div>   
					     <div class="form-group">
							<label for="cname"><b>Average</b></label>
      				<input style="background-color:#EDEDED" type="number" class="form-control" id="Average" placeholder="" readonly>
					
			  <br>
<button class= "btn btn-success w-100" type="submit" >Submit</button>
						 </div>
</div>
			 
                
</div>
</div>
						</div>
						
	</div>

            </div>
          </div>
</div>