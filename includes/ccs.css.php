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
    padding: 0 5px;
    background-color: aliceblue;
    max-width: 1200px;
    margin: 0 auto;
    background-attachment: fixed;
}
h1 {
    text-align: center;
    font-family: Hind Madurai, Geneva, sans-serif;
    color: #162110;
    font-size: 250%;
    margin: 0 auto;
}
h2 {
    text-align: start;
    font-family: Rosario, Geneva, sans-serif;
    color: #162110;
    font-size: 100%;
    text-transform: uppercase;
    margin-top: 20px;
    margin-left: 100px;
    display: inline-block;
}
h3 {
    text-align: center;
    font-family: Gudea, Geneva, sans-serif;
    font-size: 100%;
    text-transform: capitalize;
}
h4  {
    text-align: start;
    font-family: Gudea, Geneva, sans-serif;
    color: #76317f;
    font-size: 90%;
    text-transform: uppercase;
}

h4.return {
    text-align: center;
}
h4  a {
    text-decoration: none;
}

h4  a:hover {
    color: #162110;
}
h5  {
     text-align: start;
     font-family: Gudea, Geneva, sans-serif;
     color: #08123e;
     font-size: 90%;
     text-transform: uppercase;
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

input[type=radio] {
    display: inline-block;
    margin: 0 auto;
    width: auto;
}

form {
    width: 100%;
    margin: 20px 0 0 0;
}

select {
    border: 1px solid #ccc;
    font-size: 14px;
    height: 28px;
}
button {
    padding: 8px;
    border: solid black .5px;
    background-color: transparent;
    color: #7ea142;
    font-size: 75%;
    font-weight: 400;

}
button:hover {
    color: #4f005a;
    cursor: pointer;
    background-color: rgba(110, 172, 44, 0.24);
}


/* -------------- Nav --------------------------------------------------------*/

nav {
    float: left;
    clear: both;
    text-align: center;
    margin: 60px 30px 20px 60px;
/*    display: inline;*/
/*    position: relative;*/
    border-bottom: 0.125px solid lightsteelblue;
    padding-bottom: 20px;
    z-index: 100;
}

ul {
    list-style-type: none;
/*    margin: 0 -20px;*/
    padding: 0;
    overflow: hidden;
/*    background-color: rgba(108, 131, 54, 0.38);*/
    font-family: Gudea,"Trebuchet MS", sans-serif;
    font-size: 90%;
    font-weight: bolder;
    line-height: 130%;
/*    display: inline;*/
}
li{
    display: inline;
}

li a {
    display: inline-block;
    color: #121c3e;
    text-align: left;
    padding: 0 16px;
    text-decoration: none;
}

.active.selected {
    color: #6eac2c;
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

#reports {
    margin: -100px 100px 0 auto;
    text-align: end;
}

#reports table {}
    border-collapse: collapse;
}

#reports th {
    background: rgba(126, 161, 66, 0.41);
}

#reports tr:nth-child(even) {
    background: rgba(156, 228, 255, 0.41);
}

#reports tr:nth-child(odd) {
    background-color: rgba(19, 107, 151, 0.23)
}


#login_content {
    font-family: Gudea, Geneva, sans-serif;
    font-size: 125%;
/*    margin-top: -50px;*/
    font-weight: 100;
}

#form_content {
    font-family: Gudea, Geneva, sans-serif;
    font-size: 125%;
    margin-top: 20px;
    font-weight: 100;
}

#error_header {
/*    text-align: start;*/
    float: right;
    color: red;
    <!-- text-shadow:  0 0 white; -->
    font-weight: bold;
/*    width: 300px;*/
    font-size: 120%;
    margin: 0 30px 0 0;
/*    margin: -30px 770px 0 0 ;*/
}
#error_detail {
    text-align: end;
    float: right;
    color: red;
    <!-- text-shadow:  .5px 0 white; -->
    font-size: 90%;
/*    width: 600px;*/
    margin: 10px -45px 0 0;
}
#submit_error {
/*    margin-left: 600px;*/
}
#submit_error_header {
    text-align: center;
    color: red;
    <!-- text-shadow:  2px 0 white; -->
    font-weight: bold;
    width: 400px;
    margin: 0 auto;
    padding-top: 20px;
}
#submit_error_detail {
    text-align: center;
    color: red;
    <!-- text-shadow:  2px 0 white; -->
    font-size: 85%;
/*    width: 400px;*/
/*    margin: 0 auto 20px auto;*/
}
#select_department {
    float: right;
    font-size: 3em;
 }
#logo {
    margin: 5%;
/*    text-align: center;*/
    width: 90vw;
    max-width: 1028px;
}

#logo_sm {
    text-align: start;
    margin: 10px 0 0 100px;
    z-index: 0;
}

#user_pane {
    text-align: right;
    font-weight: bolder;
    font-family:   Gudea, sans-serif;
    font-size: 100%;
    color: #450053;
    margin-top: -80px;
    margin-right: 100px;
    float:right;
}
#logout {
    color: #7ea142;
    text-decoration: none;
    font-size: 85%;
    padding: 8px;
    border: solid black .5px;
    margin-left: 10px;
    font-weight: 400;
}
#logout:hover{
    color: #4f005a;
    background-color: rgba(110, 172, 44, 0.24);
}
#user_pane :hover {
     color: #4f005a;
 }

#data_submit {
    width: 10%;
}
#reference_table {
    border-bottom: solid 1px black;
    line-height: 20px;
}
#reference_table td {
/*    border-bottom: solid 1px black;*/
    font-size: 12px;
    padding: 0 15px;
}
#table_header {
    border-bottom: solid black 2px;
}
#empty_table {
    margin: 400px 0 0 300px;
    width: 500px;
}
#delete_row {
    margin-left: 25px;
    float: right;
}
#delete_row_details {
     margin-top: -25px;
 }

#delete_row_details button {
    margin: 25px;
}
#details_form{
    margin-top: -45px;
    margin-right: -45px;
}
#details_table {
    border-bottom: solid black 1px;
    border-collapse: collapse;
 }
#score_table tr:nth-of-type(6n+0) {
    border-bottom: solid black 1px;
}


.table_reference {
    width: 900px;
    font-size: 75%;
    margin: 50px auto;
    padding-bottom: 100px;
}
.table_reference_page {
    width: 900px;
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
    padding: 0 25px 50px 0;
/*    margin-right: 250px;*/
    text-align: end;
    position: relative;
    bottom: 20px;
    right: 20px;
}
.tint {
    background-color: rgba(119, 238, 170, 0.42);
}
.home_page {
    background-image: url('../images/header.jpg');
    margin:  0;
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
    color: #000;
    text-shadow: none;
}
.register_header {
    text-shadow: none;
    font-size: 1.25em;
    margin-bottom: 20px;
    text-align: left;
    padding-left: 15px;
    color: #000;
}
#login button {
    margin: 0 auto;
    text-align: center;
    font-size: 15px;
    width: 90px;
    color: #000;
    background-color: transparent;
    border: solid 1.5px aliceblue;
}

#login button:hover {
    background-color: aliceblue;
 }
.login_table {
    margin: -320px auto 0 auto;
    color: #ffffff;
    <!-- text-shadow: black 4px 2px 4px; -->
}
.register_table {
    margin: -30px auto 0 auto;
    /*    width: 40%;*/
    color: #ffffff;
    <!-- text-shadow: black 4px 2px 4px; -->
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
    text-align: start;
    padding-left: 15px;
}
.dept_select {
    width: 60px;
    text-align: center;
    padding: 0;
    font-size: 1em;
}
.input_label {
    text-align: start;
    width: 100%;
/*    padding-left: 15px;*/
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
    width: 40%;
    font-size: 90% ;
}
.form_label-icat_score {
    text-align: start;
    padding-right: 20px;
    font-size: 90% ;
}
.form_label.details {
    text-align: justify;
    padding-right: 20px;
    width: 300px;
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
.cat_scoring {
    padding-left:5px;
}



@media screen and (max-width: 602px) {
    #reports.input_reference {
       float: none;
        margin-top: -25px;
    }
}

@media screen and (max-width: 690px) {
    h1 {
        margin-left: -20px;
    }
    h2 {
        margin-left: -50px;
    }
    #user_pane {
        text-align: end;
        margin: -80px 20px 0 0;
    }
    #reports.input_reference {
        float: right;
        margin-right: 2px;
        margin-
    }
}

@media screen and (max-width: 769px) {
    h2 {
        position: relative;
/*        left: 4px;*/
        top: -20px;
    }
    #form_content {
        margin-left: -100px;
    }
    #reports {
        margin: -60px 60px 0 0;
    }

    #logo_sm {
        text-align: center;
        margin: 0 50px 0 0;
    }
    .form_table {
        width: 80%;
        float:left;
    }
    .form_input {
        text-align: start;
        padding-right: 0;
        width: 80%;
        font-size: 1.25em;
    }
    .table_reference_page {
        width: 100%;
        margin-left: -20px;
    }
    .user {
        display: none;
    }


}


@media screen and (max-width: 967px) {
    #form_content {
        margin-left: 20px;
    }
    .form_label {
        text-align: start;
    }
    .table_reference_page {
        width: 100%;
    }
    .login_table {
        margin: -300px auto 0 auto;
    }

}
@media screen and (max-width: 860px) {
    .login_table {
        margin: -100px auto 0 auto;
        position: relative;
    }
}


@media screen and (max-width: 400px) {
    #logo_sm {
        margin: 0 50px 80px 0;
    }
}
