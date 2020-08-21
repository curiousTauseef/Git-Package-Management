GitPackageManagement.window.AddPackage = function(config) {
    config = config || {};
    this.ident = config.ident || 'gitpackagemanagement-window-add-package';
    Ext.applyIf(config,{
        title: _('gitpackagemanagement.add_package')
        ,id: this.ident
        ,width: 475
        ,url: MODx.config.connector_url
        ,baseParams: {
            action: 'GitPackageManagement\\Processors\\GitPackage\\Create'
            ,register: 'mgr'
            ,topic: '/gitpackageinstall/'
        }
        ,fields: [{
            xtype: 'textfield'
            ,fieldLabel: _('gitpackagemanagement.folder')
            ,name: 'folderName'
            ,id: this.ident+'-folderName'
            ,anchor: '100%'
        }]
    });
    GitPackageManagement.window.AddPackage.superclass.constructor.call(this,config);
};
Ext.extend(GitPackageManagement.window.AddPackage,MODx.Window);
Ext.reg('gitpackagemanagement-window-add-package',GitPackageManagement.window.AddPackage);

GitPackageManagement.window.RemovePackage = function(config) {
    config = config || {};
    this.ident = config.ident || 'gitpackagemanagement-window-remove-package';
    Ext.applyIf(config,{
        title: _('gitpackagemanagement.remove_package')
        ,id: this.ident
        ,width: 475
        ,labelWidth: 200
        ,url: MODx.config.connector_url
        ,cancelBtnText: _('no')
        ,saveBtnText: _('yes')
        ,labelAlign: 'left'
        ,baseParams: {
            action: 'GitPackageManagement\\Processors\\GitPackage\\Remove'
            ,register: 'mgr'
            ,topic: '/gitpackageuninstall/'
        }
        ,fields: [{
            xtype: 'textfield'
            ,name: 'id'
            ,hidden: true

        },{
            html: _('gitpackagemanagement.remove_package_confirm') + '<br /><br />'
        },{
            xtype: 'xcheckbox'
            ,name: 'deleteFolder'
            ,fieldLabel: _('gitpackagemanagement.delete_package_folder')

        }]
    });
    GitPackageManagement.window.RemovePackage.superclass.constructor.call(this,config);
};
Ext.extend(GitPackageManagement.window.RemovePackage,MODx.Window);
Ext.reg('gitpackagemanagement-window-remove-package',GitPackageManagement.window.RemovePackage);
