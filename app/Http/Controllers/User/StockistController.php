<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StockistController extends Controller
{
  public function index()
  {
    return view('WU.stockist.stockist');
  }
}
