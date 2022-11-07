$(document).ready(function () {
    $("#register").click(function () {
        $("#insertBtn").show();
        $("#update").hide();
    })

    $("#insertBtn").click(function () {
        var formdata = $("#form").serializeArray();
        //  console.log(formdata);

        $.ajax({
            url: "insert.php",
            type: "post",
            data: formdata,
            success: function (data) {
                console.log(data);
                tabledata();
                if (data == 1) {
                    $("#result").text("inserted successfull");
                }
                if (data == 0) {
                    $("#result").text("insert error");
                }
                $("#form").each(function(){
                    this.reset();
                });

            }
        });


    })

    function tabledata() {
        $.ajax({
            url: "tabledata",
            type: "post",
            data: tabledata,
            success: function (data) {
                $(".table").html(data);
            }
        })
    }
    tabledata();

    $(".table").on("click", "#edit", function () {
        var id = $(this).attr("data-id");
        // console.log(id);
        $.ajax({
            url: "showdata.php",
            type: "post",
            data: { id: id },
            success: function (data) {
                var fill = JSON.parse(data);
                $("#id").val(fill.id);
                $("#name").val(fill.name);
                $("#mail").val(fill.email);
                $("#phone").val(fill.phone);
                $("#ntv").val(fill.native);
                $("#img").val(fill.img);
                // console.log(data);
                tabledata();
                $("#insertBtn").hide();
                $("#update").show();
            }
        })
    });


    $("#update").click(function () {
        var formdata = $("#form").serializeArray();
        //  console.log(formdata);

        $.ajax({
            url: "update.php",
            type: "post",
            data: formdata,
            success: function (data) {
                console.log(data);
                tabledata();
                if (data == 2) {
                    $("#result").text("update successfull");
                }
                if (data == 3) {
                    $("#result").text("update error");
                }
                $("#form").each(function(){
                    this.reset();
                });
            }
        });


    })
    $(".table").on("click","#delate",function(){
        var id=$(this).attr("data-id");
        console.log(id);
        $.ajax({
            url:"delete.php",
            type:"post",
            data:{id:id},
            success:function(data){
                // console.log(data);
                tabledata();
                if (data == 5) {
                    $("#result").text("delete successfull");
                    $("#"+id).remove();
                }
                if (data == 6) {
                    $("#result").text("delete error");
                }
            }
        })
    })
});