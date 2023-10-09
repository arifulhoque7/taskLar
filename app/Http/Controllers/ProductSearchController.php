<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SearchHistory;

class ProductSearchController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View
     */

    public function index(Request $request)
    {
        $searchHistory = new SearchHistory();
        $allResults = $searchHistory->products();
        $keywords = SearchHistory::pluck('keyword');
        $users = SearchHistory::pluck('user');
        $searchTimes = SearchHistory::pluck('search_time');
        return view('product', compact('allResults', 'keywords', 'users', 'searchTimes'));
    }

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View
     */

     public function search(Request $request)
     {
         $searchHistory = new SearchHistory();
         $keyword = $request->input('keyword');
         $user = $request->input('user');
         $time_range = $request->input('time_range');
         $start_date = $request->input('start_date');
         $end_date = $request->input('end_date');
         $allResults = $searchHistory->products($keyword, $user, $time_range, $start_date, $end_date);
 
         return response()->view('search_view', compact('allResults'));
     }
}
