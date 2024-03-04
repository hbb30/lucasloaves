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
    $product_name = $("#product_name").val();
    $product_price = $("#product_price").val();
    $product_description = $("#product_description").val();
    $product_image = $("#product_image").val();

    $.ajax({
        url:"add/addUser.php",
        type:"POST", 
        data:{
            product_name:$product_name,
            product_price:$product_price,
            product_description:$product_description,
            product_image:$product_image
            // ulvl:'nonadmin'
        },
        success: function(response){
            console.log("AJAX request successful"); // Log message to console
            console.log("Response: ", response); // Log response to console
            if(response == "success"){
                console.log("Product added successfully"); // Log success message to console
                $("#confirmSave").modal('hide');
                $("#adduser_form").trigger("reset");
                $("#add_user").modal('hide');
                $("#success").modal('show');
                display();
            }else{
                console.log("Failed to add product"); // Log failure message to console
                $("#failed").modal('show');
            }
        },
        error: function(xhr, status, error){
            console.log("AJAX request failed"); // Log failure message to console
            console.log("Error: ", error); // Log error to console
        }
    });
});


function editUser(product_id){
    // console.log("Edit button clicked with UserID: " + userid); // Add this line
    $.post("update/update_user.php", {product_id:product_id}, function(data){
        let tbl_products = JSON.parse(data);
        $("#product_id").text(tbl_products.product_id);
        $("#u_product_name").val(tbl_products.product_name);
        $("#u_product_price").val(tbl_products.product_price);
        $("#u_product_description").val(tbl_products.product_description);
        $("#u_product_image").val(tbl_products.product_image);
        $("#updateUser").modal("show");
    });
}


$("#update_user").submit(function(e){
    e.preventDefault();
    $uid = $("#product_id").text();
    $u_product_name = $("#u_product_name").val();
    $u_product_price = $("#u_product_price").val();
    $u_product_description = $("#u_product_description").val();
    $u_product_image = $("#u_product_image").val();

    $.ajax({
        url: "update/update_user.php",
        type:"POST",
        data:{
            uid: $uid,
            u_product_name: $u_product_name,
            u_product_price: $u_product_price,
            u_product_description: $u_product_description,
            u_product_image: $u_product_image
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