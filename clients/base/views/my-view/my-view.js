({
    className: 'my-view',
    // className: 'tcenter',

    events: {
        'change #filtermonth': 'filterData'
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
                    if (!response[index].description) {
                        response[index].description = "No description";
                    }
                }

            var obj = new Object();
            this.backup = response;
            this.myData = response;

            this.render();
            }, this)
        });


        if (options && _.isFunction(options.complete)) {
            options.complete();
        }
        this.render();
    },

    filterData: function(item) {
        var val = item.currentTarget.value;
        if (val == "00") {
            this.myData = this.backup;
            this.render();
            return;
        }
        var filtered = new Object();
        var num = 0;
        var obj = this.backup;
        for(var index in obj) {
            if ((obj[index].date_closed).indexOf(val) != -1) { // contains
                filtered[num++] = obj[index];
            }
        }
        this.myData = filtered;
        this.render();
    }

})