$("#logout").click(function(){
    $.post("../logout.php",{logout:1},function(){
        window.location.href="../index.php";
    });
});