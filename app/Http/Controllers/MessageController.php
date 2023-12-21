<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showMessages($user_id)
    {
        $userId = auth()->user()->id;
        $messages = Message::where('from_user_id', $user_id)
            ->orWhere('to_user_id', $user_id)
            ->distinct()
            ->get();

        $users = [];

        foreach ($messages as $message) {
            if ($message->from_user_id == $userId) {
                $user = User::where('id', $message->to_user_id)->first();
                $users[] = $user;
            } elseif ($message->to_user_id == $userId) {
                $user = User::where('id', $message->from_user_id)->first();
                $users[] = $user;
            }
        }
        $users = array_unique($users);

        return view('profile.messages.messages', compact('messages', 'users'));
    }

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = Message::where('id', $id)->first();
        return view('profile.messages.show-message', compact('message'));
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

    public function hideMessage($id)
    {
        $message = Message::where('id', $id)->first();
        if ($message->to_show == true && $message->from_show == true || $message->to_show == true && $message->from_show == false) {
            $message->to_show = false;
            $message->save();
        } elseif ($message->to_show == false && $message->from_show == true) {
            $message->from_show = false;
            $message->save();
        } elseif ($message->to_show == false && $message->from_show == false) {
            $message->delete();
        }
        // $message->save();
        return redirect()->route('profile.showMessages', auth()->user()->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
