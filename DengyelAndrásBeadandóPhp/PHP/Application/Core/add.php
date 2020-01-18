<br>Képek feltöltése
<fieldset class="add-fieldset">
<form name="upload" method="POST" action="index.php?page=upload">
    Image:<input type="text" name="thumbnail"><br />
    Author<input type="text" name="author"><br/>
    <input type="submit" name="btnsubmit" values="Feltölt"><br />
</form>
</fieldset>

<?php
if(isset($_POST["btnsubmit"]))
{
    $thumbnail = $_POST["thumbnail"];
    $author = $_POST["author"];
    echo $thumbnail." ".$author."<br>"; 
}
$marks = array("thumbnail"=>$thumbnail, "author"=>$author);
//echo json_encode($marks);
$h = fopen("data.json","r+");
fseek($h, -1, SEEK_END);
fwrite($h,",".json_encode($marks)."]");  
?>