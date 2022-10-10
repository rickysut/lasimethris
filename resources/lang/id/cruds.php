<?php

return [
    'landing' =>[
        'title'          => 'Beranda',
        'title_singular' => 'Beranda',
        'is_parent'      => '1', 
        'is_hidden'      => '0',
        'can_view'       => '0',
        'can_edit'       => '0', 
        'can_delete'     => '0',  
        'can_access'     => '1', 
        'can_create'     => '0',   
    ], 
    'dashboardAdmin' =>[
        'title'          => 'Dashboard Admin',
        'title_singular' => 'Dashboard Admin',
        'is_parent'      => '1', 
        'is_hidden'      => '0',
        'can_view'       => '0',
        'can_edit'       => '0', 
        'can_delete'     => '0',  
        'can_access'     => '1', 
        'can_create'     => '0',   
    ], 
    'dashboardVerifikator' =>[
        'title'          => 'Dashboard Verifikator',
        'title_singular' => 'Dashboard Verifikator',
        'is_parent'      => '1', 
        'is_hidden'      => '0',
        'can_view'       => '0',
        'can_edit'       => '0', 
        'can_delete'     => '0',  
        'can_access'     => '1', 
        'can_create'     => '0',   
    ], 
    'dashboardUser' =>[
        'title'          => 'Dashboard User',
        'title_singular' => 'Dashboard User',
        'is_parent'      => '1', 
        'is_hidden'      => '0',
        'can_view'       => '0',
        'can_edit'       => '0', 
        'can_delete'     => '0',  
        'can_access'     => '1', 
        'can_create'     => '0',   
    ],  
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
        'is_parent'      => '1', 
        'is_hidden'      => '0',
        'can_view'       => '0',
        'can_edit'       => '0', 
        'can_delete'     => '0',  
        'can_access'     => '1', 
        'can_create'     => '0',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'is_parent'      => '0',
        'is_hidden'      => '0',
        'can_view'       => '1',
        'can_edit'       => '1', 
        'can_delete'     => '1',  
        'can_access'     => '1', 
        'can_create'     => '1',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'perm_type'         => 'Type',
            'perm_type_helper'  => ' ',
            'grp_title'         => 'Group Title',
            'grp_title_helper'  => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'is_parent'      => '0',
        'is_hidden'      => '0',
        'can_view'       => '1',
        'can_edit'       => '1', 
        'can_delete'     => '1',  
        'can_access'     => '1',
        'can_create'     => '1', 
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'is_parent'      => '0',
        'is_hidden'      => '0',
        'can_view'       => '1',
        'can_edit'       => '1', 
        'can_delete'     => '1',  
        'can_access'     => '1', 
        'can_create'     => '1',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'roleaccess'               => 'App\'s Role',
            'roleaccess_helper'        => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'username'                 => 'Username',
            'username_helper'          => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'is_parent'      => '0',
        'is_hidden'      => '0',
        'can_view'       => '1',
        'can_edit'       => '0', 
        'can_delete'     => '0',  
        'can_access'     => '1', 
        'can_create'     => '0',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'masterData' => [
        'title'          => 'Master Data',
        'title_singular' => 'Master Data',
        'is_parent'      => '1',
        'is_hidden'      => '0',
        'can_view'       => '0',
        'can_edit'       => '0', 
        'can_delete'     => '0',  
        'can_access'     => '1', 
        'can_create'     => '0',
    ],
    'partner' => [
        'title'          => 'Partner',
        'title_singular' => 'Partner',
        'is_parent'      => '0', 
        'is_hidden'      => '0',
        'can_view'       => '1',
        'can_edit'       => '1', 
        'can_delete'     => '1',  
        'can_access'     => '1',  
        'can_create'     => '1', 
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'partner_type'           => 'Partner Type',
            'partner_type_helper'    => 'vendor, donatur, badan',
            'partner_code'           => 'Partner Code',
            'partner_code_helper'    => 'Partner Code',
            'partner_name'           => 'Partner Name',
            'partner_name_helper'    => ' ',
            'partner_address'        => 'Partner Address',
            'partner_address_helper' => 'Address',
            'partner_email'          => 'Partner Email',
            'partner_email_helper'   => ' ',
            'partner_phone'          => 'Partner Phone',
            'partner_phone_helper'   => ' ',
            'partner_pic'            => 'Partner PIC',
            'partner_pic_helper'     => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'created_by'             => 'Created By',
            'created_by_helper'      => ' ',
        ],
    ],
    'coa' => [
        'title'          => 'COA',
        'title_singular' => 'COA',
        'is_parent'      => '0', 
        'is_hidden'      => '0',
        'can_view'       => '1',
        'can_edit'       => '1', 
        'can_delete'     => '1',  
        'can_access'     => '1',  
        'can_create'     => '1', 
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'coa_code'          => 'Coa Code',
            'coa_code_helper'   => ' ',
            'coa_name'          => 'Coa Name',
            'coa_name_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
            'coa_parent'        => 'Coa Parent',
            'coa_parent_helper' => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
        'is_parent'      => '1', 
        'is_hidden'      => '0',
        'can_view'       => '1',
        'can_edit'       => '1', 
        'can_delete'     => '1',  
        'can_access'     => '1',  
        'can_create'     => '1', 
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'nm_org'            => 'Nama Organisasi',
            'nm_org_helper'     => ' ',
            'alamat'            => 'Alamat',
            'alamat_helper'     => ' ',
            'telepon'           => 'Telepon',
            'telepon_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
        ],
    ],
    'sekolah' =>[
        'title'          => 'School Data',
        'title_singular' => 'school Data',
        'is_parent'      => '0', 
        'is_hidden'      => '0',
        'can_view'       => '1',
        'can_edit'       => '1', 
        'can_delete'     => '0',  
        'can_access'     => '1',  
        'can_create'     => '0', 
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'school_name'           => 'School Name',
            'school_name_helper'    => ' ',
            'school_NPSN '          => 'NPSN',
            'school_NPSN_helper'    => ' ',
            'school_grade'          => 'Grade',
            'school_grade_helper'   => ' ',
            'school_status'         => 'Status',
            'school_status_helper'  => ' ',
            'school_address'        => 'Address',
            'school_address_helper' => ' ',
            'school_city'           => 'City',
            'school_city_helper'    => ' ',
            'school_kab'            => 'Districs',
            'school_kab_helper'     => ' ',
            'school_kel'            => 'Ward',
            'school_kel_helper'     => ' ',
            'school_prop'           => 'Province',
            'school_prop_helper'    => ' ',
            'school_phone'          => 'Phone',
            'school_phone_helper'   => ' ',
            'school_pic'            => 'PIC',
            'school_pic_helper'     => ' ',
            'school_admin_wa'       => 'No. Whatsapp',
            'school_admin_wa_helper'=> ' ',
            'school_logo'           => 'Logo',
            'school_logo_helper'    => ' ',
            'school_email'          => 'School Email',
            'school_email_helper'   => ' ',
            'school_token'          => 'Token',
            'school_token_helper'   => ' ',
            'created_at'            => 'Created At',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated At',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted At',
            'deleted_at_helper'     => ' ',
            'created_by'            => 'Created By',
            'created_by_helper'     => ' ',
            
        ],
    ],
    'profile' =>[
        'title'          => 'Profile',
        'title_singular' => 'Profile',
        'is_parent'      => '1', 
        'is_hidden'      => '0',
        'can_view'       => '0',
        'can_edit'       => '1', 
        'can_delete'     => '0',  
        'can_access'     => '0',  
        'can_create'     => '0', 
    ],
];
