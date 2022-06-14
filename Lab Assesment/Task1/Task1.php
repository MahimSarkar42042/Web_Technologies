
<?php



    $name=$_POST['name']



    if($name==""){

        echo "username cannot be empty";

    }elseif($name!=""){

        if($name[0]==0 || $name[0]==1 || $name[0]==2 || $name[0]==3 || $name[0]==4 || $name[0]==5 || $name[0]==6 || $name[0]==7 || $name[0]==8 || $name[0]==9){

            echo "username must start with a letter";

        }

    }



?>