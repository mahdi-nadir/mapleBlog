<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\InboxParticipants;
use App\Models\Inbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showMessages()
    {
        // $inboxParticipants = InboxParticipants::where('user_inbox_id', auth()->user()->id)
        //     ->orWhere('user_communicating_id', auth()->user()->id)->get();
        // $inboxes = [];
        // foreach ($inboxParticipants as $inboxParticipant) {
        //     $inbox = Inbox::where('id', $inboxParticipant->inbox_id)->first();
        //     array_push($inboxes, $inbox);
        // }
        // get only users that have sent messages to the auth user and the auth user has sent messages to
        // $users = [];
        // foreach ($inboxes as $inbox) {
        //     $user = User::where('id', $inbox->last_message_sent_id)->first();
        //     array_push($users, $user);
        //     // delete duplicates
        //     $users = array_unique($users);
        // }
        $inboxes = Inbox::where('user1_id', auth()->user()->id)
            ->orWhere('user2_id', auth()->user()->id)->get();
        return view('profile.messages.messages', compact(/* 'users', */'inboxes'));
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
    public function show(string $inbox_id)
    {
        // $inbox = Inbox::where('id', $inbox_id)->first();
        $messages = Message::where('inbox_id', $inbox_id)->/* where('user1_id', auth()->user()->id)->orWhere('user2_id', auth()->user()->id)-> */get();
        return view('profile.messages.show-message', compact('messages'));
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
