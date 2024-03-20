<?php

namespace App\Http\Controllers;

use OpenAI;
class OpenAIController extends Controller
{
private $client;


public function __construct()
{
    $this->client = OpenAI::client(env('OPENAI_API_KEY'));
}


public function sendMessage($message)
{
    $result = $this->client->chat()->create([
        'model' => 'gpt-3.5',
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