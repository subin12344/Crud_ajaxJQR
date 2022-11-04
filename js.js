$(document).ready(function(){

$("#insertBtn").click(function(){
     var formdata=$("#form").serializeArray();
    //  console.log(formdata);
    $.ajax({
        url:"insert.php",
        type:"post",
        data:formdata,
        success:function(data){
            console.log(data);
        }
    });
    

})

});