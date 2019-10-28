<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class ExerciseUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravelshop:exercise-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '练习命令功能';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(User $user)
    {
        $this->info('开始');

        $user->calculateUsers();

        $this->info('成功');
    }
}
