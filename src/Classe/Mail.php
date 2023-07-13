<?php
namespace App\Classe;

use Mailjet\Client;
use Mailjet\Resources;

class Mail
{

   
    private $api_key = '0f10b28cdecdb17d76723c7eae41328f'; 
    private $api_key_secret = '5e17a613259bd8483c809f599b3b1f82';

    public function send($to_email, $to_name , $subject, $content)
    {
        
        $mj = new Client($this->api_key,$this->api_key_secret, true,['version' => 'v3.1']);
$body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "contact@ishiki.fr",
                'Name' => "Ishiki-shop"
            ],
            'To' => [
                [
                    'Email' => $to_email,
                    'Name' => $to_name 
                ]
            ],
            'TemplateID' => 4952571,
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