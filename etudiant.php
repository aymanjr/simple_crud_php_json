<?php


function getUsers()
{
     $etudiant =   json_decode(file_get_contents(filename: __DIR__ . 'etudiant.json'), true);
     echo '<pre>';
     var_dump($etudiant);
     echo '<pre>';
     exit;
}


function getUserbyid($id)
{
}



function createUser($data)
{
}


function updateUser($data, $id)
{
}


function deleteUser($id)
{
}
