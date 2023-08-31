<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Resource\AuthorsResource;

class AuthorsController extends Controller
{
    public function index()
    {
        return AuthorsResource::collection(Author::all());
    }
}
