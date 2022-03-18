<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        $articles = Article::query()->whereDate('created_at', '>', Carbon::now()->subMonth())->count();
        $users = Customer::query()->count();
        $transactions = Transaction::query()->whereDate('created_at', '>', Carbon::now()->subMonth())->where('status', 3)->count();
        $total = Transaction::query()->where('status', 3)->get()->sum('total_money');

        return view('admin.index', compact('articles', 'users', 'transactions', 'total'));
    }
}
