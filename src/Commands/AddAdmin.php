<?php

namespace FoxLaby\Mudir\Commands;

use Illuminate\Console\Command;
use FoxLaby\Mudir\App\Models\Admin;

class AddAdmin extends Command {

    protected $signature = 'foxlaby:mudir:addAdmin {email}';

    protected $description = 'Add a user to the administration by email .. but it should be located within the users table.';

    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $email = $this->argument('email');
        
        $user = app('db')->table('users')->where('email', '=', $email)->first();

        if (!$user) {
            $this->error("This user is not recognized.");
            return false;
        }

        $admin_first = Admin::where('user_id', '=', $user->id)->first();
        
        if ($admin_first) {
            $this->error("This user is already on administration.");
            return false;
        }
        
        $answer = $this->confirm('Do you already want add the user to administration');

        if (!$answer) {
            $this->comment("User is not added to the administration.");
            return false;
        }

        Admin::create([
            'user_id' => $user->id,
        ]);

        $this->info("The user has been added to the administration.");
    }
}