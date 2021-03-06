define(['core', 'tpl'], function(core, tpl) {
    var modal = {
        page: 1,
        status: ''
    };
    modal.init = function() {
        require(['../addons/ewei_shopv2/plugin/repertory/static/js/op.js'], function(modal) {
            modal.init({
                fromDetail: false
            })
        });

        $('.fui-content').infinite({
            onLoading: function() {
                modal.getList()
            }
        });
        if (modal.page == 1) {
            modal.getList()
        }
        FoxUI.tab({
            container: $('#tab'),
            handlers: {
                status: function() {
                    modal.changeTab(0)
                },
                status0: function() {
                    modal.changeTab(1)
                },
                status1: function() {
                    modal.changeTab(2)
                },
                shop: function () {
                    modal.changeShop()
                }
            }
        })
    };
    modal.changeTab = function(status) {
        $('.fui-content').infinite('init');
        $('.content-empty').hide(), $('.content-loading').show(), $('#container').html('');
        modal.page = 1, modal.status = status, modal.getList()
    };
    modal.changeShop = function () {
        $('.fui-content').infinite('init');
        $('.content-empty').hide(), $('.content-loading').show(), $('#container').html('');
        modal.page = 1, modal.getShop()
    };
    modal.loading = function() {
        modal.page++
    };
    modal.getList = function() {
        core.json('repertory/index/get_list', {
            page: modal.page,
            status: modal.status
        }, function(ret) {
            var result = ret.result;
            if (result.total <= 0) {
                $('.content-empty').show();
                $('.fui-content').infinite('stop')
            } else {
                $('.content-empty').hide();
                $('.fui-content').infinite('init');
                if (result.list.length <= 0 || result.list.length < result.pagesize) {
                    $('.fui-content').infinite('stop')
                }
            }
            $('.content-loading').hide();
            modal.page++;
            core.tpl('#container', 'tpl_groups_order_list', result, modal.page > 1);
            FoxUI.according.init();
            require(['../addons/ewei_shopv2/plugin/repertory/static/js/op.js'], function(modal) {
                modal.init({
                    fromDetail: false
                })
            });
        })
    };
    modal.getShop = function() {
        core.json('merch/list/ajaxmerchuser', {
            page: modal.page
        }, function (ret) {
            var result = ret.result;
            if(result.total <= 0){
                $('.content-empty').show();
                $('.fui-content').infinite('stop')
            }else{
                $('.content-empty').hide();
                $('.fui-content').infinite('init');
                if (result.list.length <= 0 || result.list.length < result.pagesize) {
                    $('.fui-content').infinite('stop')
                }
            }
            $('.content-loading').hide();
            modal.page++;
            core.tpl('#container', 'tpl_merch_list_user', result, modal.page > 1);
            FoxUI.according.init();
        })
    };
    return modal
});