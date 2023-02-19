<?php
        $to='dev_jenniem@outlook.com';
        $header = "From: info@".$_SERVER["SERVER_NAME"]."\n";
        $header .= "Content-Type: text/html; charset=iso-8859-1\n";

        $sender=$_POST['sender'];
        $email=$_POST['email'];
        $cmt=$_POST['cmt'];
        $cmp=$_POST['cmp'];
        $phno=$_POST['phno'];

        $subject='Message Subject';

        $body='<table width="90%" border="0">
        <tr>
        <td><b>Sender:</b></td> <td>'.$sender.'</td>
        </tr>
        <tr>
        <td><b>Email:</b></td> <td>'.$email.'</td>
        </tr>
        <tr>
        <td><b>Phone No:</b></td> <td>'.$phno.'</td>
        </tr>
        <tr>
        <td><b>Copmany Name:</b></td> <td>'.$cmp.'</td>
        </tr>
        <tr>
        <td><b>Comment:</b></td> <td>'.$cmt.'</td>
        </tr>
        <tr></table>';



        mail($to,$subject,$body,$header);
       header('location:index.html');



    ?>