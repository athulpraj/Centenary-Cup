<?php
if(!mysql_connect("web375.webfaction.com","athulpraj","zooktech"))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("football"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>