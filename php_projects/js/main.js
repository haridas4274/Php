$(document).ready(function () {

    //$("#submit").click(function () {
    $("#regForm").on('submit',(function(e) {
        //alert('');
        e.preventDefault();
        //var formdata = $('#regForm').serializeArray();
        //console.log(formdata);
        var formdata = new FormData(this);
        console.log(formdata);
        $.ajax({
            url: 'insert.php',
            type: 'POST',
            data: formdata,
            contentType: false,
            cache: false,
            processData: false,
            success: function (res) {
                console.log(res);
            },
            error: function(data)
            {
                console.log("error");
                console.log(data);
            }
        });
        // console.log(formdata);



    }));


});