<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $threads = Thread::all();

        return response()->json($threads);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $thread = Thread::create($request->only(['title', 'description', 'user_id']));

        return response()->json([ 'msg' => 'Success', 'Data' => $thread ]);
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
