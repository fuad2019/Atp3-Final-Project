<!DOCTYPE html>
<html>
	<head>
		<title>Doctor Registration</title>
		 <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">

	{{csrf_field()}}
			
			<table border="0" width="100%">
				<tr height="15%" bgcolor="#23274C">
					<td width="20%"></td>
					<td valign="top"> <h2> <b> <font color="#CACBD5">Hospital </font><font color="white">Management System</font> </b> </h2>
						<td width="30%" valign="top" align="right">
							 <br/><br/><br/>
							<a href="/login"><font color="white">Login</font></a>&nbsp;&nbsp;<font color="white">|</font>&nbsp;&nbsp;
							<a href="/registration"><font color="white">Doctor Registration</font></a><br/>
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
							<li id="q"><a class="active" href="">Home</a></li>
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
									
									<br/>
								</td>
							</tr>



						
						<tr> <!-- create a table row -->
                            <td align="right">First name:</td> <!-- set table data -->
                            <td><input type="text" name="firstname" placeholder="Please enter your First name" /> <font color="red"><label></label></font> </td>
                        </tr>
                       

                        <tr>
                            <td align="right">Last name:</td>
                            <td><input type="text" name="lastname" placeholder="Please enter your last name" /> <font color="red"><label></label></font> </td>
                        </tr>


                         <tr>
                            <td align="right">User name:</td>
                            <td><input type="text" name="username" placeholder="Please enter your last name" /> <font color="red"><label></label></font> </td>
                        </tr>




                        <tr>
                            <td align="right">Gender:</td>
                            <td><input type="radio" name="gender" value="Male" />Male
                                <input type="radio" name="gender" value="Female" />Female
								<font color="red"><label></label></font> 
                            </td>
                        </tr>

                        <tr>
                            <td align="right">Designation:</td>
                            <td><input type="text" name="designation" placeholder="Please enter your designation" /> <font color="red"><label></label></font> </td>
                        </tr>




                        
                       
                      
                        <tr>
                            <td align="right">Email:</td>
                            <td><input type="text" name="email" id="email" placeholder="Please enter your email" onblur="search()" /> <font color="red"><label id="e"></label> <label id="e"></label> </font> </td>
							 
                        </tr>





                        <tr>
                            <td align="right">Phone:</td>
                            <td><input type="text" name="phone" placeholder="Please enter your phone" /> <font color="red"><label></label></font> </td>
                        </tr>


                        <tr>
                            <td align="right">Address:</td>
                            <td><input type="text" name="address" placeholder="Please enter your location" /> <font color="red"><label></label></font> </td>
                        </tr>


                        <tr>
                            <td align="right">Profile Picture:</td>
                            <td><input type="file" name="image" ></td>
                        </tr>


                        <tr>
                            <td align="right">Password:</td>
                            <td><input type="password" name="password" /> <font color="red"><label></label></font> </td>
                        </tr>
                      
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="submit" />  </td>
                        </tr>
					</table>
				</td>
				<td width="20%"></td>
			</table>
			<hr size="3" color="black"/>
			<table border="0" width="100%">
				<tr>
					<td width="20%"></td>
					<td width="35%">
						<h2> <b> About </b> </h2>
						<!--<ul type="circle">
							<li> <a href="app/others/about.php"><font color="#de312d">About OpenCourseWare </font> </a> </li>
							<li> <a href="app/others/help.php"><font color="#de312d">Help & FAQs </font> </a> </li>
							<li> <a href="app/others/contact.php"><font color="#de312d">Contact Us </font> </a> </li>
							<li> <a href="app/others/privacy.php"><font color="#de312d">Privacy & Terms of Use </font> </a> </li>
						</ul>-->
						<vr>
					</td>
					<td width="25%" valign="top">
					</td>
					<td width="20%"></td>
				</tr>
				<tr>
					<td width="20%"></td>
					<td colspan="2">
						<hr>
					</td>
					<td width="20%"></td>
				</tr>
			</table>
		</form>
	</body>
</html>

