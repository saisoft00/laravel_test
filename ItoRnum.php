<?php
error_reporting(0);
$values = intval($_POST['value']);
if(isset($_POST['check'])) {
    //function for non integer value passed by user
    if ($values==" ") {
        echo "<script>";  
        echo "alert('It not a valid number Please enter a number.');";
        echo "</script>";
        $values=" ";
        $results=" ";
    }
    // function for integer value passed by user 
    if ($values != " ") {
    $natural_roman = array(1000 => 'M', 500 => 'D', 100 => 'C', 50 => 'L', 10 => 'X', 5 => 'V', 1 => 'I');
    function convert_to_roman($natural){
        global $natural_roman;
        reset($natural_roman);
        while (list($key, $value) = each($natural_roman)){
            while ($natural >= $key){
                $natural -= $key;
                $rn.= $value;
            }
        }
        return str_replace(array('DCCCC', 'CCCC', 'LXXXX', 'XXXX', 'VIIII', 'IIII'),array('CM', 'CD', 'XC', 'XL', 'IX', 'IV'),$rn);        
    }   
    $results .= "Roman number is :".convert_to_roman($values)."";
    }
}
// function for clear the value
if(isset($_POST['clear'])) {
        $values=" "; 
        $results= " ";
    }
?>
<!DOCTYPE HTML>
<html>
<title>Number To Roman</title>
<style>
body { 
    text-align: center;
    margin-top: 150px;
    } 
</style>
<body>
    <div  class="heading">
    <h1 align="center">Number To Roman</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Please Enter A Number  : <input type="text" name="value" value="<?php echo $values; ?>" autofocus  size=10/>
        </br></br>
        <input type="submit" name="check" value="Convert" title="Convert"/>
        <input type="submit" name="clear" value="Clear" title="clear"/>
    </form>
    </br>
    <?php 
    echo $results;
    ?>
   </div>
</body>
</html>
