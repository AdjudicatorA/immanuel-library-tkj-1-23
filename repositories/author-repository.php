<?php

function getAuthors()
{
  $authors = [
    ["id" => 1, "name" => "Andrea Hirata",          "total_books" => 1, "bio" => "Penulis novel Laskar Pelangi dan Sang Pemimpi."],
    ["id" => 2, "name" => "Tere Liye",               "total_books" => 1, "bio" => "Penulis novel Laskar Pelangi dan Sang Pemimpi."],
    ["id" => 3, "name" => "J.K. Rowling",            "total_books" => 1, "bio" => "Penulis novel Laskar Pelangi dan Sang Pemimpi."],
    ["id" => 4, "name" => "Pramoedya Ananta Toer",   "total_books" => 2, "bio" => "Penulis novel Laskar Pelangi dan Sang Pemimpi."],
    ["id" => 5, "name" => "Sapardi Djoko Damono",    "total_books" => 1, "bio" => "Penulis novel Laskar Pelangi dan Sang Pemimpi."],
    ];

    return $authors;
}

function getAuthor()
{
  $author = ["id" => 1, "name" => "Andrea Hirata", "total_books" => "1", "bio" => "Penulis novel Laskar Pelangi dan Sang Pemimpi."];

  return $author;
}