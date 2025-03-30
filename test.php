<?php


register_menu("Test", true, "system_info", 'SETTINGS', '');




function test()
{


    //Define the ui the engine handles IT


    global $ui;
    
    //Local Admin function
    _admin();

    //Assign title
    $ui->assign('_title', 'System Information');
    //meh
    $ui->assign('_system_menu', 'settings');
    $admin = Admin::_info();
    //meh
    $ui->assign('_admin', $admin);

    $ui->display('test.tpl');
}