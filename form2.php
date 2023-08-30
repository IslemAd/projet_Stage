

<?php
mysql_connect("localhost","root","") or die ("pb de conexion");
mysql_select_db("blym") or die("pb select DB");

extract($_POST);

    $query= "insert into form2 values ('$nom','$email','$num','$MDP')";
    $query_run = mysql_query($query) or die ("erreureeee".mysql_error()) ;

    if(mysql_affected_rows() == 0)
    {
        die("pb ajout partenaire ");
    }

    echo("felisitation");

mysql_close();
?>