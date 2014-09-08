<?php

class posts extends Controller{

	function index(){
		$this->posts = get_all("SELECT * FROM post");
	}

    function index_ajax(){
		echo "\$_POST:<br>";
        var_dump($_POST);
    }

	function index_post(){
		echo "\$_POST:<br>";
		var_dump($_POST);
	}

    function view(){
        $post_id = $this->params[0];
        $this->post = get_first("select * from post natural join user where post_id='$post_id'");
    }
}