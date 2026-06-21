<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Define all permissions
        $permissions = [
            // Air Way Bill
            'airwaybill.create',
            'airwaybill.view',
            'airwaybill.edit',
            'airwaybill.delete',

            // Parcel Tracking
            'parcel.track',

            // Complaints
            'complaint.create',
            'complaint.view',
            'complaint.manage',

            // Accounts & Invoices
            'accounts.view',
            'invoice.receive',
            'invoice.view',

            // Delivery
            'delivery.upload_picture',
            'delivery.view',

            // Users (Super Admin only)
            'users.manage',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // --- ROLES ---

        // 1. Super Admin — all permissions
        $superAdmin = Role::firstOrCreate(['name' => 'super_admin']);
        $superAdmin->syncPermissions(Permission::all());

        // 2. Customer Support — Create Airwaybill, Track Parcel, Complaint
        $customerSupport = Role::firstOrCreate(['name' => 'customer_support']);
        $customerSupport->syncPermissions([
            'airwaybill.create',
            'airwaybill.view',
            'parcel.track',
            'complaint.create',
            'complaint.view',
        ]);

        // 3. Accounts — All Accounts, Receive Invoice
        $accounts = Role::firstOrCreate(['name' => 'accounts']);
        $accounts->syncPermissions([
            'accounts.view',
            'invoice.receive',
            'invoice.view',
            'complaint.view',
        ]);

        // 4. Delivery Partner — Delivery Picture, Complaint
        $deliveryPartner = Role::firstOrCreate(['name' => 'delivery_partner']);
        $deliveryPartner->syncPermissions([
            'delivery.upload_picture',
            'delivery.view',
            'complaint.create',
            'complaint.view',
        ]);

        // 5. Branch — CS + Account + Delivery access
        $branch = Role::firstOrCreate(['name' => 'branch']);
        $branch->syncPermissions([
            'airwaybill.create',
            'airwaybill.view',
            'accounts.view',
            'invoice.view',
            'delivery.view',
            'complaint.view',
        ]);

        // --- DEFAULT SUPER ADMIN USER ---
        $admin = User::firstOrCreate(
            ['email' => 'admin@freighthub.com'],
            [
                'name'     => 'Super Admin',
                'password' => Hash::make('admin@123'),
            ]
        );
        $admin->assignRole('super_admin');

        $this->command->info('Roles, permissions and Super Admin user created.');
        $this->command->info('Login: admin@freighthub.com  |  Password: admin@123');
    }
}
