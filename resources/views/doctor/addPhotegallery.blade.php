<!DOCTYPE html>
<html>
	<head>
		<title>Add Photo Gallery</title>
		<link href="/CSS/style.css" rel="stylesheet" type="text/css" >
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			<table border="0" width="100%">
				<tr height="15%" bgcolor="#23274C">
					<td width="20%"></td>
					<td valign="top"> <h2> <b> <font color="#CACBD5">Hospital </font><font color="white">Management System</font> </b> </h2>
						<td width="30%" valign="top" align="right">
                             <br/><br/>
                              <br>   <a href="/logout"><font color="red" >logout</font></a><br/>
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
					<table border="0" width="100%">
                            <tr>
                                <td align="right"></td>
                                <td>
                                    <%if(typeof errors != "undefined"){%>
                                        <% errors.forEach(function(err){ %>
                                            <font color="red">*<%=err.msg%></font> <br/>
                                        <% }); %>
                                    <% } %> 
                                    <br/>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">Picture:</td>
                                <td><input type="file" name="upfile" class="a" ></td>
                            </tr>
                            <tr>
                                <td align="right">Title:</td> <!-- set table data -->
                                
                                <td><textarea rows="3" cols="60" type="text"  name="title" placeholder="Please enter something" ></textarea> </td>
                            </tr>
                            <tr>
                                <td align="right">Description:</td> <!-- set table data -->
                                
                                <td><textarea rows="10" cols="100" type="text" name="des" placeholder="Please enter something" ></textarea> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="Add Photo gallery" class="btn" />  </td>
                            </tr>

					</table>
				</td>
				<td width="20%"></td>
            </table>
            <br><br><br><br><br><br>
			<footer>
			<table border="0" width="100%">
				<tr>
					<td width="20%"></td>
					<td>
						<br> <br>
						&copy; Copyright 2019 Hospital Management System

					</td>
					<td width="20%"></td>
				</tr>
			</table>
			</footer>
		</form>
	</body>
</html>