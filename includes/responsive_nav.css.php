<?php
/**
 * Programmer: Michael Le-Reiver
 * Date: 11/30/16
 * Time: 2:45 PM
 * File: responsive_nav.css.php
 * Responsive Navigation
 */
 header('Content-type: text/css');
 ?>

/* -------------------- Hamburger Menu Bars ----------------------- */

.icon {
    margin: 10px;
}

.container {
    display: inline-block;
    cursor: pointer;
    margin: 0;
}

.bar1, .bar3 {
    width: 30px;
    height: 4px;
    background-color: #6eac2c;
    margin: 6px 0;
    transition: 0.8s;
}

.bar2 {
    width: 30px;
    height: 4px;
    background-color: #6eac2c;
    margin: 6px 0;
    transition: 0s;
}

.container.change {
    right: 60px;
    top: 100px;
}

.change .bar1 {
    -webkit-transform: rotate(45deg) translate(14px, 6px);
    transform: rotate(45deg) translate(14px, 6px);
    width: 40px;
}

.change .bar2 {
    opacity: 0;
}

.change .bar3 {
    -webkit-transform: rotate(135deg) translate(-7px, 1px);
    transform: rotate(135deg) translate(-7px, 1px);
    width: 40px;
}

/* -------------------Collapsing Responsive Navigation -----------------------  */


/* Remove margins and padding from the list, and add a black background color */
ul.topnav {
    list-style-type: none;
    margin: -160px 0 0 -20px;
    padding: 0;
    overflow: hidden;
/*    background-color: rgba(50, 60, 68, 0.55);*/
    width: 100%;
}

/* Float the list items side by side */
ul.topnav li {
    float: left;
}

/* Style the links inside the list items */
ul.topnav li a {
    margin: 0;
    text-decoration: none;
    transition: 0.8s;
    display: inline-block;
    color: #121c3e;
    text-align: left;
/*    padding: 0 16px;*/
}

/* Change background color of links on hover */
ul.topnav li a:hover {
    background-color: transparent;
    color: #6eac2c;
}

/* Hide the list item that contains the link that should open and close the topnav on small screens */
ul.topnav li.icon {
    display: none;
}

/* When the screen is less than 680 pixels wide, hide all list items, except for the first one ("Home").
    Show the list item that contains the link to open and close the topnav (li.icon)
*/
@media screen and (max-width: 769px) {
    ul.topnav li:not(:first-child) {
        display: none;
    }

    ul.topnav li.icon {
        float: right;
        display: inline;
    }
    /* Remove bottom border from hamburger menu */
    nav {
        border-bottom: none;
    }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon.
    This class makes the topnav look good on small screens
*/
@media screen and (max-width: 769px) {
    ul.topnav.responsive {
/*        padding: 0;*/
/*        height: 110%;*/
        transition: .75s;
    }

    ul.topnav.responsive li.icon {
/*        position: absolute;*/
        right: 15px;
        top: 15px;
    }

    ul.topnav.responsive li {
        float: none;
        display: block;
        clear:both;
        text-align: start;
    }

    ul.topnav.responsive li a {
        display: inline-block;
        text-align: left;
        margin-bottom: 5px;
        padding: 0;
    }
}

@media screen and (min-width: 769px) {
    ul.topnav {
        margin: -50px 0 0 30px;
    }
}


