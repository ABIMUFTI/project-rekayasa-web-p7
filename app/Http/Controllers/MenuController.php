<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus =Menu::paginate(6);
        return view('page.menu', compact('menus'));
    }
    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return view('page.menu-detail', compact('menu'));
    }
}
