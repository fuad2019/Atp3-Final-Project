


<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Edit DOCTOR</h1>
	<a href="/home">Back</a> | 
	<a href="/logout">logout</a>
	
<center>
    	<form method="post">
        <table>
          
			<td>FIRST NAME</td>
			<td><input type="text" name="firstname" value="<%= firstname %>"></td>
		</tr>
           

        <tr>
			<td>LAST NAME</td>
			<td><input type="text" name="lastname" value="<%= lastname %>"></td>
		</tr>



         <tr>
			<td>Date of Birth:</td>
			<td><input type="text" name="dob" value="<%= dob %>"></td>
		</tr>


		<tr>
			<td>Gender:</td>
			<td><input type="text" name="gender" value="<%= gender %>"></td>
		</tr>


        <tr>
			<td>Designation:</td>
			<td><input type="text" name="designation" value="<%= designation %>"></td>
		</tr>


         <tr>
			<td>Email:</td>
			<td><input type="text" name="email" value="<%= email %>"></td>
		</tr>

 		<tr>
			<td>Phone:</td>
			<td><input type="text" name="phone" value="<%= phone %>"></td>
		</tr>


        <tr>
			<td>City:</td>
			<td><input type="text" name="city" value="<%= city %>"></td>
		</tr>


        <tr>
			<td>Location:</td>
			<td><input type="text" name="location" value="<%= location %>"></td>
		</tr>


        <tr>
			<td>Password:</td>
			<td><input type="text" name="password" value="<%= password %>"></td>
		</tr>



    
		 <tr>
			<td><input type="submit" name="submit" value="update"></td>
			<td></td>
		
         </tr>
         
        </table>
        </form>
    </center>


</body>
</html>   




