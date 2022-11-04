$(document).ready(function () {

    //get data from lists
    function getData(){
        $.ajax({
            url:"list.php",
            type:"post",
            data:{sent:"anydata"},
            success:function (data) {
                //   console.log(data) ;
                $("#result_table").html(data);
              }
           });
    }
    getData();






    $("#submit").click(function () {
       
        //resert after submit or updation
         //get all the form values through to insert page in post method
        var formData= $("#formdata").serialize();
        // console.log(formData);
        $.ajax({
            //this 
            url: "insert.php",
            type: 'post',
            data:formData,
            success: function (data) {
                // console.log(data);
                getData();
            }

        });

    // show data in input field
         $("#result_table").on('click',)   


    });


});