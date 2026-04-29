<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
  /**
   * Показать список всех пользователей приложения.
   *
   * @return Response
   */
  public function index()
  {
    $users = DB::select('select * from users where active = ?', [1]);

    return view('user.index', ['users' => $users]);
  }
}