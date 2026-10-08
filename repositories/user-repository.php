<?php

function getUsers() 
{
  $users = [
    ["id" => 1, "name" => "Admin Utama",    "email" => "admin@ski.sch.id",               "role" => "admin", "password" => "1234"],
    ["id" => 2, "name" => "Budi Santoso",   "email" => "budi.santoso@siswa.ski.sch.id",  "role" => "member", "password" => "1234"],
    ["id" => 3, "name" => "Siti Aminah",    "email" => "siti.aminah@siswa.ski.sch.id",   "role" => "member", "password" => "1234"],
    ["id" => 4, "name" => "Richard Marcell","email" => "richard.m@ski.sch.id",           "role" => "admin", "password" => "1234"],
  ];

  return $users;
}

function getUser()
{
  $user = ["id" => 1, "name" => "Admin Utama", "email" => "admin@ski.sch.id", "role" => "admin", "password" => "1234"];

  return $user;
}