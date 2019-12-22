
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <style>
        .topnav {
                background-color: #333;
                overflow: hidden;
              }
              
              /* Style the links inside the navigation bar */
              .topnav a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
              }
              
              /* Change the color of links on hover */
              .topnav a:hover {
                background-color: #ddd;
                color: black;
              }
              
              /* Add a color to the active/current link */
              .topnav a.active {
                background-color: #4CAF50;
                color: white;
              }
              th, td {
                border-bottom: 1px solid #ddd;
                }
        </style>
</head>
<body>
        <div class="topnav">
                <a class="active" href="/">Home</a>
                <a href="/student/profile">Profile </a>
                <a href="/student/">A</a>
                <a href="/student/">B</a>
                <a href="/logout">Log Out</a>
            </div>
           
            
    <center>
        <table>
            <tr>
                <td>First Name:</td>
                <td> <%= firstname %> </td>
            </tr>


 <tr>
                <td>Last Name:</td>
                <td> <%= lastname %> </td>
            </tr>


 <tr>
                <td>Date of Birth:</td>
                <td> <%= dob %> </td>
            </tr>

 <tr>
                <td>Gender:</td>
                <td> <%= gender %> </td>
            </tr>


 <tr>
                <td>Designation:</td>
                <td> <%= designation %> </td>
            </tr>
 <tr>
                <td>Email:</td>
                <td> <%= email %> </td>
            </tr>

 <tr>
                <td>Phone Number:</td>
                <td> <%= phone %> </td>
            </tr>


 <tr>
                <td>City:</td>
                <td> <%= city %> </td>
            </tr>


 <tr>
                <td>Location:</td>
                <td> <%= location %> </td>
            </tr>


        </table>



          <div align="center">
                 <!--  <a href="/doctor/edit">Edit Profile</a>  -->

                    <a href="/doctor/edit/<%= uid %>">Edit profile</a>
            </div>
           
    </center>
</body>
</html>
