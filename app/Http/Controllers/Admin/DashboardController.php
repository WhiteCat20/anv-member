<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        return view('dashboard.index', compact('title'));
    }
    public function abstrak()
    {
        $title = 'FORM TO SUBMIT ABSTRACT';
        return view('dashboard.abstrak', compact('title'));
    }
    public function paper()
    {
        $title = 'FORM TO SUBMIT PAPER';
        return view('dashboard.paper', compact('title'));
    }
    public function ppt()
    {
        $title = 'FORM TO SUBMIT PRESENTATION';
        return view('dashboard.ppt', compact('title'));
    }
    public function authorData()
    {
        $title = 'Authors Data';
        return view('dashboard.author-data', compact('title'));
    }
    public function payment()
    {
        $title = 'PAYMENT PAGE';
        return view('dashboard.payment', compact('title'));
    }
    public function sponsorship()
    {
        $title = 'Sponsorship Partners';
        return view('dashboard.sponsorship', compact('title'));
    }
}
