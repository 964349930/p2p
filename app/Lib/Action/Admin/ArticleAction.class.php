<?php
/**
 * 模版控制器
 */
class ArticleAction extends AdminAction
{
    /**
     * ls
     */
    public function ls()
    {
        $articleList = D('Article')->select();
        $this->assign('list', $articleList);
        $this->display();
    }

    /**
     * info
     */
    public function info()
    {
        $orderObj = D('Article');
        if(empty($_POST)){
            $id = $this->_get('id');
            if(!empty($id)){
                $info = $orderObj->where('id='.$id)->find();
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
            $orderObj->add($data);
        }else{
            $orderObj->save($data);
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
        if (D('Article') -> where($arrMap) ->delete()) {
            $this ->success('删除成功');
        }else{
            //print_r(D('Tpl')->getLastSQL());exit;
            $this ->error('删除失败');
        }
    }
}
