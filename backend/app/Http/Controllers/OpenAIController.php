<?php

namespace App\Http\Controllers;

use OpenAI;
class OpenAIController extends Controller
{
private $client;


public function __construct()
{
    $this->client = OpenAI::client(getenv(''));
}


public function sendMessage($message)
{
    $result = $this->client->chat()->create([
        'model' => 'gpt-4',
        'messages' => [
            ['role' => 'user', 'content' => $message],
        ],
    ]);


    if ($result->choices[0]->message->content) {
        return $result->choices[0]->message->content;
    } else {
        throw new \Exception('Failed to send message to IA');
    }
}
}