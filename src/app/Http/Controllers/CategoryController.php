<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index()
    {
        try {
            $categories = Category::all();
            return response()->json($categories);
        } catch (\Exception $e) {
            Log::error('Error fetching categories: ' . $e->getMessage());
            return response()->json(['message' => 'Failed to fetch categories'], 500);
        }
    }

    public function syncCategories()
    {
        try {
            $lastSync = Cache::get('last_sync_categories');
            if ($lastSync && now()->diffInHours($lastSync) < 24) {
                return response()->json(['message' => 'Categories already synced within the last 24 hours'], 200);
            }

            $response = Http::withToken(env('ALDEA_TOKEN_JWT'))
                ->get(env('ALDEA_API_URL') . 'Categorias/Retrieve');

            if ($response->successful()) {
                $categories = $response->json();
                foreach ($categories as $categoryData) {
                    if (isset($categoryData['Denominacion'])) {
                        Category::updateOrCreate(
                            ['denominacion' => $categoryData['Denominacion']],
                            ['denominacion' => $categoryData['Denominacion']]
                        );
                    } else {
                        Log::warning('Invalid data format received from API', ['data' => $categoryData]);
                    }
                }
                Cache::put('last_sync_categories', now());
                return response()->json(['message' => 'Categories synced successfully'], 200);
            }

            Log::error('Failed to sync categories: API request unsuccessful');
            return response()->json(['message' => 'Failed to sync categories'], 500);
        } catch (\Exception $e) {
            Log::error('Error syncing categories: ' . $e->getMessage());
            return response()->json(['message' => 'Failed to sync categories'], 500);
        }
    }
}