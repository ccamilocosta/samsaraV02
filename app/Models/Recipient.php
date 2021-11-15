<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    use Notifiable;
    protected $recipient;
    protected $email;
    public function __construct() {
          $this->recipient = config('recipient.name');
          $this->email = config('recipient.email');
      }
    public function config() {
        Return [
            'email' => 'user@email.com',
            'name' => 'UserName',
        ];
    }

}
