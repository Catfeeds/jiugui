ALTER TABLE `ims_ewei_shop_lottery` ADD `lottery_num` INT(4) NULL DEFAULT 0 COMMENT '�齱Ĭ�ϴ���';
alter table `ims_ewei_shop_lottery_join` add `share_num` int(4) null default 0 comment '�ѷ�������';
/**
��������������������
 */
create table `ims_ewei_shop_lottery_share`(
 `id` int(11) not null auto_increment,
 `uniacid` int(11) null default 0,
 `openid` varchar(50) null,
 `lottery_id` int(11) not null,
 `create_time` int(10) null default 0,
 `mid` int(11) not null,
 primary key (`id`)
);