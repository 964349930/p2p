<?php
/**

 * 首页

 * @version 

 */

    class IndexAction extends AdminAction{


    //框架页

    public function index() {

        C('SHOW_PAGE_TRACE', false);

        $this->assign('channel', $this->_getChannel());

        $this->assign('menu',    $this->_getMenu());

        $this->display();

    }

    /**

     * 首页

     */
    public function main() {

        echo '<h2>这里是后台首页</h2>';

        $this->display();

    }

    /**

     * 头部菜单

     */

    protected function _getChannel() {

        return array(

            'index'   => '首页',

        );

    }
     /**

     * 左侧菜单

     */

    protected function _getMenu() {

        $menu = array();

        //注意顺序！！



        // 后台管理首页

        $menu['index'] = array(

            '网站信息' => array(

                '修改密码' => U('Admin/Setting/pwd'),

            ),

            '订单管理模块' => array(
                '订单管理模块' => U('Admin/Article/ls'),
            ),
            '产品管理模块' => array(
                '产品管理模块' => U('Admin/Tpl/ls'),
            ),
            '新闻管理模块' => array(
                '新闻管理模块' => U('Admin/New/ls'),
                '新闻管理模块' => U('Admin/New/info'),
            ),
            '用户管理模块' => array(
                '分组管理'=>U('Admin/Users/ls'),
                )
        );

        return $menu;

    }

}