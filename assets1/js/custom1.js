
(function ($) {
    "use strict";
    var mainApp = {
        slide_fun: function () {

            $('#carousel-example').carousel({
                interval:3000 // THIS TIME IS IN MILLI SECONDS
            })

        },
        dataTable1_fun: function () {

            $('#dataTables1-example').dataTable();

        },
       
        custom_fun:function()
        {
            
            


        },

    }
   
   
    $(document).ready(function () {
        mainApp.slide_fun();
        mainApp.dataTable1_fun();
        mainApp.custom_fun();
    });
}(jQuery));

