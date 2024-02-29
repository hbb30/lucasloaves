/*

JAVASCRIPT FOR usermanagement file
to link this JS, use <script scr = "thisfile.js"></script> in the usermanagement.php

*/

$(document).ready(function(){
    display();
});

//display
function display() {
    $("#searchUser").val("");
    $.ajax({
        url:"display/displayUser.php",
        type:"POST",
        success: function(data){
            $("#showUser").html(data);
        }
    })
}
//search
function displaySearch(search){
    $.post("display/displayUser.php", {search:search}, function(data){$("#showUser").html(data);});
}

//function to add
$("#adduser_form").submit(function(e){
    e.preventDefault();
    $("#confirmSave").modal('show'); //show confirmation modal
});
//yes to validation
$("#confirm_add_save").click(function(){
    $uname = $("#uname").val();
    $password = $("#password").val();
    $name = $("#name").val();
    $.ajax({
        url:"add/addUser.php",
        type:"POST", 
        data:{
            uname:$uname,
            pass:$password,
            name:$name,
            ulvl:'nonadmin'
        },
        success: function(response){
            if(response == "success"){
                $("#confirmSave").modal('hide');
                $("#adduser_form").trigger("reset");
                $("#add_user").modal('hide');
                $("#success").modal('show');
                display();
            }else{
                $("#failed").modal('show');
            }
        }
    });
})


function editUser(userid){
    $.post("update/update_user.php", {userid:userid}, function(data){
        let tbl_user = JSON.parse(data);
        $("#userid").text(tbl_user.userid);
        $("#u_uname").val(tbl_user.username);
        $("#u_password").val(tbl_user.password);
        $("#u_name").val(tbl_user.name);
        $("#updateUser").modal("show");
    });
}

$("#update_user").submit(function(e){
    e.preventDefault();
    $uid = $("#userid").text();
    $uname = $("#u_uname").val();
    $password = $("#u_password").val();
    $name = $("#u_name").val();

    $.ajax({
        url: "update/update_user.php",
        type:"POST",
        data:{
            uid: $uid,
            uname: $uname,
            pass: $password,
            name: $name
        },
        success:function(response){
            if(response == "success"){
                $("#update_user").trigger("reset");
                $("#updateUser").modal('hide');
                $("#success").modal('show');
                display();
            }else{
                $("#failed").modal('show');
            }
        }
    });
});

$("#searchUser").keyup(function(){
    $data = $(this).val();
    // console.log($(this).val());
    if($data){
        displaySearch($data); //display search only
    }else{
        display();//display all
    }
})