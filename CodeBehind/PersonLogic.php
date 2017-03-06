<?php
session_start();

spl_autoload_register(function($name){
    require_once '../'.str_replace('\\','/',$name).'.php';
});

use BLL\PersonManager;
use Models\Person;

if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['submitBtn']))
{
    $aPerson = new Person();
    $aPerson->setName($_POST['name']);
    $aPerson->setPhoneNo($_POST['phoneNo']);
    $aPerson->setEmail($_POST['email']);
    $aPerson->setAddress($_POST['address']);

    $_manager = new PersonManager();
    $affectedRows = $_manager->AddPerson($aPerson);

    $_SESSION['status'] = $affectedRows>0 ? 'Data Saved' : 'Data Not Saved';
    header('Location: ../index.php');
}