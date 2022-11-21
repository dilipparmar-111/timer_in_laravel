<?php
$user = \Illuminate\Support\Facades\Auth::user();
return [
    'home' => 'Home',
    'dashboard' => 'Dashboard',
    'users' => 'Users',
    'sliders' => 'Sliders',
    'message' => 'Message',
    'notification' => 'Notification',
    'mark_all_as_read' => 'Mark all as Read',
    'view_all' => 'View All',

//    Header Bar
    'english' => 'English',
    'gujarati' => 'Gujarati',
    'cache_clear' => 'Cache Clear',
    'search' => 'Search Here',
    'hello_user' => 'Welcome'.'&nbsp;'.$user->name,
    'profile' => 'Profile',
    'settings' => 'Settings',
    'logout' => 'Logout',

// Sliders Table
    'of_details' => 'Details',
    'add' => 'Add',
    'id' => 'ID',
    'name' => 'Name',
    'desc' => 'Description',
    'image' => 'Image',
    'status' => 'Status',
    'select_time_for_deactivate' => 'Select Time For Deactivate',
    'deactivate' => 'Deactivate',
    'edit' => 'Edit',
    'show' => 'Show',
    'delete' => 'Delete',
    'update' => 'Update',
    'cancel' => 'Cancel',
    'save' => 'Save',
    'enter_name' => 'Enter Name',
    'enter_address' => 'Enter Address',
    'enter_name_of_city' => 'Enter City',
    'enter_name_of_state' => 'Enter State',
    'enter_email' => 'Enter Email',
    'enter_mobile_no' => 'Enter Mobile No',

    // Users Table
    'of_edit' => 'Edit',
    'of_create' => 'Create',
    'address' => 'Address',
    'city' => 'City',
    'email' => 'Email',
    'state' => 'State',
    'mobile' => 'Mobile No',

    //    Slider Message
    'slider_succ' => 'Slider has been Created Successfully !',
    'slider_up' => 'Slider has been Updated Successfully!',
    'slider_del' => 'Slider has been Deleted Successfully!',
    'slider_exit' => 'Slider Already Exists !',
    'slider_not_found' => 'Record Not Found!',
    'slider_status' => 'User has been Created Successfully!',

    //    Users Message
    'users_succ' => 'User has been Created Successfully!',
    'users_up' => 'User has been Updated Successfully!',
    'users_del' => 'User has been Deleted Successfully!',
    'users_exit' => 'User Already Exists!',
    'users_not_found' => 'User Not Found !',


    //    Languages Message
    'lang' => 'Language has been Changed Sucessfully .',

];
