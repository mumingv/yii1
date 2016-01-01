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
		/**
		 * 1. render方法会载入默认布局
		 * 默认布局在components/Controller.php中进行设置
		 * 默认值为：$layout='//layouts/column1'
		 * 2. 这里的参数'index'，
		 * 对应的是views/index/index.php文件而不是index目录
		 * 注：index目录对应控制器名称
		 */
		$this->render('index');
		/**
		 * renderPartial方法不会载入默认布局，也不会载入框架自带的jQuery		 
		 */
		// $this->renderPartial('index');	
	}

	public function actionAdd() {
		$this->render('add');
	}
}
