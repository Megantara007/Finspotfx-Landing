<?php

class En extends Controller{
    public function index(){
        $title = 'Finspotfx&#174; | Modern Autopilot Provider ';
        $desc = 'We are here to serve you better then the other.';
        $patch = 'en/';
        $lang = 'en';
        $robot = 'index, follow';
        $keyword = "About davidstars";

        $data = array($title, $desc, $patch, $lang, $robot, $keyword);
        $this->view('templates/en/header', $data);
        $this->view('templates/en/sidebar');
        $this->view('en/index');
        $this->view('templates/en/footer');
    }

    public function About(){
        $title = 'Davidstars | About us';
        $desc = 'About us...';
        $patch = 'en/about';
        $lang = 'en';
        $robot = 'index, follow';
        $keyword = "About davidstars";

        $data = array($title, $desc, $patch, $lang, $robot, $keyword);
        $this->view('templates/en/header', $data);
        $this->view('en/about');
        $this->view('templates/en/footer');
    }

    public function Product(){
        $title = 'Davidstars | Our Product You Might Be Interest';
        $desc = 'Investment Product';
        $patch = 'en/product';
        $lang = 'en';
        $robot = 'index, follow';
        $keyword = "davidstars investment product";

        $data = array($title, $desc, $patch, $lang, $robot, $keyword);
        $this->view('templates/en/header', $data);
        $this->view('en/product');
        $this->view('templates/en/footer');
    }

    public function Investgate(){
        $title = 'Davidstars | Investor Portal';
        $desc = 'We Are Davidstars';
        $patch = 'en/investgate';
        $lang = 'en';
        $robot = 'index, follow';
        $keyword = "Davidstars login page, Davidstars investment gate, Davidstars portal";

        $data = array($title, $desc, $patch, $lang, $robot, $keyword);
        $this->view('templates/en/header', $data);
        $this->view('en/investorgate');
        $this->view('templates/en/footer');
    }

    // public function Contact(){
    //     $title = 'Contact | Dutch Prime Securities';
    //     $desc = 'Dutch prime Securities broker is one of the best forex broker in the world with strong regulation.';
    //     $patch = 'en/contact';
    //     $lang = 'en';
    //     $robot = 'index, follow';
    //     $keyword = "dutch prime securities contact";

    //     $data = array($title, $desc, $patch, $lang, $robot, $keyword);
    //     $this->view('templates/en/header', $data);
    //     $this->view('templates/en/top_nav');
    //     $this->view('en/contact');
    //     $this->view('templates/en/sidebar');
    //     $this->view('templates/en/bot_nav');
    //     $this->view('templates/en/footer');
    // }

    // public function Platform(){
    //     $title = 'Platform | Dutch Prime Securities';
    //     $desc = 'Dutch prime Securities broker is one of the best forex broker in the world with strong regulation.';
    //     $patch = 'en/platform';
    //     $lang = 'en';
    //     $robot = 'index, follow';
    //     $keyword = "trading platform, mt4 dutch prime securities, dutch prime securities metatrader 4";

    //     $data = array($title, $desc, $patch, $lang, $robot, $keyword);
    //     $this->view('templates/en/header', $data);
    //     $this->view('templates/en/top_nav');
    //     $this->view('en/platform');
    //     $this->view('templates/en/sidebar');
    //     $this->view('templates/en/bot_nav');
    //     $this->view('templates/en/footer');
    // }

    // public function Deposit_bonus(){
    //     $title = '50% Deposit Bonus | Dutch Prime Securities';
    //     $desc = 'Dutch prime Securities broker is one of the best forex broker in the world with strong regulation.';
    //     $patch = 'en/deposit_bonus';
    //     $lang = 'en';
    //     $robot = 'index, follow';
    //     $keyword = "dutch prime securities promotion, dutch prime securities 50% deposit bonus, forex promotion, deposit bonus";

    //     $data = array($title, $desc, $patch, $lang, $robot, $keyword);
    //     $this->view('templates/en/header', $data);
    //     $this->view('templates/en/top_nav');
    //     $this->view('en/deposit_bonus');
    //     $this->view('templates/en/sidebar');
    //     $this->view('templates/en/bot_nav');
    //     $this->view('templates/en/footer');
    // }

    // //Sensitiv area [ Have database connection ]
    // public function insert(){
    //     if(isset($_POST['submit']) && $_POST['accNumber'] != "" && $_POST['email'] != "" && $_POST['deposit'] != ""){
    //         $this->model('Insert_data');
    //     }else{
    //         header("location:".BASE."en/deposit_bonus");
    //     }
    // }
    
}

?>