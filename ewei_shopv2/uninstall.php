<?php
pdo_query("DROP TABLE IF EXISTS `ims_ewei_message_mass_sign`;
DROP TABLE IF EXISTS `ims_ewei_message_mass_task`;
DROP TABLE IF EXISTS `ims_ewei_message_mass_template`;
DROP TABLE IF EXISTS `ims_ewei_shop_abonus_bill`;
DROP TABLE IF EXISTS `ims_ewei_shop_abonus_billo`;
DROP TABLE IF EXISTS `ims_ewei_shop_abonus_billp`;
DROP TABLE IF EXISTS `ims_ewei_shop_abonus_level`;
DROP TABLE IF EXISTS `ims_ewei_shop_adv`;
DROP TABLE IF EXISTS `ims_ewei_shop_area_config`;
DROP TABLE IF EXISTS `ims_ewei_shop_article`;
DROP TABLE IF EXISTS `ims_ewei_shop_article_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_article_log`;
DROP TABLE IF EXISTS `ims_ewei_shop_article_report`;
DROP TABLE IF EXISTS `ims_ewei_shop_article_share`;
DROP TABLE IF EXISTS `ims_ewei_shop_article_sys`;
DROP TABLE IF EXISTS `ims_ewei_shop_author_bill`;
DROP TABLE IF EXISTS `ims_ewei_shop_author_billo`;
DROP TABLE IF EXISTS `ims_ewei_shop_author_billp`;
DROP TABLE IF EXISTS `ims_ewei_shop_author_level`;
DROP TABLE IF EXISTS `ims_ewei_shop_author_team`;
DROP TABLE IF EXISTS `ims_ewei_shop_author_team_pay`;
DROP TABLE IF EXISTS `ims_ewei_shop_banner`;
DROP TABLE IF EXISTS `ims_ewei_shop_bargain_account`;
DROP TABLE IF EXISTS `ims_ewei_shop_bargain_actor`;
DROP TABLE IF EXISTS `ims_ewei_shop_bargain_goods`;
DROP TABLE IF EXISTS `ims_ewei_shop_bargain_record`;
DROP TABLE IF EXISTS `ims_ewei_shop_carrier`;
DROP TABLE IF EXISTS `ims_ewei_shop_cashier_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_cashier_clearing`;
DROP TABLE IF EXISTS `ims_ewei_shop_cashier_goods`;
DROP TABLE IF EXISTS `ims_ewei_shop_cashier_goods_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_cashier_operator`;
DROP TABLE IF EXISTS `ims_ewei_shop_cashier_order`;
DROP TABLE IF EXISTS `ims_ewei_shop_cashier_pay_log`;
DROP TABLE IF EXISTS `ims_ewei_shop_cashier_pay_log_goods`;
DROP TABLE IF EXISTS `ims_ewei_shop_cashier_qrcode`;
DROP TABLE IF EXISTS `ims_ewei_shop_cashier_user`;
DROP TABLE IF EXISTS `ims_ewei_shop_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_commission_apply`;
DROP TABLE IF EXISTS `ims_ewei_shop_commission_bank`;
DROP TABLE IF EXISTS `ims_ewei_shop_commission_clickcount`;
DROP TABLE IF EXISTS `ims_ewei_shop_commission_level`;
DROP TABLE IF EXISTS `ims_ewei_shop_commission_log`;
DROP TABLE IF EXISTS `ims_ewei_shop_commission_rank`;
DROP TABLE IF EXISTS `ims_ewei_shop_commission_repurchase`;
DROP TABLE IF EXISTS `ims_ewei_shop_commission_shop`;
DROP TABLE IF EXISTS `ims_ewei_shop_coupon`;
DROP TABLE IF EXISTS `ims_ewei_shop_coupon_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_coupon_data`;
DROP TABLE IF EXISTS `ims_ewei_shop_coupon_goodsendtask`;
DROP TABLE IF EXISTS `ims_ewei_shop_coupon_guess`;
DROP TABLE IF EXISTS `ims_ewei_shop_coupon_log`;
DROP TABLE IF EXISTS `ims_ewei_shop_coupon_sendshow`;
DROP TABLE IF EXISTS `ims_ewei_shop_coupon_sendtasks`;
DROP TABLE IF EXISTS `ims_ewei_shop_coupon_taskdata`;
DROP TABLE IF EXISTS `ims_ewei_shop_creditshop_adv`;
DROP TABLE IF EXISTS `ims_ewei_shop_creditshop_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_creditshop_comment`;
DROP TABLE IF EXISTS `ims_ewei_shop_creditshop_goods`;
DROP TABLE IF EXISTS `ims_ewei_shop_creditshop_log`;
DROP TABLE IF EXISTS `ims_ewei_shop_creditshop_option`;
DROP TABLE IF EXISTS `ims_ewei_shop_creditshop_spec`;
DROP TABLE IF EXISTS `ims_ewei_shop_creditshop_spec_item`;
DROP TABLE IF EXISTS `ims_ewei_shop_creditshop_verify`;
DROP TABLE IF EXISTS `ims_ewei_shop_customer`;
DROP TABLE IF EXISTS `ims_ewei_shop_customer_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_customer_guestbook`;
DROP TABLE IF EXISTS `ims_ewei_shop_customer_robot`;
DROP TABLE IF EXISTS `ims_ewei_shop_designer`;
DROP TABLE IF EXISTS `ims_ewei_shop_designer_menu`;
DROP TABLE IF EXISTS `ims_ewei_shop_dispatch`;
DROP TABLE IF EXISTS `ims_ewei_shop_diyform_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_diyform_data`;
DROP TABLE IF EXISTS `ims_ewei_shop_diyform_temp`;
DROP TABLE IF EXISTS `ims_ewei_shop_diyform_type`;
DROP TABLE IF EXISTS `ims_ewei_shop_diypage`;
DROP TABLE IF EXISTS `ims_ewei_shop_diypage_menu`;
DROP TABLE IF EXISTS `ims_ewei_shop_diypage_template`;
DROP TABLE IF EXISTS `ims_ewei_shop_diypage_template_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_exchange_cart`;
DROP TABLE IF EXISTS `ims_ewei_shop_exchange_code`;
DROP TABLE IF EXISTS `ims_ewei_shop_exchange_group`;
DROP TABLE IF EXISTS `ims_ewei_shop_exchange_query`;
DROP TABLE IF EXISTS `ims_ewei_shop_exchange_record`;
DROP TABLE IF EXISTS `ims_ewei_shop_exchange_setting`;
DROP TABLE IF EXISTS `ims_ewei_shop_exhelper_express`;
DROP TABLE IF EXISTS `ims_ewei_shop_exhelper_senduser`;
DROP TABLE IF EXISTS `ims_ewei_shop_exhelper_sys`;
DROP TABLE IF EXISTS `ims_ewei_shop_express`;
DROP TABLE IF EXISTS `ims_ewei_shop_express_cache`;
DROP TABLE IF EXISTS `ims_ewei_shop_feedback`;
DROP TABLE IF EXISTS `ims_ewei_shop_form`;
DROP TABLE IF EXISTS `ims_ewei_shop_form_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_funbar`;
DROP TABLE IF EXISTS `ims_ewei_shop_gift`;
DROP TABLE IF EXISTS `ims_ewei_shop_globonus_bill`;
DROP TABLE IF EXISTS `ims_ewei_shop_globonus_billo`;
DROP TABLE IF EXISTS `ims_ewei_shop_globonus_billp`;
DROP TABLE IF EXISTS `ims_ewei_shop_globonus_level`;
DROP TABLE IF EXISTS `ims_ewei_shop_goods`;
DROP TABLE IF EXISTS `ims_ewei_shop_goods_comment`;
DROP TABLE IF EXISTS `ims_ewei_shop_goods_group`;
DROP TABLE IF EXISTS `ims_ewei_shop_goods_label`;
DROP TABLE IF EXISTS `ims_ewei_shop_goods_labelstyle`;
DROP TABLE IF EXISTS `ims_ewei_shop_goods_option`;
DROP TABLE IF EXISTS `ims_ewei_shop_goods_param`;
DROP TABLE IF EXISTS `ims_ewei_shop_goods_spec`;
DROP TABLE IF EXISTS `ims_ewei_shop_goods_spec_item`;
DROP TABLE IF EXISTS `ims_ewei_shop_groups_adv`;
DROP TABLE IF EXISTS `ims_ewei_shop_groups_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_groups_goods`;
DROP TABLE IF EXISTS `ims_ewei_shop_groups_goods_atlas`;
DROP TABLE IF EXISTS `ims_ewei_shop_groups_order`;
DROP TABLE IF EXISTS `ims_ewei_shop_groups_order_refund`;
DROP TABLE IF EXISTS `ims_ewei_shop_groups_paylog`;
DROP TABLE IF EXISTS `ims_ewei_shop_groups_set`;
DROP TABLE IF EXISTS `ims_ewei_shop_groups_verify`;
DROP TABLE IF EXISTS `ims_ewei_shop_lottery`;
DROP TABLE IF EXISTS `ims_ewei_shop_lottery_default`;
DROP TABLE IF EXISTS `ims_ewei_shop_lottery_join`;
DROP TABLE IF EXISTS `ims_ewei_shop_lottery_log`;
DROP TABLE IF EXISTS `ims_ewei_shop_mc_merchant`;
DROP TABLE IF EXISTS `ims_ewei_shop_member`;
DROP TABLE IF EXISTS `ims_ewei_shop_member_address`;
DROP TABLE IF EXISTS `ims_ewei_shop_member_cart`;
DROP TABLE IF EXISTS `ims_ewei_shop_member_favorite`;
DROP TABLE IF EXISTS `ims_ewei_shop_member_group`;
DROP TABLE IF EXISTS `ims_ewei_shop_member_history`;
DROP TABLE IF EXISTS `ims_ewei_shop_member_level`;
DROP TABLE IF EXISTS `ims_ewei_shop_member_log`;
DROP TABLE IF EXISTS `ims_ewei_shop_member_message_template`;
DROP TABLE IF EXISTS `ims_ewei_shop_member_message_template_default`;
DROP TABLE IF EXISTS `ims_ewei_shop_member_message_template_type`;
DROP TABLE IF EXISTS `ims_ewei_shop_member_printer`;
DROP TABLE IF EXISTS `ims_ewei_shop_member_printer_template`;
DROP TABLE IF EXISTS `ims_ewei_shop_member_rank`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_account`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_adv`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_banner`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_bill`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_billo`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_category_swipe`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_clearing`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_group`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_nav`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_notice`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_perm_log`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_perm_role`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_reg`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_saler`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_store`;
DROP TABLE IF EXISTS `ims_ewei_shop_merch_user`;
DROP TABLE IF EXISTS `ims_ewei_shop_multi_shop`;
DROP TABLE IF EXISTS `ims_ewei_shop_nav`;
DROP TABLE IF EXISTS `ims_ewei_shop_notice`;
DROP TABLE IF EXISTS `ims_ewei_shop_order`;
DROP TABLE IF EXISTS `ims_ewei_shop_order_comment`;
DROP TABLE IF EXISTS `ims_ewei_shop_order_goods`;
DROP TABLE IF EXISTS `ims_ewei_shop_order_refund`;
DROP TABLE IF EXISTS `ims_ewei_shop_package`;
DROP TABLE IF EXISTS `ims_ewei_shop_package_goods`;
DROP TABLE IF EXISTS `ims_ewei_shop_package_goods_option`;
DROP TABLE IF EXISTS `ims_ewei_shop_perm_log`;
DROP TABLE IF EXISTS `ims_ewei_shop_perm_plugin`;
DROP TABLE IF EXISTS `ims_ewei_shop_perm_role`;
DROP TABLE IF EXISTS `ims_ewei_shop_perm_user`;
DROP TABLE IF EXISTS `ims_ewei_shop_plugin`;
DROP TABLE IF EXISTS `ims_ewei_shop_poster`;
DROP TABLE IF EXISTS `ims_ewei_shop_poster_log`;
DROP TABLE IF EXISTS `ims_ewei_shop_poster_qr`;
DROP TABLE IF EXISTS `ims_ewei_shop_poster_scan`;
DROP TABLE IF EXISTS `ims_ewei_shop_postera`;
DROP TABLE IF EXISTS `ims_ewei_shop_postera_log`;
DROP TABLE IF EXISTS `ims_ewei_shop_postera_qr`;
DROP TABLE IF EXISTS `ims_ewei_shop_qa_adv`;
DROP TABLE IF EXISTS `ims_ewei_shop_qa_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_qa_question`;
DROP TABLE IF EXISTS `ims_ewei_shop_qa_set`;
DROP TABLE IF EXISTS `ims_ewei_shop_refund_address`;
DROP TABLE IF EXISTS `ims_ewei_shop_sale_coupon`;
DROP TABLE IF EXISTS `ims_ewei_shop_sale_coupon_data`;
DROP TABLE IF EXISTS `ims_ewei_shop_saler`;
DROP TABLE IF EXISTS `ims_ewei_shop_seckill_adv`;
DROP TABLE IF EXISTS `ims_ewei_shop_seckill_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_seckill_task`;
DROP TABLE IF EXISTS `ims_ewei_shop_seckill_task_goods`;
DROP TABLE IF EXISTS `ims_ewei_shop_seckill_task_room`;
DROP TABLE IF EXISTS `ims_ewei_shop_seckill_task_time`;
DROP TABLE IF EXISTS `ims_ewei_shop_sign_records`;
DROP TABLE IF EXISTS `ims_ewei_shop_sign_set`;
DROP TABLE IF EXISTS `ims_ewei_shop_sign_user`;
DROP TABLE IF EXISTS `ims_ewei_shop_sms`;
DROP TABLE IF EXISTS `ims_ewei_shop_sms_set`;
DROP TABLE IF EXISTS `ims_ewei_shop_sns_adv`;
DROP TABLE IF EXISTS `ims_ewei_shop_sns_board`;
DROP TABLE IF EXISTS `ims_ewei_shop_sns_board_follow`;
DROP TABLE IF EXISTS `ims_ewei_shop_sns_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_sns_complain`;
DROP TABLE IF EXISTS `ims_ewei_shop_sns_complaincate`;
DROP TABLE IF EXISTS `ims_ewei_shop_sns_level`;
DROP TABLE IF EXISTS `ims_ewei_shop_sns_like`;
DROP TABLE IF EXISTS `ims_ewei_shop_sns_manage`;
DROP TABLE IF EXISTS `ims_ewei_shop_sns_member`;
DROP TABLE IF EXISTS `ims_ewei_shop_sns_post`;
DROP TABLE IF EXISTS `ims_ewei_shop_store`;
DROP TABLE IF EXISTS `ims_ewei_shop_sysset`;
DROP TABLE IF EXISTS `ims_ewei_shop_system_adv`;
DROP TABLE IF EXISTS `ims_ewei_shop_system_article`;
DROP TABLE IF EXISTS `ims_ewei_shop_system_banner`;
DROP TABLE IF EXISTS `ims_ewei_shop_system_case`;
DROP TABLE IF EXISTS `ims_ewei_shop_system_casecategory`;
DROP TABLE IF EXISTS `ims_ewei_shop_system_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_system_company_article`;
DROP TABLE IF EXISTS `ims_ewei_shop_system_company_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_system_copyright`;
DROP TABLE IF EXISTS `ims_ewei_shop_system_copyright_notice`;
DROP TABLE IF EXISTS `ims_ewei_shop_system_guestbook`;
DROP TABLE IF EXISTS `ims_ewei_shop_system_link`;
DROP TABLE IF EXISTS `ims_ewei_shop_system_setting`;
DROP TABLE IF EXISTS `ims_ewei_shop_system_site`;
DROP TABLE IF EXISTS `ims_ewei_shop_task_adv`;
DROP TABLE IF EXISTS `ims_ewei_shop_task_default`;
DROP TABLE IF EXISTS `ims_ewei_shop_task_join`;
DROP TABLE IF EXISTS `ims_ewei_shop_task_joiner`;
DROP TABLE IF EXISTS `ims_ewei_shop_task_log`;
DROP TABLE IF EXISTS `ims_ewei_shop_task_poster`;
DROP TABLE IF EXISTS `ims_ewei_shop_task_poster_qr`;
DROP TABLE IF EXISTS `ims_ewei_shop_virtual_category`;
DROP TABLE IF EXISTS `ims_ewei_shop_virtual_data`;
DROP TABLE IF EXISTS `ims_ewei_shop_virtual_type`;
DROP TABLE IF EXISTS `ims_ewei_shop_wxcard`;
DROP TABLE IF EXISTS `ims_ewei_shop_diypage_plu`;
");
