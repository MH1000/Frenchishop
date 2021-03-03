<?php
namespace App\Classe;

use Mailjet\Client;
use \Mailjet\Resources;

class Mail{
    private $api_key = '517f0cd8e0d77c5553c7d93049c27756';
    private $api_key_secret = 'f75fc629db75c4e2ad2e22ab29ff56f3';

    public function send($to_email, $to_name, $subject, $content)
    {
        $mj = new Client($this->api_key, $this->api_key_secret, true, ['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "gilliams9@hotmail.fr",
                        'Name' => "La Boutique Française"
                    ],
                    'To' => [
                    [
                        'Email' => $to_email,
                        'Name' => $to_name
                    ]
                    ],
                    'TemplateID' => 2073147,
                    'TemplateLanguage' => true,
                    'Subject' =>$subject,
                    'Variables' => [
                        'content' => $content
                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();
    }
}