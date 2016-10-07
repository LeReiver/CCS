<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 3/21/16
 * Time: 8:37 PM
 */

  header('Content-Type: text/css');
 ?>

body {
    min-width: 450px;
    padding: 0 20px;
}
h1 {
    text-align: center;
    font-family: Charcoal,"Trebuchet MS", sans-serif;
    color: #162110;
    font-size: 250%;
    text-transform: uppercase;
}
h2 {
    text-align: center;
    font-family: Charcoal,"Trebuchet MS", sans-serif;
    color: #162110;
    font-size: 175%;
    text-transform: uppercase;
}
h3 {
    text-align: center;
    font-family: Charcoal,"Trebuchet MS", sans-serif;
    font-size: 100%;
    text-transform: lowercase;
}
h4  {
    text-align: center;
    font-family: Charcoal,"Trebuchet MS", sans-serif;
    color: #76317f;
    font-size: 80%;
    text-transform: uppercase;
}
h4  a {
    text-decoration: none;
}

h4  a:hover {
    color: #162110;
}
input {
    font-size: .75em;
    width: 90%;
    border-radius: 5px;
    margin-right: 10px;
}

input [type=submit] {
    font-size: 1.5em;
    width: 30px;
    padding: 5px;
    background-color: #7ea142;
    margin: 20px;
}

input [type=select] {
/*    font-size: 2em;*/
/*    width: 30px;*/
/*    padding: 5px;*/
/*    background-color: #7ea142;*/
/*    margin: 20px;*/
}

/* -------------- Nav --------------------------------------------------------*/

nav {
    float: right;
    clear: both;
    margin:90px 8px 0 0;
    display: block;
}

ul {
    list-style-type: none;
    margin: 0 -20px;
    padding: 0;
    overflow: hidden;
/*    background-color: rgba(108, 131, 54, 0.38);*/
    font-family: Charcoal,"Trebuchet MS", sans-serif;
    font-size: 80%;
    font-weight: bolder;
    line-height: 60%;
}

li a {
    display: block;
    color: #121c3e;
    text-align: right;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    color: #7ea142;
}



/* -----------------------------------------------------------------------------*/

/*  borders for table alignment testing  */

/*
table td  {
    border: solid 1px black;
}
table th  {
    border: solid 1px black;
}
*/

#reports table {
    border-collapse: collapse;
}

#reports th {
    background: rgba(126, 161, 66, 0.41);
}

#reports tr:nth-child(even) {
    background: #FFF;
}

#reports tr:nth-child(odd) {
    background-color: rgba(19, 107, 151, 0.23)
}


#login_content {
    font-family: Charcoal, Geneva, sans-serif;
    font-size: 125%;
    margin-top: -50px;
    font-weight: 100;
}
#form_content {
    font-family: Charcoal, Geneva, sans-serif;
    font-size: 125%;
    margin-top: 20px;
    font-weight: 100;
    align-content: center;
}
#error_header {
    text-align: center;
    color: red;
    text-shadow:  0 0 white;
    font-weight: bold;
    width: 500px;
    margin: 0 auto;
    font-size: 150%;
}
#error_detail {
    text-align: center;
    color: red;
    text-shadow:  .5px 0 white;
    font-size: 100%;
    width: 500px;
    margin: 0 auto 20px auto;
}
#submit_error {
    padding-left: 60px;

}
#submit_error_header {
    text-align: center;
    color: red;
    text-shadow:  2px 0 white;
    font-weight: bold;
    width: 400px;
    margin: 0 auto;
    padding-top: 20px;
}
#submit_error_detail {
    text-align: center;
    color: red;
    text-shadow:  2px 0 white;
    font-size: 85%;
    width: 400px;
    margin: 0 auto 20px auto;
}
#select_department {
    float: right;
    font-size: 3em;
 }
#logo {
    margin: 0 auto;
    text-align: center;
    width: 50vw;
    height: 100vh;
}

#logo_sm {
    text-align: end;
    margin: 10px 0 0 0;
}

#user_pane {
    text-align: right;
    font-weight: bold;
    font-family:  sans-serif;
    font-size: 100%;
    color: #162110;
}
#logout {
    color: #7ea142;
    text-decoration: none;
    font-size: 85%;
    padding: 0 5px;
}
#user_pane :hover {
     color: #4f005a;
 }
#next {
    text-align: right;
    font-family: Charcoal, Geneva, sans-serif;
    margin-right: 15px;
    margin-top: 10px;
    padding-left: 160px;
}
#back {
    text-align: left;
    font-family: Charcoal, Geneva, sans-serif;
    margin-left: 130px;
    margin-top: 10px;
    padding-right: 160px;
}
#data_submit {
    width: 10%;
}
#reference_table {
    border-bottom: solid 1px black;
    line-height: 20px;
}
#reference_table td {
    border-bottom: solid 1px black;
    font-size: 12px;
    padding: 0 15px;
}
#table_header {
    border-bottom: solid black 2px;
}
.input_reference {
    float:left;
    clear: both;
    width: 500px;
    font-size: 75%;
    margin-top: -50px;
    margin-left: 110px;
    padding-bottom: 100px;
}
.table_reference {
    width: 800px;
    font-size: 75%;
    margin: 50px auto;
    padding-bottom: 100px;
}
.table_reference td {
    padding: 10px 20px;
}
.top {
    color: #7ea142;
    text-decoration: none;
    font-size: 85%;
    padding: 0 5px;
    text-align: end;
}
.tint {
    background-color: rgba(119, 238, 170, 0.42);
}
.home_page {
    background-image: url('../images/portland.jpg');
    margin: 1em 0;
    padding: 0;
    background-size: cover;
    background-color: rgba(229, 229, 229, 0.3);
    overflow-x: hidden;
    background-repeat: no-repeat;
    background-position: top center;
    background-attachment: fixed;
    font-family: gentonalight, sans-serif;
    z-index: 0;
}
.login_header {
    font-size: 1.25em;
    margin-bottom: 20px;
    text-align: left;
    padding-left: 15px;
}
.login_submit{
    margin: 20px 0 0 30px;
    text-align: center;
/*    width: 25%;*/
    height: 2em;
    font-size: .75em;
    width: 30vw;
}
.login_submit.button:hover {
    background-color: aqua;
 }
.login_table {
    margin: 0 auto;
    width: 40%;
    color: #ffffff;
    text-shadow: black 4px 2px 4px;
}
.submit_table {
    margin: 0 auto;
    width: 30%;
}
.submit_table td {
border: solid black 1px;
}
.login_or  {
    text-align: center;
    margin: 20px;
}
.login_label {
    text-align: left;
    padding-left: 15px;
}
.dept_select {
    width: 60px;
    text-align: center;
    padding: 0;
    font-size: 1em;
}
.input_label {
    text-align: left;
    width: 100%;
    padding-left: 15px;
    border: none;
}
.input_label_small {
    width: 95%;
}
.input_label_big {
    width: 95%;
    height: 250px;
}
.form_label {
    text-align: end;
    padding-right: 20px;
/*    width: 100px;*/
    font-size: 90% ;
}
.form_label_2 {
    text-align: start;
    padding: 0 20px 0 10px;
    width: 100px;
    font-size: 90% ;
}
.form_input {
    text-align: start;
    padding-right: 20px;
    width: 30%;
    font-size: 1.25em;
}
.form_label_textarea {
    text-align: start;
    padding-right: 20px;
    font-size: .75em;
    border-radius: 5px;
}
.form_table {
    align-content: center;
    margin auto;
}
.cat_scoring {
    padding-left:5px;
}

