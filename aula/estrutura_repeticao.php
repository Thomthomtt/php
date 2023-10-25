
    <table border="1px">
    <tr>
            <td> Item </td>    
            <td> Descrição </td>
            <td> a </td>
            <td> b </td>
        </tr>
      

    
<?php
$desc = "Descrição";
    for ($i=0; $i<=100; $i++){

        if (($i % 2)==0) {
            echo ("<tr bgcolor='#c4f345'>");
            } else {
                echo ("<tr bgcolor='#854475'>");
                }
        echo ("<td>$i </td>");
        echo ("<td>$desc $i </td>");
        echo ("<td> $i</td>");
        echo ("<td>$desc $i</td>");
        echo ("</tr>");
    }

?>
