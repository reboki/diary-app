<?php

namespace App\Http\Controllers;
use App\Models\Diary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('diaries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // バリデーション（入力チェック）
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);
        // DBに保存
        Diary::create([
            'user_id' => Auth::id(),
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'image_url' => null,
        ]);
        // 投稿後のリダイレクト（とりあえず投稿フォームに戻す）
        return redirect()->route('diaries.create')->with('success','投稿できたよ！');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
