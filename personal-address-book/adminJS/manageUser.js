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
    $name = $("#name").val();
    $address = $("#address").val();
    $email = $("#email").val();
    $phonenumber = $("#phonenumber").val();

    $.ajax({
        url:"add/addUser.php",
        type:"POST", 
        data:{
            name:$name,
            address:$address,
            email:$email,
            phonenumber:$phonenumber,
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
        $("#name").val(tbl_user.name);
        $("#address").val(tbl_user.address);
        $("#email").val(tbl_user.email);
        $("#phonenumber").val(tbl_user.phonenumber);
        $("#updateUser").modal("show");
    });
}

$("#update_user").submit(function(e){
    e.preventDefault();
    $uid = $("#userid").text();
    $name = $("#name").val();
    $address = $("#address").val();
    $email = $("#email").val();
    $phonenumber = $("#phonenumber").val();

    $.ajax({
        url: "update/update_user.php",
        type:"POST",
        data:{
            uid:$uid,
            name:$name,
            address:$address,
            email:$email,
            phonenumber:$phonenumber
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