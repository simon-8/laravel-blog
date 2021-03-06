<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'pid' => 0,
                'name' => '菜单管理',
                'route' => 'admin.menu.index',
                'link' => '',
                'icon' => 'fa fa-list',
                'listorder' => 97,
                'items' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'pid' => 0,
                'name' => '管理员管理',
                'route' => 'admin.manager.index',
                'link' => '',
                'icon' => 'fa fa-users',
                'listorder' => 96,
                'items' => 3,
            ),
            2 => 
            array (
                'id' => 5,
                'pid' => 6,
                'name' => '数据管理',
                'route' => 'admin.database.index',
                'link' => '',
                'icon' => 'fa fa-database',
                'listorder' => 0,
                'items' => 0,
            ),
            3 => 
            array (
                'id' => 6,
                'pid' => 0,
                'name' => '系统设置',
                'route' => 'admin.setting.index',
                'link' => '',
                'icon' => 'fa fa-cog',
                'listorder' => 0,
                'items' => 7,
            ),
            4 => 
            array (
                'id' => 8,
                'pid' => 0,
                'name' => '后台主页',
                'route' => 'admin.index.main',
                'link' => '',
                'icon' => 'fa fa-desktop',
                'listorder' => 98,
                'items' => 0,
            ),
            5 => 
            array (
                'id' => 9,
                'pid' => 6,
                'name' => '广告位管理',
                'route' => 'admin.ad-place.index',
                'link' => '',
                'icon' => '',
                'listorder' => 0,
                'items' => 0,
            ),
            6 => 
            array (
                'id' => 12,
                'pid' => 6,
                'name' => '基本设置',
                'route' => 'admin.setting.index',
                'link' => '',
                'icon' => '',
                'listorder' => 99,
                'items' => 0,
            ),
            7 => 
            array (
                'id' => 16,
                'pid' => 6,
                'name' => '系统日志',
                'route' => 'log-viewer::dashboard',
                'link' => '',
                'icon' => '',
                'listorder' => 0,
                'items' => 0,
            ),
            8 => 
            array (
                'id' => 17,
                'pid' => 0,
                'name' => '单页管理',
                'route' => 'admin.single-page.*',
                'link' => '',
                'icon' => 'fa fa-newspaper-o',
                'listorder' => 93,
                'items' => 1,
            ),
            9 => 
            array (
                'id' => 18,
                'pid' => 2,
                'name' => '权限管理',
                'route' => 'admin.role-access.index',
                'link' => '',
                'icon' => '',
                'listorder' => 0,
                'items' => 0,
            ),
            10 => 
            array (
                'id' => 19,
                'pid' => 2,
                'name' => '用户列表',
                'route' => 'admin.manager.index',
                'link' => '',
                'icon' => '',
                'listorder' => 3,
                'items' => 0,
            ),
            11 => 
            array (
                'id' => 20,
                'pid' => 2,
                'name' => '角色管理',
                'route' => 'admin.role.index',
                'link' => '',
                'icon' => '',
                'listorder' => 0,
                'items' => 0,
            ),
            12 => 
            array (
                'id' => 21,
                'pid' => 0,
                'name' => '用户管理',
                'route' => 'admin.user.*',
                'link' => '',
                'icon' => 'fa fa-users',
                'listorder' => 0,
                'items' => 0,
            ),
            13 => 
            array (
                'id' => 22,
                'pid' => 21,
                'name' => '用户列表',
                'route' => 'admin.user.index',
                'link' => '',
                'icon' => '',
                'listorder' => 0,
                'items' => 0,
            ),
            14 => 
            array (
                'id' => 23,
                'pid' => 17,
                'name' => '单页列表',
                'route' => 'admin.single-page.index',
                'link' => '',
                'icon' => '',
                'listorder' => 0,
                'items' => 0,
            ),
            15 => 
            array (
                'id' => 24,
                'pid' => 0,
                'name' => '合同管理',
                'route' => 'admin.contract.*',
                'link' => '',
                'icon' => 'fa fa-folder',
                'listorder' => 0,
                'items' => 3,
            ),
            16 => 
            array (
                'id' => 25,
                'pid' => 24,
                'name' => '合同列表',
                'route' => 'admin.contract.index',
                'link' => '',
                'icon' => '',
                'listorder' => 0,
                'items' => 0,
            ),
            17 => 
            array (
                'id' => 29,
                'pid' => 6,
                'name' => '队列管理',
                'route' => '',
                'link' => '/horizon',
                'icon' => '',
                'listorder' => 0,
                'items' => 0,
            ),
            18 => 
            array (
                'id' => 30,
                'pid' => 24,
                'name' => '合同类型',
                'route' => 'admin.contract-category.index',
                'link' => '',
                'icon' => '',
                'listorder' => 0,
                'items' => 0,
            ),
            19 => 
            array (
                'id' => 31,
                'pid' => 24,
                'name' => '快递费用管理',
                'route' => 'admin.express-fee.index',
                'link' => '',
                'icon' => '',
                'listorder' => 0,
                'items' => 0,
            ),
            20 => 
            array (
                'id' => 32,
                'pid' => 0,
                'name' => '运营信息',
                'route' => 'admin.operation.*',
                'link' => '',
                'icon' => 'fa fa-pie-chart',
                'listorder' => 0,
                'items' => 2,
            ),
            21 => 
            array (
                'id' => 33,
                'pid' => 32,
                'name' => '订单管理',
                'route' => 'admin.operation.order',
                'link' => '',
                'icon' => '',
                'listorder' => 0,
                'items' => 0,
            ),
            22 => 
            array (
                'id' => 34,
                'pid' => 32,
                'name' => '律师见证',
                'route' => 'admin.order-lawyer-confirm.index',
                'link' => '',
                'icon' => '',
                'listorder' => 0,
                'items' => 0,
            ),
        ));
        
        
    }
}