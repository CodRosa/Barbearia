<?php
if(!($cnx = mysqli_connect("localhost","root","","barbearia"))); 
{
echo mysqli_error($cnx);
}