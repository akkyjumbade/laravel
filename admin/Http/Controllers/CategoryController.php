<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CategoryController extends Controller
{
   function index(Request $req, $type = null) {
      $users = User::latest();
      $status = $req->query('status', null);
      if ($status) {
         $users->where('status', $status);
      }
      //$status = $req->query('status', null);
      $categories = $users->paginate(config('admin.pagination_limit'));
      return view('admin::categories.index', compact(
         'categories'
      ));
   }

}
