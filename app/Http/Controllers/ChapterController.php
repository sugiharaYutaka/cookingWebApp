<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function index()
    {
        return view('chapters.index');
    }

    public function show(Request $request)
    {
        $selectedChapter = $request->input('chapter');

        // 選択されたチャプターに基づく処理を実行する
        switch ($selectedChapter) {
            case 'chapter1':
                $chapterContent = 'チャプター1の内容です。';
                break;
            case 'chapter2':
                $chapterContent = 'チャプター2の内容です。';
                break;
            // 他のチャプターに対する処理を追加
            default:
                $chapterContent = '不明なチャプターです。';
                break;
        }

        return view('chapters.show', ['content' => $chapterContent]);
    }
}
