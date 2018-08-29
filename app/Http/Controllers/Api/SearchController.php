<?php

namespace App\Http\Controllers\Api;

use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Определим сообщение, которое будет отображаться, если ничего не найдено
        // или поисковая строка пуста
        $error = ['error' => 'No results found, please try with different keywords.'];

        // Удостоверимся, что поисковая строка есть
        if($request->has('q')) {

            // Используем синтаксис Laravel Scout для поиска по таблице products.
            $posts = Video::search($request->get('q'))->get();

            // Если есть результат есть, вернем его, если нет  - вернем сообщение об ошибке.
            return $posts->count() ? $posts : $error;

        }

        // Вернем сообщение об ошибке, если нет поискового запроса
        return $error;
    }

}
