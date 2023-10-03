<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    public function testConnection()
    {
        try {
            DB::connection()->getPdo();
            echo "Connected to the database successfully!";
        } catch (\Exception $e) {
            die("Could not connect to the database. Error: " . $e->getMessage());
        }
    }
}
