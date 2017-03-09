<?php
session_start();

require_once 'autoloader.php';

use BLL\PersonManager;
use Models\Person;

$_manager = new PersonManager();

if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['submitBtn']))
{
    $aPerson = new Person();
    $aPerson->setName($_POST['name']);
    $aPerson->setPhoneNo($_POST['phoneNo']);
    $aPerson->setEmail($_POST['email']);
    $aPerson->setAddress($_POST['address']);

    $msg = $_manager->AddPerson($aPerson);

    $_SESSION['status'] = $msg;
    header('Location: ../index.php');
}