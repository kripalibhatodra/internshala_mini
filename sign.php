<?php
/**
 * Created by PhpStorm.

 * Date: 20-05-2018
 * Time: 00:39
 */
session_start();
?>
<form action="signup_stu.php" method="POST" autocomplete="on" >
    <feildset>
        <legend><u>Sign up for a new account!</u></legend><br>
        First Name:	<input type="text" title="fname" name="fname" required><br>
        Last Name:  <input type="text" title="lname" name="lname" required><br>
        Email ID:   <input type="Email" title="email" name="email" required><br>
        Password:   <input id="pkey" title="pkey" type="Password" name="pkey" required><br>
        Confirm Password: <input type="Password" title="pkey" name="pkey1" id="pkey1" oninput="checkpkey()" required><div id="errortxt"   style=" color:red;font-size: small"></div><br>
        <input type="submit" class="button" value="Sign Up"/></feildset>
</form>
<script>function checkpkey()
    {
        var p1=document.getElementById('pkey').value;
        var p2=document.getElementById('pkey1').value;
        if(p1===p2)
        {
            document.getElementById('errortxt').innerHTML="Password matches";
        }
        else     {

            document.getElementById('errortxt').innerHTML="Password do not match!!";
        }
    }</script>
