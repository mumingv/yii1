<?php

/**
 * 前台控制器
 */
class IndexController extends Controller {
	/**
	 * 默认方法
	 * 访问index控制器的index方法：
	 * http://localhost/index.php?r=index/index
	 * http://localhost/index.php?r=index
	 */
	public function actionIndex() {
		echo "www.baidu.com";
	}
}
