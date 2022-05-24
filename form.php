<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating Form</title>
    <style>

        body{

            background-color: grey;
            text-align: center;
        }

        h1{

            margin-top: 50px;
            font-size: 50px;
        }
        .container{


            margin-top: 0px;
            border: 30px 10px 10px 50px ;
            background-color: white;
            margin: 10px 0px 10px 0px;
            width: 100%;
            height: 300px;
        }

        .form{
            background-color: grey;
            margin: 50px 400px 50px 400px;
            color: white;
            font-size:15px;
            border-radius: 30px;
        }

    </style>

</head>
<body>

            <h1> REGISTRATION FORM </h1>
    <form method="POST" action="user_data.php">
        <div class="container">

        <div class="form">
        <label> Name: &nbsp</label><br>
                    <input type="text" name="name" placeholder="What's your name"><br>
        <br><label>  Email: &nbsp </label><br>
                    <input type="text" name="email" placeholder="e.g. amara@gmail.com"><br>
        <br><label> Date of Birth: </label><br>
                    <input type="date" name="date_of_birth"><br>
         <br><label>  GENDER: </label> &nbsp 
                Male <input type="radio" value="male" name="gender">
                 Female <input type="radio" value="female" name="gender">
        <br><br><label> COUNTRY: &nbsp</label><br>
                <input type="text" name="country" placeholder="What's your country"><br>
                <br><input type="submit" name="submit" value="submit here">
    </div>
    </div>
    </form>
</body>
</html>