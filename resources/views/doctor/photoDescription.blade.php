<!DOCTYPE html>
<html>
	<head>
		<title>Photo description</title>
		<link href="/CSS/style.css" rel="stylesheet" type="text/css" >
	</head>
	<body>
		<form method="post">
			<table border="0" width="100%">
				<tr height="15%" bgcolor="#23274C">
					<td width="20%"></td>
					<td valign="top"> <h2> <b> <font color="#CACBD5">Hospital </font><font color="white">Management System</font> </b> </h2>
						<td width="30%" valign="top" align="right">
                             <br/><br/>
                              <br><br/>
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
                        <br>
							<img src="<%= photo.pic %>" width="800" height="600"><br><br>
                            <font color="#007D9E">Title: <%= photo.title %></font><br><br>
                            <h2>Description:</h2><br><br>
                            <%= photo.description %><br><br><br><br><br><br><br><br><br>


					</table>
				</td>
				<td width="20%"></td>
			</table>
		</form>
	</body>
</html>