<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRESCRIPTION</title>
</head>
<body>
    <div>

       <h1>PRESCRIPTION</h1>
          <table border="0" width="100%">
                <td width="20%"></td>
                <td>
                        
                    <table border="0" width="100%">
                        <br>
                       
                      
                        <tr>
                            <td align="right">Patient Name:</td>

                            <td>{{$prescribe->pname}}</td>
                        </tr>
                       

                         <tr>
                            <td align="right">Patient Age:</td>
                            <td>{{$prescribe->age}}</td>
                        </tr>


                        <tr>
                            <td align="right">Appointment Date :</td>
                            <td>{{$prescribe->appoint}}</td>
                        </tr>

                        <tr>
                            <td align="right">Doctor Name:</td>
                          <td>{{$prescribe->dname}}</td>
                        </tr>


                        <tr>
                            <td align="right">Medicine:</td>
                             <td>{{$prescribe->med}}</td>
                        </tr>
                      
                       

                        <tr>

                            <td align="right">Advice:</td>
                              <td>{{$prescribe->des}}</td>
                      
                      </tr>
                         <tr><td></td></tr>
                      <tr><td></td></tr>
                        <tr>
                        
                            <td align="center"></td>
                            <td></td>

                            

                          

                        </tr>
                         <tr>
                        
                            <td align="center"></td>
                              
                               
                            

                        </tr>
                        
                    </table>

   
  </div>
  
</body>
</html>