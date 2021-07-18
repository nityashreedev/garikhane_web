<?php
namespace App\Libraries;


use App\Models\RolePermission;
use App\Models\UserRole;
use Illuminate\Support\Facades\Auth;

class Permission
{

    public static function all()
    {
        return [
            'Dashboard' => [
                [
                    'slug' => 'dashboard-view',
                    'description' => 'View',
                ]
            ],
            'Mobile Users' => [
                [
                    'slug' => 'mobile-users-view',
                    'description' => 'View',
                ],
                [
                    'slug' => 'mobile-users-create',
                    'description' => 'Create',
                ],
                [
                    'slug' => 'mobile-users-edit',
                    'description' => 'Edit',
                ],
                [
                    'slug' => 'mobile-users-delete',
                    'description' => 'Delete',
                ],
            ],

            'Web Users' => [
                [
                    'slug' => 'site-users-view',
                    'description' => 'View',
                ],
                [
                    'slug' => 'site-users-create',
                    'description' => 'Create',
                ],
                /*[
                    'slug' => 'site-users-edit',
                    'description' => 'Edit',
                ],
                [
                    'slug' => 'site-users-delete',
                    'description' => 'Delete',
                ],*/
                [
                    'slug' => 'user-management-email-change',
                    'description' => 'Change Email',
                ],
                [
                    'slug' => 'user-management-name-change',
                    'description' => 'Change Name',
                ],
                [
                    'slug' => 'user-management-username-change',
                    'description' => 'Change Username',
                ],
            ],

            'Business Policies' => [
                [
                    'slug' => 'policies-view',
                    'description' => 'View',
                ],
                [
                    'slug' => 'policies-create',
                    'description' => 'Create',
                ],
                [
                    'slug' => 'policies-edit',
                    'description' => 'Edit',
                ],
                [
                    'slug' => 'policies-delete',
                    'description' => 'Delete',
                ],
            ],

            'SMTP Settings' => [
                [
                    'slug' => 'smtp-settings-view',
                    'description' => 'View',
                ],
                [
                    'slug' => 'smtp-settings-edit',
                    'description' => 'Save',
                ],
            ],


            'General' => [
                [
                    'slug' => 'site-settings-view',
                    'description' => 'View',
                ],
                [
                    'slug' => 'site-settings-edit',
                    'description' => 'Save',
                ],
            ],

            'Management Message' => [
                [
                    'slug' => 'management-message-view',
                    'description' => 'View',
                ],
                [
                    'slug' => 'management-message-edit',
                    'description' => 'Save',
                ],
            ],

            'Threads' => [
                [
                    'slug' => 'thread-view',
                    'description' => 'View',
                ],
            ],

            'Emergency Indicators' => [
                [
                    'slug' => 'emergency-indicators-edit',
                    'description' => 'Edit',
                ],

                [
                    'slug' => 'emergency-indicators-view',
                    'description' => 'View',
                ],
            ],

            'Awareness' => [

                [
                    'slug' => 'awareness-view',
                    'description' => 'View',
                ],

                [
                    'slug' => 'awareness-create',
                    'description' => 'Create',
                ],
                [
                    'slug' => 'awareness-edit',
                    'description' => 'Edit',
                ],
                [
                    'slug' => 'awareness-delete',
                    'description' => 'Delete',
                ],
            ],


            'Departments' => [

                [
                    'slug' => 'departments-view',
                    'description' => 'View',
                ],

                [
                    'slug' => 'departments-create',
                    'description' => 'Create',
                ],
                [
                    'slug' => 'departments-edit',
                    'description' => 'Edit',
                ],
                [
                    'slug' => 'departments-delete',
                    'description' => 'Delete',
                ],
            ],

            'Locations' => [

                [
                    'slug' => 'locations-view',
                    'description' => 'View',
                ],

                [
                    'slug' => 'locations-create',
                    'description' => 'Create',
                ],
                [
                    'slug' => 'locations-edit',
                    'description' => 'Edit',
                ],
                [
                    'slug' => 'locations-delete',
                    'description' => 'Delete',
                ],
            ],

            'Incident Types' => [
                [
                    'slug' => 'incident-type-create',
                    'description' => 'Create',
                ],
                [
                    'slug' => 'incident-type-edit',
                    'description' => 'Edit',
                ],
                [
                    'slug' => 'incident-type-delete',
                    'description' => 'Delete',
                ],

                [
                    'slug' => 'incident-type-view',
                    'description' => 'View',
                ],

            ],

            'Incident Severity' => [
                [
                    'slug' => 'incident-severity-create',
                    'description' => 'Create',
                ],
                [
                    'slug' => 'incident-severity-view',
                    'description' => 'View',
                ],
                [
                    'slug' => 'incident-severity-edit',
                    'description' => 'incident-severity-edit',
                ],
                [
                    'slug' => 'incident-severity-delete',
                    'description' => 'incident-severity-delete',
                ],

            ],

            'Reported Incident Emails' => [

                [
                    'slug' => 'reported-incidents-create',
                    'description' => 'Create',
                ],
                [
                    'slug' => 'reported-incidents-edit',
                    'description' => 'Edit',
                ],
                [
                    'slug' => 'reported-incidents-delete',
                    'description' => 'Delete',
                ],
                [
                    'slug' => 'reported-incidents-view',
                    'description' => 'View',
                ],
            ],

            'Reported Incident' => [
                [
                    'slug' => 'reported-incident-view',
                    'description' => 'View',
                ],
            ],

            'Emergency Contacts' => [

                [
                    'slug' => 'emergency-contacts-create',
                    'description' => 'Create',
                ],
                [
                    'slug' => 'emergency-contacts-edit',
                    'description' => 'Edit',
                ],
                [
                    'slug' => 'emergency-contacts-delete',
                    'description' => 'Delete',
                ],
                [
                    'slug' => 'emergency-contacts-view',
                    'description' => 'View',
                ],
            ],



            'Supplier Contacts' => [

                [
                    'slug' => 'supplier-contacts-create',
                    'description' => 'Create',
                ],
                [
                    'slug' => 'supplier-contacts-edit',
                    'description' => 'Edit',
                ],
                [
                    'slug' => 'supplier-contacts-delete',
                    'description' => 'Delete',
                ],
                [
                    'slug' => 'supplier-contacts-view',
                    'description' => 'View',
                ],
            ],



            'Roles' => [
                [
                    'slug' => 'roles-view',
                    'description' => 'View',
                ],
                [
                    'slug' => 'roles-create',
                    'description' => 'Create',
                ],
                [
                    'slug' => 'roles-edit',
                    'description' => 'Edit',
                ],
                [
                    'slug' => 'roles-delete',
                    'description' => 'Delete',
                ],
            ],

            /*'Reported Incident Emails' => [
                [
                    'slug' => 'reported-incident-view',
                    'description' => 'View',
                ],
                [
                    'slug' => 'reported-incident-create',
                    'description' => 'Create',
                ],
                [
                    'slug' => 'reported-incident-edit',
                    'description' => 'Edit',
                ],
                [
                    'slug' => 'reported-incident-delete',
                    'description' => 'Delete',
                ],
            ],*/

            'Permission' => [
                [
                    'slug' => 'permission-view',
                    'description' => 'View',
                ],
                [
                    'slug' => 'permission-update',
                    'description' => 'Update',
                ],
            ],

        ];
    }

    public static function check($slug, $user = '')
    {
        return self::normalCheck($slug, $user, FALSE);
    }

    public static function checkAndExit($slug, $user = '')
    {
        return self::normalCheck($slug, $user, TRUE);
    }

    private static function normalCheck($slug, $user, $exit)
    {
        if ($user == '') {
            $user = Auth::user();
        }

        if($user->userRoles->contains('id', 1)){
            return true;
        }

        //var_dump ($user);
        //echo  $user->id;

        $userRoles = UserRole::where('user_id', $user->id)->get();

        if ($userRoles == null) {
            return self::noAccess($exit);
        }
        //var_dump($userRoles[0]->role_id);
        foreach ($userRoles as $role) {

            $rolesPermission = RolePermission::where('role_id', $role->role_id)
                ->where('permission_slug', $slug)
                ->get();
            //var_dump($rolesPermission[0]);
            /*if(!$rolesPermission->contains('permission_slug', $slug)) {
                return self::noAccess($exit);
            }*/
            // echo count($rolesPermission);exit;
            if (count($rolesPermission) < 1) {
                return self::noAccess($exit);
            }
        }

        return true;
    }

    public static function noAccess($exit = false)
    {
        if ($exit) {
            echo view('admin.layouts.no-access');
            //echo "Access Denied";
            exit;
        }

        return false;
    }
}