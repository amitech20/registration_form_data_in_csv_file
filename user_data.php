<?php


        if(isset($_POST['submit'])){

            $fname = $_POST['name'];
            $email = $_POST['email'];
            $dob = $_POST['date_of_birth'];
            $gen = $_POST['gender'];
            $coun = $_POST['country'];

        }

            // $a = print_r($_POST);



    // $file_name = ".\userdata.csv";
    // $handle = fopen('userdata.csv','w');
    // fwrite($handle,$_POST);
    // fclose($file_name);
    
    $f = fopen('userdata.csv','a');
    $no_of_rows = count(file("userdata.csv"));
    if($no_of_rows > 1) {

        $no_of_rows = ($no_of_rows - 1) + 1;
    }
    
    $data = [

        "s/n" => $no_of_rows,
        "Name" => $fname,
        "Email" => $email, 
        "Date of birth" => $dob, 
        "Gender" => $gen, 
        "Country" => $coun];

    fputcsv($f, $data);

    fclose($f);

    echo "THANK YOU <br> Your registration was successful. Below are your details;<br><br>";

    print_r($data);
    // foreach ($data as $key => $value) {
        
    //             echo "<br>".$key. ": " .$value;

    // }

    


?>

<style>
    body{

    background-color: grey;
    color: white;
    font-size:20px;


    }
</style>