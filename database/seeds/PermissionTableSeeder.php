<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editSlot = new Permission();
        $editSlot->name         = 'edit-slot';
        $editSlot->display_name = 'Edit Slots'; // optional
        // Allow a Slot to...
        $editSlot->description  = 'Edit existing Slots'; // optional
        $editSlot->save();
        
        $admin = Role::where('name','=','admin')->first();
        $admin->attachPermission($editSlot);
        
        $viewSlot = new Permission();
        $viewSlot->name         = 'view-slot';
        $viewSlot->display_name = 'View Slots'; // optional
        // Allow a Slot to...
        $viewSlot->description  = 'View existing Slots'; // optional
        $viewSlot->save();

        $viewer = Role::where('name','=','viewer')->first();
        $viewer->attachPermission($viewSlot);
        //
    }
}
