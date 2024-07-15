<?php 
session_start();
include("../include/data_base.php");

function hackingPrevent($Text){
    $Text = trim($Text);
    $Text = stripcslashes($Text);
    $Text = htmlspecialchars($Text);
    return $Text;
}

if(isset($_POST["submit"])){
    $P_Name = $_SESSION['P_Name']= hackingPrevent($_POST["pro_name"]);
    $P_Type= $_SESSION['P_Type']= hackingPrevent($_POST["pro_type"]);
    $P_Price= $_SESSION['P_Price']= hackingPrevent($_POST["pro_price"]);
    $P_Size= $_SESSION['P_Size']= $_POST['size'];
    $P_description= $_SESSION['P_description']= hackingPrevent($_POST["description"]);
    $P_Photo= $_FILES['photo'];
    $chk="";  
    foreach($P_Size as $chk1)  
    {  
        $chk .= $chk1.",";  
    }

print_r($P_Size);

    if($P_Photo['size'] == 0){
        header("location: ../admin/add_products.php?error=Product Photo is Required &error_id=0");
       }elseif(empty($P_Name)){
        header("location: ../admin/add_products.php?error=Product Name is Required &error_id=1"); 
       }elseif (empty($P_Type)){
        header("location: ../admin/add_products.php?error=Product Type is Required &error_id=2");
       }elseif ($P_Type == null){
        header("location: ../admin/add_products.php?error=Product Type is Required &error_id=2");
       }elseif (empty($P_Price)){
        header("location: ../admin/add_products.php?error=Product Price is Required &error_id=3");
       }elseif (empty($P_Size)){
        header("location: ../admin/add_products.php?error=Product Size is Required &error_id=4");
       }elseif (empty($P_description)){
        header("location: ../admin/add_products.php?error=Product Description is Required &error_id=5");
       }else{
        if(!empty($P_Name) && !empty($P_Type) && !empty($P_Price) && $P_Type !== null && !empty($P_description) && !empty($P_Size) && $P_Photo['size'] !== 0){

                $extensions= explode(".", $P_Photo['name']);
                $extension= end($extensions);
                $newfilename= time().".".$extension;


                    $insert = "INSERT INTO `products`(`Name`, `Category`, `Size`, `Details`, `Price`, `Photo1`, `Photo2`, `Photo3`, `Photo4`, `Author`) VALUES ('$P_Name','$P_Type','$chk','$P_description','$P_Price','$newfilename','$newfilename','$newfilename','$newfilename','tanvir')";
            
                    $success= $conn -> query($insert);
            
                    if(isset($success)){
                        move_uploaded_file($P_Photo['tmp_name'] ,"../img/added_products/" . $newfilename);
                        echo "Stored in: " . "../img/products/" .$newfilename;
                        
                        unset($_SESSION["P_Name"]);
                        unset($_SESSION["P_Type"]);
                        unset($_SESSION["P_Price"]);
                        unset($_SESSION["P_Size"]);
                        unset($_SESSION["P_description"]);

                        header('location:../admin/add_products.php');
                    }
        }   
    }      
}


?>