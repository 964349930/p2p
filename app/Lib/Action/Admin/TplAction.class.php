<?php
/**
 * 模版控制器
 */
class TplAction extends AdminAction
{

    /**
     * admin
     */
    public function admin()
    {
        $tplList = D('News') ->select();
        $this->assign('list',$tplList);
        $this->display();
    }
    /**
     * ls
     */
    public function ls()
    {
        $tplList = D('Product')->select();
        $this->assign('list', $tplList);
        $this->display();
    }

    /**
     * info
     */
    public function info()
    {
        $tplObj = D('Product');
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
        $id = $this->_post('id');
        if(empty($id)){
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
        if (D('Tpl') -> where($arrMap) ->delete()) {
            $this ->success('删除成功');
        }else{
            //print_r(D('Tpl')->getLastSQL());exit;
            $this ->error('删除失败');
        }
    }
}
