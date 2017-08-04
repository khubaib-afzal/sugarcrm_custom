({
    className: 'my-view',
    // className: 'tcenter',

    events: {
        //'click .sugar-cube': 'spinCube'
    },

    render: function() {
        this._super("render");
    },

    loadData: function (options) {
        var apiUrl = app.api.buildURL('customApi/getClosedWon');
        // console.log(this);

        app.api.call('GET', apiUrl, null, {
            success: _.bind(function(response){
                for(var index in response) {
                    console.log(response[index]);
                }

            var obj = new Object();
            obj.myProperty = 'myProperty';
            this.myData = obj;
                    
            console.log(this.myData.myProperty);                

                // console.log(this);
            }, this)
        });


        if (options && _.isFunction(options.complete)) {
            options.complete();
        }
        this.render();
    }

})