<?php

class Cn extends Controller{
    public function index(){
        $title = '在线交易经纪人 | Dutch Prime Securities';
        $desc = 'Dutch prime securities 由一家私募股权集团掌舵。我们期待在其他东南亚地区扩展我们的业务。';
        $patch = 'cn/';
        $lang = 'cn';

        $data = array($title, $desc, $patch, $lang);
        $this->view('cn/index', $data);
        $this->view('templates/cn/sidebar');
        $this->view('templates/cn/bot-nav');
        $this->view('templates/cn/footer');
    }
    
    public function about(){
        $title = '关于 | Dutch Prime Securities';
        $desc = 'Dutch prime Securities broker is one of the best forex broker in the world with strong regulation.';
        $patch = 'cn/about';
        $lang = 'cn';
        $robot = 'index, follow';
        $keyword = "关于荷兰主要证券，荷兰主要证券简介";

        $data = array($title, $desc, $patch, $lang, $robot, $keyword);
        $this->view('templates/cn/header', $data);
        $this->view('templates/cn/top-nav');
        $this->view('cn/about');
        $this->view('templates/cn/sidebar');
        $this->view('templates/cn/bot-nav');
        $this->view('templates/cn/footer');
    }
    
    public function contact(){
        $title = '接触 | Dutch Prime Securities';
        $desc = 'Dutch prime Securities broker is one of the best forex broker in the world with strong regulation.';
        $patch = 'cn/about';
        $lang = 'cn';
        $robot = 'index, follow';
        $keyword = "Dutch Prime Securities 的联络方式";

        $data = array($title, $desc, $patch, $lang, $robot, $keyword);
        $this->view('templates/cn/header', $data);
        $this->view('templates/cn/top-nav');
        $this->view('cn/contact');
        $this->view('templates/cn/sidebar');
        $this->view('templates/cn/bot-nav');
        $this->view('templates/cn/footer');
    }
    
    public function platform(){
        $title = '平台 | Dutch Prime Securities';
        $desc = 'Dutch prime Securities broker is one of the best forex broker in the world with strong regulation.';
        $patch = 'cn/platform';
        $lang = 'cn';
        $robot = 'index, follow';
        $keyword = "交易平台，mt4 荷兰主要证券，荷兰主要证券元交易者 4";

        $data = array($title, $desc, $patch, $lang, $robot, $keyword);
        $this->view('templates/cn/header', $data);
        $this->view('templates/cn/top-nav');
        $this->view('cn/platform');
        $this->view('templates/cn/sidebar');
        $this->view('templates/cn/bot-nav');
        $this->view('templates/cn/footer');
    }
    
    public function Deposit_bonus(){
        $title = '50% 入金赠金 | Dutch Prime Securities';
        $desc = 'Dutch prime Securities broker is one of the best forex broker in the world with strong regulation.';
        $patch = 'cn/deposit_bonus';
        $lang = 'cn';
        $robot = 'index, follow';
        $keyword = "荷兰优质证券促销, 荷兰优质证券 50% 存款红利, 外汇促销, 存款红利";

        $data = array($title, $desc, $patch, $lang, $robot, $keyword);
        $this->view('templates/cn/header', $data);
        $this->view('templates/cn/top-nav');
        $this->view('cn/deposit_bonus');
        $this->view('templates/cn/sidebar');
        $this->view('templates/cn/bot-nav');
        $this->view('templates/cn/footer');   
    }

    public function insert(){
        session_start(); 
        if(isset($_POST['submit']) && $_POST['accNumber'] != "" && $_POST['email'] != "" && $_POST['deposit'] != ""){
            $this->model('Insert_data');
        }else{
            header("location:".BASE."cn/deposit_bonus");
        }
    }
}

?>