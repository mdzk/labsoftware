<?php

namespace App\Controllers;

use App\Models\ArticlesModel;
use App\Models\VisitorsModel;

class Home extends BaseController
{

    public function index()
    {
        $visitor = new VisitorsModel();
        $visitor->save([
            'type' => 2,
            'id_articles' => 1
        ]);

        $article = new ArticlesModel();
        $data = [
            'articles' => $article->join('categories', 'categories.id_categories = articles.id_categories')->findAll(),
        ];

        function truncateString($str, $chars, $to_space, $replacement = "...")
        {
            if ($chars > strlen($str)) return $str;

            $str = substr($str, 0, $chars);
            $space_pos = strrpos($str, " ");
            if ($to_space && $space_pos >= 0)
                $str = substr($str, 0, strrpos($str, " "));

            return ($str . $replacement);
        }

        return view('home', $data);
    }

    public function article()
    {
        $article = new ArticlesModel();
        $data = [
            'articles' => $article->join('categories', 'categories.id_categories = articles.id_categories')->findAll(),
        ];

        function truncateString($str, $chars, $to_space, $replacement = "...")
        {
            if ($chars > strlen($str)) return $str;

            $str = substr($str, 0, $chars);
            $space_pos = strrpos($str, " ");
            if ($to_space && $space_pos >= 0)
                $str = substr($str, 0, strrpos($str, " "));

            return ($str . $replacement);
        }

        return view('article', $data);
    }

    public function hosting()
    {
        return view('hosting');
    }
}
