<?php
namespace App\Classe;

use Mailjet\Client;
use Mailjet\Resources;

class Mailjet
{

   
    private $api_key = '70ebd43e6a01017368db80377b7717b0'; 
    private $api_key_secret = '70ebd43e6a01017368db80377b7717b0';

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