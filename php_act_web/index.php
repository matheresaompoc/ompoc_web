<!DOCTYPE hmt>
<html lang="en">
<head>
<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Exercise: php</title>
 <link rel="stylesheet" href="header.css" media="screen">
</head>
<body>
<div class = "welcome" align="center">
<h1>Welcome</h1>
<img src="userphoto.jpg" alt="simon sa cat" weight = "100px" height = "200px">

<br></br>
<br></br>

<form method="POST" action="register.php">
     <table>
     <tr>
         <td><input type="text"name="studID" placeholder="Student ID"></td>
         <td><input type="text"name="firstname" placeholder="First Name"></td>
         <td><input type="text"name="lastname" placeholder="Last Name"></td>
          <td><input type="text"name="MI" placeholder="Middle Initial"></td>
     </tr><tr>
         <td><input type="text"name="course"placeholder="Course"></td>
         <td><input type="text"name="yearlevel"placeholder="Year Level"></td>
         <td><input type="text"name="password"placeholder="password"></td>
          </tr><tr>
         <td colspan="4">
          <input type="submit"name="btn_register"value="Register"/>
          </td>
     </tr>
     </table>
</body>
</html>