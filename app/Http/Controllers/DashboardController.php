<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Initial data
        $data = "Initial Data";
        
        return view('dashboard_pbl5', compact('data'));
    }

    public function refreshData()
    {
        // Simulate fetching updated data from database or external API
        $updatedData = "Updated Data";

        // You can return the updated data or perform any other action as needed
        return response()->json(['data' => $updatedData]);
    }
}
