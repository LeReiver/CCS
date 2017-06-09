<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 10/18/16
 * Time: 3:16 PM
 *
 * Holds form function for table_four
 */

// Creates error_message object of type and detail
function func_process_error_message($type, $detail)
{
    return '<div id="error_header">' . $type . '</div><div id ="error_detail">' . $detail . '</div>';
}

// Redirects to next page
function next_page() {
    header('Location: ' . FUNC_PROCESS_PAGE);
}

function show_table_four()
{
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT ef.EFName, ed.EFID, ed.Responsibilities, ed.InternalDep, ed.ExternalDep, ed.PeakTimes, ed.Considerations,
            ed.RegLoss, ed.Rto, ed.ITSupport, ed.BackupProc, ed.Factors FROM EF_DETAIL ed, EF ef WHERE ef.EFID = ed.EFID";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table width='80%' style='margin: 100px 0 0 60px;  text-align: start;'>";
        while ($row = $result->fetch_assoc()) {

            echo "<tr><th id='table_header'>" . $row['EFName'] . "</th><th id='table_header'> </th>";
            echo "<tr><td  id='table_reference'>" . "Description" . "</td><td> " . $row ["Responsibilities"] . "</td></tr>\n";
            echo "<tr><td  id='table_reference'>" . "Internal Dependencies" . "</td><td> " . $row ["InternalDep"] . "</td></tr>\n";
            echo "<tr><td  id='table_reference'>" . "External Dependencies" . "</td><td> " . $row ["ExternalDep"] . "</td></tr>\n";
            echo "<tr><td  id='table_reference'>" . "Peak Times" . "</td><td> " . $row ["PeakTimes"] . "</td></tr>\n";
            echo "<tr><td  id='table_reference'>" . "Peak Load Considerations" . "</td><td> " . $row ["Considerations"] . "</td></tr>\n";
            echo "<tr><td  id='table_reference'>" . "Regulatory/Legal Concerns" . "</td><td> " . $row ["RegLoss"] . "</td></tr>\n";
            echo "<tr><td  id='table_reference'>" . "How long can function continue without IT?" . "</td><td> " . $row ["Rto"] . "</td></tr>\n";
            echo "<tr><td  id='table_reference'>" . "IT Requirements" . "</td><td> " . $row ["ITSupport"] . "</td></tr>\n";
            echo "<tr><td  id='table_reference'>" . "Backup Procedures" . "</td><td> " . $row ["BackupProc"] . "</td></tr>\n";
            echo "<tr><td  id='table_reference'>" . "Other Factors" . "</td><td> " . $row ["Factors"] . "</td></tr>\n";
            echo "<tr style='background-color: transparent'><td><br></td></tr>";
        }
        echo "</table>";
    } else {
        echo " <h4>You have no existing Essential Function Profiles</h4>";
    }
    $conn->close();
}



/*
 *SQL

SELECT ef.EFName, ed.EFID, ed.Responsibilities, ed.InternalDep, ed.ExternalDep, ed.PeakTimes, ed. Considerations,
ed. RegLoss, ed.Rto, ed.ITSupport, ed.BackupProc, ed.Factors
FROM EF_DETAIL ed, EF ef
WHERE ef.EFID = ed.EFID
;
 */
