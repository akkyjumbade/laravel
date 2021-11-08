<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
   function index(Request $req, $type = null) {
      $users = Category::latest();
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
   function create() {
      $categories = Category::select(['id as value', 'title as label'])->get();
      $category = new Category();
      $category->title = 'newsdfsd';
      return view('admin::categories.create', compact(
         'categories', 'category'
      ));
   }

   function store(Request $req) {
      $req->validate([
         'title' => ['required', 'unique:roles'],
         'description' => ['nullable', 'max:255'],
      ]);
      try {
         $category = Category::create([
            'title' => $req->input('title'),
            'slug' => Str::slug(strtolower($req->input('title'). time())),
            'description' => $req->input('description', $req->input('title')),
         ]);
         return response()->success([
            'message' => __('Category created'),
            'data' => $category
         ]);
      }catch (\Throwable $th) {
         return response()->error([
            'message' => $th->getMessage()
         ]);
      }
   }
   function show(Category $category) {
      return view('admin::categories.show', compact(
         'category'
      ));
   }
   function edit(Category $category) {
      $categories = Category::select(['id as value', 'title as label'])->get();
      return view('admin::categories.create', compact(
         'categories', 'category'
      ));
   }
}
