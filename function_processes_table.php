<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 2/12/17
 * Time: 4:43 PM
 */

include_once ('includes/constants.php');
include_once ('includes/login_code.php');
include_once ('includes/db_code.php');
include_once ('includes/utilities.php');

// Requires secure connection
require_secure();
// Starts session
session_start();

// If session not set (user not logged in) redirect to no access page
if (!isset($_SESSION[SESSION_USERNAME_KEY])) {
    header('Location: ' . NO_ACCESS_PAGE);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function Processes Table</title>
    <link rel="stylesheet" href="includes/ccs.css.php" type="text/css">
</head>
<body>
<?php
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT DEPT.Organization, DEPT.DeptName, EF.EFID, EF.EFName, p.ProcDesc, p.ProcID FROM EF_PROC as p, DEPT as DEPT, EF as EF WHERE DEPT.DeptID = EF.DeptID AND EF.EFID = p.EFID ORDER BY ProcID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table width='100%'>";
    echo "<tr><th colspan='4'><h4></h4></th></tr>";
    echo "<tr><th id='table_header' colspan='2'><h4>Existing Function Processes</h4></th><th></th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "                <tr><td  id='reference_table'>- " . "<strong>" . $row ["EFName"] . "</strong>" . ": <strong><br> &nbsp;&nbsp;"
            . $row["DeptName"] ."</strong>" . ", <strong><br>&nbsp;&nbsp;&nbsp;".  $row["Organization"] ."</strong><br>"
            . nl2br($row["ProcDesc"]) . "</td>
                <td id='reference_table'>
                    <input type='hidden' value=" .$row["ProcID"]."  name='id'/>
                    <form action='includes/delete.php' method='GET'>
                    <button id='delete_row' name='delete_ef_proc' value=".$row["ProcID"].">DELETE</button></form>";
        echo "</td>
                </tr>\n";
    }
    echo "</table>";
} else {
    echo " <h4>You have no existing Essential Function Processes</h4>";
}
$conn->close();
?>
</body>
</html>