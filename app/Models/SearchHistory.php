<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchHistory extends Model
{
    use HasFactory;
    protected $fillable = ['keyword', 'user', 'search_time', 'results'];

    protected $casts = [
        'results' => 'array',
    ];

    public function products($keyword = null, $user = null, $searchTime = null, $startDate = null, $endDate = null)
    {
        $query = SearchHistory::query();

        if ($keyword !== null) {
            $query->where('keyword', $keyword);
        }

        if ($user !== null) {
            $query->where('user', $user);
        }

        if ($searchTime !== null) {
            if ($searchTime === 'yesterday') {
                dd(now()->subDay());
                $query->whereDate('search_time', now()->subDay());
            } elseif ($searchTime === 'last_week') {
                $query->whereBetween('search_time', [now()->subWeek(), now()]);
            } elseif ($searchTime === 'last_month') {
                $query->whereBetween('search_time', [now()->subMonth(), now()]);
            }
        }

        if ($startDate !== null && $endDate !== null) {
            $query->whereBetween('search_time', [$startDate, $endDate]);
        }


        $data = $query->get()->toArray();
        $mergedResults = array_reduce($data, function ($carry, $item) {
            return array_merge($carry, $item['results']);
        }, []);

        $perPage = 10;
        $currentPage = request()->input('page', 1);
        $offset = ($currentPage - 1) * $perPage;
        $paginatedResults = array_slice($mergedResults, $offset, $perPage, true);

        $paginator = new LengthAwarePaginator(
            $paginatedResults,
            count($mergedResults),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return $paginator;

    }

}
