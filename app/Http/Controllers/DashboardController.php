<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class DashboardController extends Controller
{
    public function index()
    {
        $items = Item::all();
        $totalItems = Item::count();
        $lastItem = Item::latest()->first();
        return view('content.dashboard', compact('items', 'totalItems', 'lastItem'));
    }
}
