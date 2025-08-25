<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class Cockpit
{
    protected static function request(string $endpoint, string $model, array $queryModel = []): ?array
    {
        if (app()->runningInConsole()) {
            return null;
        }
        
        $url = env('API_COCKPIT_URL') . "content/{$endpoint}/{$model}";
        $queryModel['locale'] = session('locale') ?? config('app.locale');

        if (!empty($queryModel)) {
            $url .= '?' . http_build_query(array_filter($queryModel));
        }

        $response = Http::withHeaders([
            'api-key' => env('KEY_COCKPIT')
        ])->get($url);
        if ($response->status() != 200) {
            throw new \Exception('Error: ' . $response->status() . ' - ' . $response->body());
        }
        return $response->json();
    }

    public static function get(string $model, array $queryModel = []): ?array
    {
        return self::request('items', $model, $queryModel);
    }

    public static function first(string $model, array $queryModel = []): ?array
    {
        return self::request('item', $model, $queryModel);
    }

    public static function post(string $model, array $data): ?array
    {
        $url = env('API_COCKPIT_URL') . "content/item/" . $model;

        $payload = [
            'data' => $data
        ];
        $response = Http::withHeaders([
            'api-key' => env('KEY_COCKPIT'),
            'Content-Type' => 'application/json',
        ])->post($url, $payload);

        if ($response->status() != 200) {
            throw new \Exception('Error: ' . $response->status() . ' - ' . $response->body());
        }
        return $response->json();
    }
}
