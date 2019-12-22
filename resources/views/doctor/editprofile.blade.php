
 <title>Home</title>
         <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <table border="0" width="100%">
                <tr height="15%" bgcolor="#23274C">
                    <td width="20%"></td>
                    <td valign="top"> <h2> <b> <font color="#CACBD5">Hospital </font><font color="white">Management System</font> </b> </h2>
                        <td width="30%" valign="top" align="right">
                             <br/><br/>
                             


                  <font color="white">Welcome,  </font> <br><a href="{{ route('logout')}}"><font color="red">logout</font></a><br/>

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









            <table border="0" width="100%">
                <td width="20%"></td>
                <td>
                        
                    <table border="0" width="100%">
                        <br>
                        <tr>
                            <td align="right"></td>
                            <td>
                               
                                        <font color="red"></font> <br/>
                                  
                                <br/>
                            </td>
                        </tr>









                        <tr>
                            <td></td>
                            <td> <img src="/upload_image/{{$profile->image}}" height="200" width="200"></td>
                        </tr>

                         <tr>
                            <td align="right">New Picture:</td>
                            <td><input type="file" name="image" ></td>
                        </tr>

                      
                       

                            <tr>
                            <td align="right">First Name:</td>
                            <td><input type="text" name="firstname" class="a" placeholder="Please enter First name" value="{{$profile->firstname}}"/> </td>
                        </tr>


                            <tr>
                            <td align="right">Last Name:</td>
                            <td><input type="text" name="lastname" class="a" placeholder="Please enter Last name" value="{{$profile->lastname}}"/> </td>
                        </tr>

                            <tr>
                            <td align="right">User Name:</td>
                            <td><input type="text" name="username" class="a" placeholder="Please enter username" value="{{$profile->username}}"/> </td>
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
                            <td> <input type="text" name="designation" class="a" placeholder="Please enter designation" value=" {{$profile->designation}}"/> </td>
                        </tr>





                        <tr>
                            <td align="right">Email:</td>
                            <td> <input type="text" name="email" class="a" placeholder="Please enter email" value=" {{$profile->email}}"/> </td>
                        </tr>


                        <tr>
                            <td align="right">Phone:</td>
                            <td><input type="text" name="phone" class="a" placeholder="Please enter phone no" value= "{{$profile->phone}}"/> </td>
                        </tr>












                        <tr>
                            <td align="right">Address:</td>
                            <td><input type="text" name="address" class="a" placeholder="Please enter address" value= "{{$profile->address}}"/> </td>
                        </tr>
                      
                     <tr>
                            <td align="right">Password:</td>
                            <td> <input type="text" name="password" class="a" placeholder="Please enter password" value=" {{$profile->password}}"/> </td>
                        </tr>


                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Update" class="btn" />  </td>
                        </tr>
                        
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