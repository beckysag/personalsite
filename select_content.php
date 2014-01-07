<?php

/*
HONORS
President, Beta Alpha Psi (National Accounting Fraternity) 
Golden Key International Honour Society
Bachelor of Accountancy Academic Excellence Award 
Benjamin Franklin Accounting Award and Scholarship 
PricewaterhouseCoopers National Leadership Program

*/

$target = $_POST['target'];

switch ($target) {
    case "resume":
    	include('resume.php');
        break;

    case "projects":
    	include('projects.php');
        break;

    case "contact":
    	include('contact.php');
        break;

    case "about":
    	include('about.php');
        break;

    case "home":
    	include('home.php');
    	//include('about.php');
        break;
}

