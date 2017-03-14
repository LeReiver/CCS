<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/15/16
 * Time: 2:50 PM
 *
 *Navigation
 */

// Requires use of responsive nav script for handling responsive navigation
   require('responsive_nav.php'); 
?>
<!--Navigation links-->
<nav>
        <ul class="topnav" id="myTopnav">
            <li class="icon">
                <!-- Handles Hamburger Icon change-->
                <a href="javascript:void(0);" onclick="show_nav()">
                    <div class="container" onclick="hamburger(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </a>
            </li>
            <li><a href="departments.php" class="active">Departments</a></li>
            <li><a href="essential_functions.php" class="active">Essential Functions</a></li>
            <li><a href="function_processes.php" class="active">EF Processes</a></li>
            <li><a href="impact_categories.php" class="active">Impact Categories</a></li>
            <li><a href="function_details.php" class="active">EF Details</a></li>
            <li><a href="impact_category_scoring.php" class="active">Impact Category Scoring</a></li>
    <!--        <li><a href="impact_category_score.php">Add Impact Category Score</a></li>-->
    <!--        <li><a href="impact_category_score_all.php">Add Impact Category Score All</a></li>-->
            <li><a href="impact_category_score1.php" class="active">Impact Category Scores</a></li>
    <!--        <li><a href="impact_category_score2.php">Add Impact Category Score 2</a></li>-->
            <li><a href="table_two.php" class="active">Table Two</a></li>
            <li><a href="table_three.php" class="active">Table Three</a></li>
            <li><a href="table_four.php" class="active">Table Four</a></li>
        </ul>
</nav>

