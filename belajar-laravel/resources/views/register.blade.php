<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X=UA-compatible" content="ie-edge">
        <title>Form</title>
    </head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up From</h2>
    <form action="/register" method="POST">
    @csrf
        <label>First Name:</label><br>
        <input type="text" Name="name"><br><br>
        <label>Last Name:</label><br>
        <input type="text" Name="Name"><br><br>

        <label>Gender:</label>
     <br>
     <input type="radio" name="gender" value="L"> Male
     <br>
     <input type="radio" name="gender" value="P"> Female
     <br>
     <input type="radio" name="gender" value="O"> Other
    <br>

       <label>Nationality:</label> <br>
       <p><select name="Nationality">
          <option value="">Indonesia</option>
          <option value="">Belanda</option>
          <option value="">Dubai</option>
       </select> <br> <br> 
       </p>

       <label>Language Spoken:</label>
       <p><input type="checkbox" name="skill"> Bahassa Indonesia <br>
          <input type="checkbox" name="skill"> English <br>
          <input type="checkbox" name="skill"> Other <br>
       </p>

       <label>Bio:</label> <br>
       <textarea cols="30" rows="10"></textarea> <br><br>

       <input type="Submit" value="Sign Up">

    </form>
</head>
<body>

</body>
</html>