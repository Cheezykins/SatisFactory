<?php

namespace App\Console\Commands;

use App\User;
use Cheezykins\PassGen\PassGen;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AddAdminUSer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:add {email : The email address to add}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds an admin user';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $user = new User();
        $password = PassGen::generate()->getPlainText();
        $user->name = $this->argument('email');
        $user->email = $this->argument('email');
        $user->password = Hash::make($password);
        $user->save();

        $this->info('Created user ' . $user->email . ' with password ' . $password);

    }
}
