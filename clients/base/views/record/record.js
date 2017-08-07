({
    render: function() {
        console.log("record view");
        var userBean = app.data.createBean('Users', {id: app.user.id});
        var request = userBean.fetch({
            success: function() {
                console.log("Admin? " + userBean.get('is_admin'));
                
                if (userBean.get('is_admin')) {
                    $.each(this.fields, function(field) {
                        console.log(field.name);

                    });
                }
            },
            error: function() {
                console.log("could not fetch");
            }
        });
    }
})