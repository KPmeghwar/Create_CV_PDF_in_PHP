<!DOCTYPE html>
<html>
<head>
     <title>.::Cv::.</title>
     
     <style type="text/css">
          
     input[type=text],textarea,select {
        width: 98%;
        height: 20px;
 
       }
       table td{
          color: white;
          font-weight: bold;
       }

     </style>
</head>
<body bgcolor="gray">
     <h1 align="center" style="color: white">Curriculum Vitae (CV)</h1>
     <hr>
             
              <center>
               <br><br>
              
                   
              <form  method="POST" action="generate_cv_process.php" enctype="multipart/form-data">

              <table bgcolor="skyblue" style="width: 80%" cellpadding="5px">
                    <tr>
                            <td>Name</td>
                            <td><input type="text" name="name" value="Kailash Meghwar"></td>
                    </tr>
                    <tr>
                         <td>
                              File:
                         </td>
                         <td><input type="file" name="upload" required=""></td>
                    </tr>
                    <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="premanikailash97@gmail.com"></td>
                    </tr>
                    <tr>
                            <td>Contact Number</td>
                            <td><input type="text" name="contact" value="03499435266" ></td>
                    </tr>
                    <tr>
                             <td>Address</td>
                             <td><input type="text" name="area" value="Sindh university Society Jamshoro"></td>
                             <!-- <td><textarea rows="2"  cols="20" name="area" value="Sindh university Society Jamshoro"></textarea></td> -->
                    </tr>
                    <tr>
                            <td>School Name</td>
                            <td><input type="text" name="school_name" value="High School Mithi Tharparkar" ></td>
                    </tr>
                    <tr>
                            <td>School Start Date</td>
                            <td><input type="date" name="start_date" value="High School Mithi Tharparkar" ></td>
                    </tr>
                    <tr>
                            <td>School End Date</td>
                            <td><input type="date" name="end_date" value="High School Mithi Tharparkar" ></td>
                    </tr>
                    <tr>
                            <td>Collage Name</td>
                            <td><input type="text" name="collage_name" value="FSGD Collage Mithi Tharparkar"></td>
                    </tr>
                    <tr>
                            <td>Collagae Start Date</td>
                            <td><input type="date" name="str_date"  ></td>
                    </tr>
                    <tr>
                            <td>Collage End Date</td>
                            <td><input type="date" name="nd_date" ></td>
                    </tr>
                    <tr>

                            <td>University Name</td>
                            <td><input type="text" name="university_name" value="University Of Sindh Jamshoro"></td>
                    </tr>
                     <tr>
                            <td>University Start Date</td>
                            <td><input type="date" name="st_date" ></td>
                    </tr>
                    <tr>
                            <td>University Start Date</td>
                            <td><input type="date" name="en_date" ></td>
                    </tr>
                    <tr>
                         <td>Skills & Tools</td>
                         <td>
                         <input type="checkbox"     name="check" value="PHP" checked=""> PHP CORE
                         <input type="checkbox"     name="check1" value="HTML5" checked=""> HTML5
                         <input type="checkbox"     name="check2" value="JAVASCRIPT" checked=""> JAVASCRIPT
                         <input type="checkbox"     name="check3" value="CSS3" checked="">CSS3
                         <input type="checkbox"     name="check4" value="MYSQL" checked=""> MYSQL
                         <input type="checkbox"     name="check5" value="MYSQL YOG TOOL" checked=""> MYSQL YOG TOOL
                         <input type="checkbox"     name="check6" value="XAMPP TOOL" checked=""> XAMPP TOOL
                    </td>
                    </tr> 
                    <tr>
                         <td>Gender</td>
                         <td>
                                 <input type="radio" name="gender" value="Male" checked="" >Male
                                 <input type="radio" name="gender" value="female" >Female
                         </td>
                    </tr>
                    <tr>
                            <td>Father Name:</td>
                            <td><input type="text" name="fname" value="Anbo Mal" ></td>
                    </tr>
                    <tr>
                            <td>Date-Of-Birth</td>
                            <td><input type="date" name="dob" ></td>
                    </tr>

                    <tr>
                            <td>CNIC Number</td>
                            <td><input type="text" name="cnic"  value="44303-1987896-9"></td>
                    </tr>
                    <tr>
                         <td>Marital Status</td>
                         <td>
                                 <input type="radio" name="status" value="Married" >Merried
                                 <input type="radio" name="status" value="Un Merried" checked="" >UnMarried
                         </td>
                    </tr>
                     
                    <tr>
                         <td>Country</td>
                         <td>
                                 <select name='country'>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="USA">USA</option>
                                    <option value="Chaina">China</option>                               
                                </select>
                        </td>                        
                    </tr>
                    <tr>
                             
                    </tr>
                    <tr>
                         <td>Languages</td>
                         <td>
                         <input type="checkbox"     name="lang1" value="Engilsh" checked=""> English
                         <input type="checkbox"     name="lang2" value="Urdu" checked=""> Urdu
                         <input type="checkbox"     name="lang3" value="Sindhi" checked=""> Sindhi
                         
                    </td>
                    </tr> 

                        
                    <tr>
                             <td colspan="2" align="center" style="color: white;background-color: green;border-radius: 20px;padding: 10px;"><input type="submit" name="submit" value="Submit"></td>
                         
                    </tr>
                    </form>
                 
              </center>
</body>
</html>