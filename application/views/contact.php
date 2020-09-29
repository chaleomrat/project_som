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
                        <h3>การติดต่อ</h3>
                    </div>
                </div>
            </div>
        
                   <form  action="index.php/show/shows" method = "post">>

                    <div class="form-group col-md-2">
                        <label>เลขที่ / หมู่</label>
                        <input type="text" class="form-control" name="p_number">
                    </div>
                    <div class="form-group col-md-4">
                        <label>ถนน</label>
                        <input type="text" class="form-control" name="p_road">
                    </div>
                    <div class="form-group col-md-6">
                        <label>ตำบล/แขวง</label>
                        <input type="text" class="form-control" name="p_district">
                    </div>
                    <div class="form-group col-md-5">
                        <label>อำเภอ/เขต</label>
                        <input type="text" class="form-control" name="p_amphoe">
                    </div>
                    <div class="form-group col-md-5">
                        <label>จังหวัด</label>
                        <input type="text" class="form-control" name="p_province">
                    </div>
                    <div class="form-group col-md-2">
                        <label>ไปรษณีย์</label>
                        <input type="text" class="form-control" name="p_zipcode">
                    </div>
                    <div class="form-group col-md-6">
                        <label >เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" name="p_tel">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Facebook</label>
                        <input type="text" class="form-control" name="facebook">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>
                
                   
                
                <div>
                    <button type="submit" class="btn" style="background-color:#e7ab3c;color:#fff;">ติดต่อ</button>
                  
                </div>



            </form>

        </div>
    </div>
    <br>
    <br>
</div>
</body>
</html>