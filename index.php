<?php
    $file_name = "text.txt";

    $data = file( $file_name );

    echo '<table border="1">';

    foreach( $data as $key => $value ):
        $value = explode( "|", $value );
        echo'<tr>';
        foreach($value as $cell):
            if($key==0)
                echo'<th align="center" bgcolor="yellow">'.$cell.'</th>';
            else
                echo'<td align="left" bgcolor="silver">'.$cell.'</td>';
        endforeach;
        echo'</tr>';
    endforeach;
    echo'</table>';
