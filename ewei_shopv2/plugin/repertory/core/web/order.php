<?php
if (!defined('IN_IA')) {
	exit('Access Denied');
}

class Order_EweiShopV2Page extends WebPage
{
	public function main()
	{
		global $_W;
		global $_GPC;
		
		include $this->template();
	}
}

?>
