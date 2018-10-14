<?php

use App\User;
use App\Role;
use App\Permission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Eloquent::unguard();

  $this->call(SurveysTableSeeder::class);
  $this->call(SectionsTableSeeder::class);
  $this->call(QuestionsTableSeeder::class);



  Eloquent::reguard();
        
        // Ask for db migration refresh, default is no
        if ($this->command->confirm('Do you wish to refresh migration before seeding, it will clear all old data ?')) {
            // disable fk constrain check
            // \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

            // Call the php artisan migrate:refresh
            $this->command->call('migrate:refresh');
            $this->command->warn("Data cleared, starting from blank database.");

            // enable back fk constrain check
            // \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }


        // Seed the default permissions
        $permissions = Permission::defaultPermissions();

        foreach ($permissions as $perms) {
            Permission::firstOrCreate(['name' => $perms]);
        }

        $this->command->info('Default Permissions added.');

        // Seed the default rols
        $roles = Role::defaultRole();

        foreach ($roles as $perms) {
            Role::firstOrCreate(['name' => $perms]);
        }

        $this->command->info('Default Role added.');

        $roles_array = Role::all();

        foreach($roles_array as $role) {
            if( $role->name == 'admin' ) {
                // assign all permissions
                $role->syncPermissions(Permission::all());
                $this->command->info('Admin granted all the permissions');

            }elseif ($role->name == 'Patient') {
                // for others by default only read access
                $role->syncPermissions(Permission::where('name', 'LIKE', 'view_%')->get());
                // $role->syncPermissions(Permission::where('name', '=', 'view_users')
                //     ->orWhere('name', '=', 'add_users')
                //     ->orWhere('name', '=', 'edit_users')
                //     ->orWhere('name', '=', 'delete_users')
                //     ->get());

            }elseif ($role->name == 'family_member') {
                // for others by default only read access
                $role->syncPermissions(Permission::where('name', 'LIKE', 'view_%')->get());
                // $role->syncPermissions(Permission::where('name', '=', 'view_users')
                //     ->orWhere('name', '=', 'add_users')
                //     ->orWhere('name', '=', 'edit_users')
                //     ->orWhere('name', '=', 'delete_users')
                //     ->get());

            }
        }

        
    }


}
