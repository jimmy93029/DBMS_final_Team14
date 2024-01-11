<?php
    require_once "config.php";
?>


<?php
$date1 = $_POST["date1"];
$date2 = $_POST["date2"];
$arr = array();

$sql = "SELECT Company_name FROM Company";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)){
    $com = trim($row['Company_name']);
    $tmp = "SELECT Close_Price FROM {$com}_daily_table t JOIN Date d ON d.Date_id=t.Date_id WHERE d.Date_day='$date1' OR d.Date_day='$date2'";
    $close = mysqli_query($conn, $tmp);
    $tmparr = array();
    echo mysqli_num_rows($close);
    if (mysqli_num_rows($close) < 2){
        echo "error date";
        return;
    }
    else{
        $tmparr[] = "'{$com}'";
        while ($data = mysqli_fetch_array($close)){
            $tmparr[] = $data['Close_Price'];
        }
        $arr[] = $tmparr;
        
    
    }

}
if (!empty($arr)){
    echo "<h2>名次如下<h2>";
    $jsonData = json_encode($arr);
    $py_result = shell_exec("python compare.py '$jsonData'");
    $table = '
            <table border=1>
                    <tr>
                        <th>Ranking</th>
                        <th>Company</th>
                        <th>rate</th>
                    </tr>
    ';
    $num = 0;
    $new_arr = json_decode($py_result);
    foreach($new_arr as list($rate, $comp)){
        $num = $num + 1;
        $table .= "
            <tr>
                <td>{$num}</td>
                <td>{$comp}</td>
                <td>{$rate}</td>
            </tr>
            ";
    }
    $table .= '</table>';
    echo $table;

}

?>

<a href="index.php">離開</a>