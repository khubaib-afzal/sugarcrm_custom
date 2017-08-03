({
    className: 'my-view',

    cubeOptions: {
        spin: false
    },
    events: {
        'click .sugar-cube': 'spinCube'
    },

    spinCube: function() {
        this.cubeOptions.spin = !this.cubeOptions.spin;
        this.render();
    },

    render: function() {
        this._super("render");
        console.log("Spin = " + this.cubeOptions.spin);
    },

    loadData: function (options) {
        //populate your data
        myData=new Object();
        myData.myProperty = "My Value";
        this.myData = myData;
        /*
            //alternatively, you can pass in a JSON array to populate your data
            myData = $.parseJSON( '{"myData":{"myProperty":"My Value"}}' );
            _.extend(this, myData);
        */
        //reset flags on reload
        if (options && _.isFunction(options.complete)) {
            options.complete();
        }
        this.render();
    }
})