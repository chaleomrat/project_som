<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">

                    </div>
                </div>
            </div>
            <form action="show/show" method="post" enctype="multipart/form-data" id="form1">
            <br>
                <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">ประวัติการทำงาน</span></h3>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <img style="width:125px;border:1px solid #e7ab3c; border-radius: 4px;" id="image"
                            src="img/user.png">
                    </div>
                    <div class="form-group col-md-9">
                    
                        <br>
                        <label>ชื่อบริษัทที่เคยทำงาน <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="p_card" id="p_name" value="<?php echo $show['p_name']?>">
                    </div>
                    
                    <div class="form-group col-md-5">
                        <label>ตำแหน่งงาน</label>
                        <input type="text" class="form-control" name="job" value="<?php echo $show['name']?>">
                    </div>
                   
                    <div class="form-group col-md-2">
                        <label>เงินเดือน</label>
                        <input type="text" class="form-control" name="manny" value="<?php echo $show['lname']?>">
                    </div>
                    
                    <input type="submit" >
</form>
</body>
</html>