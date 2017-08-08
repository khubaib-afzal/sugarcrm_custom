({
    extendsFrom: 'ListView',

    initialize: function(options) {
        this._super('initialize', [options]);

    },

    render: function() {
    	this._super('render');

    	var userBean = app.data.createBean('Users', {id: app.user.id});
        var self = this;
        var request = userBean.fetch({
            success: function() {
                console.log("Admin? " + userBean.get('is_admin'));
                if (!userBean.get('is_admin')) {
                    _.each(self.fields, function(field) {

                        if (field.type == "Newtype") {
                            field.def.readonly = true;
                        }
                    }, self);
                }
            },
            error: function() {
                console.log("could not fetch user data");
            }
        });
    }

})