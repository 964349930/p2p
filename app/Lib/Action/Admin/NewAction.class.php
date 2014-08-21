<?php

class NewAction extends AdminAction
{
	public function ls(){
		 $pid = $this->_get('pid');
        $pid = ($pid) ? $pid : '0';
        $list = D('Article')->where('pid='.$pid)->select();
        /** 复制测试 **/
        /*
        foreach($list as $k=>$v){
            if(!empty($v['cover'])){
                preg_match('/[0-9a-z]{13}\.[jpgpngJPG]{3}/', $v['cover'], $result);
                //copy('./data/attach/'.$v['cover'], './test/'.$result['0']);
                print_r($result);exit;
            }
        }*/
        $this->assign('list', $list);
        $this->assign('pid', $pid);
        $this->display();
	}
	public function info(){
		 $obj = D('New');
        if(empty($_POST)){
            $id = $this->_get('id');
            if(!empty($id)){
                $info = $obj->where('id='.$id)->find();
                $pid = $info['pid'];
                $this->assign('info', $info);
            }else{
                $pid = $this->_get('pid');
            }
            $this->assign('newList', $this->get_tpl_list());
            $this->assign('pid', $pid);
            $this->display();
            exit;
        }
        $data = $this->_post();
        if(!empty($_FILES['pic']['name'])){
            $picList = uploadPic();
            if($picList['code'] != 'error'){
                $data['cover'] = $picList['pic']['savename'];
            }
        }
        $data['time_modify'] = time();
        if(empty($data['id'])){
            $obj->add($data);
            $data['time_add'] = time();
        }else{
            $obj->save($data);
        }
        $this->success('操作成功');
	}
	public function del(){
		$delIds = array();
        $postIds = $this->_post('id');
        if (!empty($postIds)) {
            $delIds = $postIds;
        }
        $getId = intval($this->_get('id'));
        if (!empty($getId)) {
            $delIds[] = $getId;
        }
        if (empty($delIds)) {
            $this->error('请选择您要删除的数据');
        }
		$arrMap['id'] = array('in', $delIds);
		if(D('')->where($arrMap)->delete()){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
	}
}