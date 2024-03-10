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
    console.log("Form submitted"); // Log message to console
});

//yes to validation
$("#confirm_add_save").click(function(){
    $username = $("#username").val();
    $password = $("#password").val();
    $userlevel = $("#userlevel").val();

    $.ajax({
        url:"add/addUser.php",
        type:"POST", 
        data:{
            username:$username,
            password:$password,
            userlevel:$userlevel
        },
        success: function(response){
            console.log("AJAX request successful"); // Log message to console
            console.log("Response: ", response); // Log response to console
            if(response == "success"){
                console.log("User added successfully"); // Log success message to console
                $("#confirmSave").modal('hide');
                $("#adduser_form").trigger("reset");
                $("#add_user").modal('hide');
                $("#success").modal('show');
                display();
            }else{
                console.log("Failed to add user"); // Log failure message to console
                $("#failed").modal('show');
            }
        },
        error: function(xhr, status, error){
            console.log("AJAX request failed"); // Log failure message to console
            console.log("Error: ", error); // Log error to console
        }
    });
});


function editUser(userid){
    // console.log("Edit button clicked with UserID: " + userid); // Add this line
    $.post("update/update_user.php", {userid:userid}, function(data){
        let tbl_user = JSON.parse(data);
        $("#userid").text(tbl_user.userid);
        $("#u_username").val(tbl_user.username);
        $("#u_password").val(tbl_user.password);
        $("#u_userlevel").val(tbl_user.userlvl);
        $("#updateUser").modal("show");
    });
}


$("#update_user").submit(function(e){
    e.preventDefault();
    $uid = $("#userid").text();
    $username = $("#u_username").val();
    $password = $("#u_password").val();
    $userlevel = $("#u_userlevel").val();

    $.ajax({
        url: "update/update_user.php",
        type:"POST",
        data:{
            uid: $uid,
            username: $username,
            password: $password,
            userlevel: $userlevel
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