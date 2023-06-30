<?php
namespace App\Classe;

use Mailjet\Client;
use Mailjet\Resources;

class Mail
{

   
    private $api_key = 'db772bc6bf1e83f6376804c9f4d8611f';
    private $api_key_secret = '2b57b2a27423d2b05660d5a8bbcd0f80';

    public function send($to_email, $to_name , $subject, $content)
    {
        
        $mj = new Client($this->api_key,$this->api_key_secret, true,['version' => 'v3.1']);
$body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "igornaomie@gmail.com",
                'Name' => "Ishiki-shop"
            ],
            'To' => [
                [
                    'Email' => $to_email,
                    'Name' => $to_name 
                ]
            ],
            'TemplateID' => 4860222,
            'TemplateLanguage' => true,
            'Subject' => $subject,
            'Variables'=> [
                'content'=> $content,
            ]
        ]
    ]
        
];
$response = $mj->post(Resources::$Email, ['body' => $body]);
$response->success();
    }

}