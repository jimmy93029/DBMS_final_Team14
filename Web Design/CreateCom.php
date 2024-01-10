<<<<<<< HEAD
<?php
    require_once "config.php";
?>

<h3>創建新的公司股票資訊</h3>
<?php
$company_t = $_POST["company_t"];
$company = $_POST["company"];
$sql = "SELECT * FROM Company";
$num = mysqli_num_rows(mysqli_query($conn, $sql)) + 1;
$py_result = shell_exec("python makeData.py $company_t $company $num");

$ins_com = "INSERT INTO Company VALUES ($num, '$company')";
$conn->query($ins_com);

$create_table = "Create Table IF NOT EXISTS {$company}_daily_table(
    Company_id int NOT NULL,
    Date_id int NOT NULL PRIMARY KEY,
    Open_Price DOUBLE,
    High DOUBLE,
    Low DOUBLE,
    Close_Price DOUBLE,
    Adj_Close DOUBLE,
    Volume BIGINT,
    Foreign Key (Company_id) REFERENCES Company (Company_id)
)";
$conn->query($create_table);


$insert_data = "
load data local infile 'C:/Users/cheng/Desktop/vscode/database/build_table/{$company}_daily_table.csv'
into table {$company}_daily_tablel
fields terminated by ','
enclosed by '\"'
lines terminated by '\r\n'
ignore 1 lines;
";

echo $insert_data;

$r = mysqli_query($conn, $insert_data);
if ($r){
    echo 1;
}
else{
    mysqli_error($conn);
}
echo $py_result;
?>
<a href="index.php">離開</a>
=======
<?php
    require_once "config.php";
?>

<h3>創建新的公司股票資訊</h3>
<?php
$company_t = $_POST["company_t"];
$company = $_POST["company"];
$sql = "SELECT * FROM Company";
$num = mysqli_num_rows(mysqli_query($conn, $sql)) + 1;
$py_result = shell_exec("python makeData.py $company_t $company $num");

$ins_com = "INSERT INTO Company VALUES ($num, '$company')";
$conn->query($ins_com);

$create_table = "Create Table IF NOT EXISTS {$company}_daily_table(
    Company_id int NOT NULL,
    Date_id int NOT NULL PRIMARY KEY,
    Open_Price DOUBLE,
    High DOUBLE,
    Low DOUBLE,
    Close_Price DOUBLE,
    Adj_Close DOUBLE,
    Volume BIGINT,
    Foreign Key (Company_id) REFERENCES Company (Company_id)
)";
$conn->query($create_table);


$insert_data = "
load data local infile 'C:/Users/cheng/Desktop/vscode/database/build_table/{$company}_daily_table.csv'
into table {$company}_daily_table
fields terminated by ','
enclosed by '\"'
lines terminated by '\r\n'
ignore 1 lines;
";

echo $insert_data;

$r = mysqli_query($conn, $insert_data);
if ($r){
    echo 1;
}
else{
    mysqli_error($conn);
}
echo $py_result;
?>
<a href="index.php">離開</a>
>>>>>>> f6c6e2b5cd3853a415d193db0f870820b5fc5a1b
