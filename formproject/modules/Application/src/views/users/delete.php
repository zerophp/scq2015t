Seguro que quiere borrar el usuario ?
<form action="/Users.php?action=delete" method="POST">
<input type="hidden" value="<?=$_GET['id'];?>" name="id"/>
<input type="submit" value="si" name="borrar"/>
<input type="submit" value="no" name="borrar"/>
</form>