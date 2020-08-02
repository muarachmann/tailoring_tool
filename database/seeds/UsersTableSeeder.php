<?php

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::count()) {
            $this->command->info('Truncating User, Role and Permission tables');
            $this->truncateLaratrustTables();

            // ===================
            // CREATING ROLES
            // ===================
            $superAdminRole = new Role();
            $superAdminRole->name = "super_admin";
            $superAdminRole->display_name = "Super Administrator";
            $superAdminRole->description  = 'User is the super admin of the system. They own the project.';
            $superAdminRole->save();

            $adminRole = new Role();
            $adminRole->name = "admin";
            $adminRole->display_name = "Administrator";
            $adminRole->description  = 'User is the admin. They own/manage the project but fewer privileges than super admins.';
            $adminRole->save();

            $tailorRole = new Role();
            $tailorRole->name = "tailor";
            $tailorRole->display_name = "Tailor";
            $tailorRole->description  = 'Tailor in the system';
            $tailorRole->save();


            $userRole = new Role();
            $userRole->name = "customer";
            $userRole->display_name = "Customer";
            $userRole->description  = 'Regular/Default/Customer User in the system';
            $userRole->save();

            // =======================
            // CREATING PERMISSIONS
            // =======================
            $manageUser = new Permission();
            $manageUser->name = 'manage-users';
            $manageUser->display_name = 'Manage Users';
            $manageUser->description  = 'Manage users and related data.';
            $manageUser->save();

            // =======================
            // Create SuperAdmin/Admin/Tailor/User Account
            // =======================
            // Super Admin
            $user = User::create([
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'email' => 'superadmin@demo.com',
                'is_active' => true,
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('s_admin123')
            ]);
            $user->save();
            $user->attachRole($superAdminRole);
            $superAdminRole->attachPermissions([$manageUser]);

            // Admin
            $user = User::create([
                'first_name' => 'Admin',
                'last_name' => 'User',
                'email' => 'admin@demo.com',
                'is_active' => true,
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('admin123')
            ]);
            $user->save();
            $user->attachRole($adminRole);
            $adminRole->attachPermissions([$manageUser]);

            // Tailor
            $user = User::create([
                'first_name' => 'Tailor',
                'last_name' => 'User',
                'email' => 'tailor@demo.com',
                'is_active' => true,
                'email_verified_at' => Carbon::now(),
                'phone_verified_at' => Carbon::now(),
                'password' => bcrypt('tailor123')
            ]);
            $user->save();
            $user->attachRole($tailorRole);


            // Default User(s)
            $user = User::create([
                'first_name' => 'Default',
                'last_name' => 'User',
                'email' => 'demouser@demo.com',
                'is_active' => true,
                'email_verified_at' => Carbon::now(),
                'phone_verified_at' => Carbon::now(),
                'password' => bcrypt('demouser')
            ]);
            $user->save();
            $user->attachRole($userRole);
        }
    }

    /**
     * Truncates all the laratrust tables and the users table
     *
     * @return    void
     */
    public function truncateLaratrustTables()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('permission_role')->truncate();
        DB::table('permission_user')->truncate();
        DB::table('role_user')->truncate();
        User::truncate();
        Role::truncate();
        Permission::truncate();
        Schema::enableForeignKeyConstraints();
    }
}
