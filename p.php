
<meta  charset="utf-8" >
<?/*
  function std_profile1($title, $bgcolor = "ffffff"){
    echo '<html><head><title>' . $title . '</title></head>';
    echo '<body bgcolor="#' . $bgcolor . '"><center><font size ="4">';
  }
?>

<?
  function std_profile2($id,$name,$sec){
    echo "$id <br>","$name <br>","$sec <br>";
    echo '</center></body></html>';
  }

?>

<?
std_profile1("My Web","AADDEE");

std_profile2("5906021620057","Nuttaphop","Sec_D");
*/?>

<html>
<title>TEST</title>
<body>
  <center>
  <form name="test" action="#" method="POST">

    รหัส <input type="text" name="idd"><br><br>
    ชื่อ  <input type="text" name="namee"><br><br>
    เซค A <input type="radio" name="secc" value="A">
    เซค B <input type="radio" name="secc" value="B"><br>
    เซค C <input type="radio" name="secc" value="C">
    เซค D <input type="radio" name="secc" value="D"><br>

    <br>
    <input type="submit" value="submit">

    <?
      function show($id,$name,$sec){
        echo '<html><body>'.
        $id=$_POST["idd"]
        .'<br><br>'.
        $name=$_POST["namee"]
        .'<br><br>'.
        $sec=$_POST["secc"]
        .'</body><html>';
      }

      echo '<br><br>';
      show($id,$name,$sec);
    ?>

  </center>
</body>
<html>
