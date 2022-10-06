<?php
require(__DIR__."/require/classInterface.php");
require(__DIR__."/require/classTrait.php");
require(__DIR__."/class/Project.php");
require(__DIR__."/class/Environment.php");

$ftHost = new Host("test2", "host1", "55");
$ftCustomer = new Customer("909", "custom1", "777");
$ftContact = new Contact("test@gmail.com", "07.82.13.06.74", "admin", $ftHost, $ftCustomer);
$ftProject = new Project("proj1", "007", "idoKn", "???", 8, "66", $ftHost, $ftCustomer);
$ftEnvironnement = new Environment("env1", "portoflio.com", "192.168.0.1", 80, "root", "localhost", 0, $ftProject);