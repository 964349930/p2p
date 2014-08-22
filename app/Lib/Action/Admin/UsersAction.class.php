<?php
/**
 * 模版控制器
 */
class UsersAction extends AdminAction
{
    /**
     * ls
     */
    public function ls()
    {
        $tplList = D('User_gruop')->select();
        $this->assign('list', $tplList);
        $this->display();
    }

    /**
     * info
     */
    public function info()
    {
        $tplObj = D('User_gruop');
        if(empty($_POST)){
            $id = $this->_get('id');
            if(!empty($id)){
                $info = $tplObj->where('id='.$id)->find();
                $this->assign('info', $info);
            }
            $this->display();
            exit;
        }
        $data = $this->_post();
        $data['time_modify'] = time();
        $id = $this->_post('id');
        if(empty($id)){
            $data['time_add'] = time();
            $tplObj->add($data);
        }else{
            $tplObj->save($data);
        }
        $this->success('操作成功');
    }

    public function del(){
        $delIds = array();
        $postIds = $this-> _post('id');
        if(!empty($postIds)){
            $delIds = $postIds;
        }
        $getId = intval($this -> _get('id'));
        if (!empty($getId)) {
            $delIds[] = $getId;
        }
        if (empty($delIds)) {
            $this ->error('请确定你要删除的数据');
        }
        $arrMap['id'] = array('in',$delIds);
        if (D('User_gruop') -> where($arrMap) ->delete()) {
            $this ->success('删除成功');
        }else{
            //print_r(D('Tpl')->getLastSQL());exit;
            $this ->error('删除失败');
        }
    }
}
