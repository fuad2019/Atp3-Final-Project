<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		 <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
	</head>
	<body>
		<form method="post">
			<table border="0" width="100%">
				<tr height="15%" bgcolor="#23274C">
					<td width="20%"></td>
					<td valign="top"> <h2> <b> <font color="#CACBD5">Hospital </font><font color="white">Management System</font> </b> </h2>
						<td width="30%" valign="top" align="right">
                             <br/><br/>
                             


                  <font color="white">Welcome To The Hospital   </font> <br><a href="{{ route('logout')}}"><font color="red">logout</font></a><br/>

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
                                        <a href="{{ route('doctor.index')}}">Home</a>     
                                    <div class="dropdown">
                                        <button class="dropbtn">Profile
                                        <i class="fa fa-caret-down"></i>
                                        </button>
                                        <div class="dropdown-content">
										

									
										<a href="{{ route('view.profile')}}">View profile</a>



                                        
                                    </div>
									</div> 
									<div class="dropdown">
										<button class="dropbtn">Patient
										<i class="fa fa-caret-down"></i>
										</button>
										<div class="dropdown-content">
										  <a href="{{ route('appointment.index')}}">Appointment Requests</a>
										  <a href="{{ route('patient.index')}}">Patient List</a>
									</div>
									</div>
                                    <div class="dropdown">
                                        <button class="dropbtn">Prescribe
                                        <i class="fa fa-caret-down"></i>
                                        </button>
                                        <div class="dropdown-content">
                                        <a href="{{ route('prescribe.add')}}">Add Prescription</a>
                                        <a href="{{ route('prescribe.index')}}">Prescription List</a>
                                        </div>
									</div>


									

										<div class="dropdown">
										<button class="dropbtn">Schedule
										<i class="fa fa-caret-down"></i>
										</button>
										<div class="dropdown-content">
										 <a href="{{ route('schedule.add')}}">Add Schedule</a>
										<a href="{{ route('schedule.index')}}">Schedule List</a>
										</div>

										</div>

                                        <div class="dropdown">
										<button class="dropbtn">Messages
										<i class="fa fa-caret-down"></i>
										</button>
										<div class="dropdown-content">
									 <a href="{{ route('message.inbox')}}">inbox</a>
									 <a href="{{ route('message.send')}}">Send Message</a>
										</div>
									   </div>
                            </li>
                        </ul>
                        
					    </td>
					    <td width="20%"></td>
			     		</tr>
			         </table>



	</head>
	        


	         <body>
		
			<table border="0" width="100%">
				<td width="20%"></td>
				<td>
					<table border="0" width="100%">
                           
                          <!--  paste here  -->

                       

                            <tr> 
                                <!-- set table data -->
                                <td align="right">Patient Name:</td>
                                <td><input type="text"  name="pname" placeholder="Please enter something" value="{{$prescribe->pname}}" ></input> </td>
                            </tr>


      
                             <tr>
                                <td align="right">Patient Age:</td> <!-- set table data -->
                                
                                <td><input  type="text"  name="age" placeholder="Please enter something" value="{{$prescribe->age}}"></input> </td>
                            </tr>

							 <tr>
                                <td align="right">Date of Appointment:</td> <!-- set table data -->
                                   
                           <td><input type="date" name="appoint" value="{{$prescribe->appoint}}"/> <font color="red"><label></label></font> </td>

                            </tr>


 							<tr>
                                <td align="right">Doctor Name:</td> <!-- set table data -->
                                
                                <td><input type="text"  name="dname" placeholder="Please enter something" value="{{$prescribe->dname}}" ></input> </td>
                            </tr>



                          <tr>
                                <td align="right">Medicine:</td> <!-- set table data -->
                                
                                <td><textarea rows="8" cols="80" type="text" name="med" placeholder="Please enter something" value="{{$prescribe->med}}"></textarea> </td>
                            </tr>






                            <tr>
                                <td align="right">Advice:</td> <!-- set table data -->
                                
                                <td><textarea rows="8" cols="80" type="text" name="des" placeholder="Please enter something" value="{{$prescribe->des}}"></textarea> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="update" class="btn" />  </td>
                            </tr>

					</table>
				</td>
				<td width="20%"></td>
			</table>
			
		</form>
	</body>
</html>