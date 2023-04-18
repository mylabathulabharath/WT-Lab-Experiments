<html>
<head>
    <style>
    input[type=email],input[type=password],input[type=text]{
      width: 100%;
      padding: 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=submit]{  
      width: 100%;
      background-color:goldenrod;
      color: white;
      padding: 15px 15px;
      margin: 6px;
      border: none;
      border-radius: 4px;
      cursor:pointer;
    }
    form{
        padding:600px;
        padding-top:10px;
    }
    label{
        padding-top:15px;
    }
        </style>
        </head>
<body>
   
<form action="session1.php" method="POST">
<tr>
        <th>
            <label for="uname">Username</label>
        </th>
        <th>
            <input type="text" name="uname" placeholder="Enter your name" size="20">
        </th>
    </tr>    
<tr>
        <th>
            <label for="Email">Email</label>
        </th>
        <th>
            <input type="email" name="email" placeholder="Enter your email" size="20">
        </th>
    </tr>
    <br>
    <tr>
        <th>
            <label for="pwd">Password</label>
        </th>
        <th>
            <input type="password" name="pwd" placeholder="Enter your password" size="20">
        </th>
    </tr>
    <br>
    <tr>
        <th>
            <input type="submit" name="submit" value="Sumbit">
        </th>
    </tr>
<form>
</body>
