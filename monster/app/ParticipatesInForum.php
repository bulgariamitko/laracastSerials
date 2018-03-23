<?php

namespace App;

trait ParticipatesInForum
{
    public function startConversation(Conversation $conversation)
    {
        // create a new thread for the current user,
    }

    public function replyTo(Conversation $conversation, Replay $replay)
    {
        // have the user replay to a conversation with the given replay.
    }
}