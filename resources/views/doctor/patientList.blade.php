<!DOCTYPE html>
<html>
	<head>
		<title>Patient List</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="/CSS/style.css" rel="stylesheet" type="text/css" >
		<script type="text/javascript" src="/Script/script.js"></script>
	</head>
	<body>
		<form method="post">
			<table border="0" width="100%">
				<tr height="15%" bgcolor="#23274C">
					<td width="20%"></td>
					<td valign="top"> <h2> <b> <font color="#CACBD5">Hospital </font><font color="white">Management System</font> </b> </h2>
						<td width="30%" valign="top" align="right">
                             <br/><br/><br/>
                             <a href="/logout"><font color="red">logout</font></a><br/>
						</td>
					</td>
					<td width="20%"></td>
				</tr>
			</table>
			<table border="0" width="100%">
				<tr height="7" bgcolor="#616174">
					<td width="20%"></td>
					<td width="40" height="40">
						<ul id="ul">
							<li id="q">

                                  <div class="navbar">
                                        <a href="/doctor">Home</a>     
                                    <div class="dropdown">
                                        <button class="dropbtn">Profile
                                        <i class="fa fa-caret-down"></i>
                                        </button>
                                        <div class="dropdown-content">
										<a href="/doctor/profile">My profile</a>
                                        <a href="/doctor/changePassword">Change Password</a>
                                    </div>
									</div> 
									<div class="dropdown">
										<button class="dropbtn">Patient
										<i class="fa fa-caret-down"></i>
										</button>
										<div class="dropdown-content">
										<a href="/doctor/appointmentList">Appointment Requests</a>
										<a href="/doctor/patientList">Patient List</a>
									</div>
									</div>
                                    <div class="dropdown">
                                        <button class="dropbtn">Prescribe
                                        <i class="fa fa-caret-down"></i>
                                        </button>
                                        <div class="dropdown-content">
                                        <a href="/doctor/addPrescription">Add Prescription</a>
                                        <a href="/doctor/Prescriptionlist">Prescription List</a>
                                        </div>
									</div>


									<div class="dropdown">
										<button class="dropbtn">Photo gallery
										<i class="fa fa-caret-down"></i>
										</button>
										<div class="dropdown-content">
											<a href="/doctor/addPhotegallery">Add Photo gallery</a>
										<a href="/doctor/photoGallaryList">Photo gallery List</a>
										</div>
										</div>

										<div class="dropdown">
										<button class="dropbtn">Schedule
										<i class="fa fa-caret-down"></i>
										</button>
										<div class="dropdown-content">
										<a href="/doctor/addSchedule">Add Schedule</a>
										<a href="/doctor/scheduleList">Schedule List</a>
										</div>

										</div>

                                        <div class="dropdown">
										<button class="dropbtn">Messages
										<i class="fa fa-caret-down"></i>
										</button>
										<div class="dropdown-content">
										<a href="/doctor/inbox">inbox</a>
										<a href="/doctor/sendmsg">Send Message</a>
										</div>
									   </div>




							</li>
                        </ul>
                        
					</td>
					<td width="20%"></td>
				</tr>
			</table>
			<table border="0" width="100%">
				<td width="20%"></td>
				<td>
					<br>
					<input type="text" id="myInput" width="75%" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
					<table border="0" width="100%">
                        <table border="1" width="75%" id="myTable">
							
                            <tr id='border' class="header">
                               
                                <th id='border'>Patient Name</th>
                                 <th id='border'>Gender</th>
                                <th id='border'>Patient Age</th>
                                <th id='border'>Phone</th>
                                <th id='border'>Appointment Date</th>
                                <th id='border'>Profile</th>
                                
                            </tr>
                        
                            <% for(var i=0; i < users.length; i++){ %>
                        
                                <tr id='border'>
                                    
                               
                                    <td id='border'><%= users[i].pname %></td>
                                    <td id='border'><%= users[i].gender %></td>
                                    <td id='border'><%= users[i].age %></td>
                                    <td id='border'><%= users[i].phone %></td>
                                    <td id='border'><%= users[i].date %></td>
                                  
                                    <td id='border'>
                                        <a href="/doctor/PatientProfile/<%= users[i].id %>" class="btn">Profile</a>
                                    </td>
								</tr>
								

                            <% } %>
                        </table>
					</table>
				</td>
				<td width="20%"></td>
			</table><br><br><br><br><br><br>
			<footer>
					<table border="0" width="100%">
						<tr>
							<td width="20%"></td>
							<td>
								
								&copy; Copyright 2019 Hospital Management System
		
							</td>
							<td width="20%"></td>
						</tr>
					</table>
			</footer>
		</form>
	</body>
</html>