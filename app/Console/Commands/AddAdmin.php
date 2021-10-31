<?php

namespace App\Console\Commands;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Console\Command;

class AddAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This artisan command is used to add admin data without registering.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $input['name'] = $this->ask('Your name?');
        $input['email'] = $this->ask('Your email?');
        $input['password'] = $this->secret('What is the password?');
        $input['password'] = bcrypt($input['password']);
        User::create($input);
        $this->info('Data added successfully');
    }
}
