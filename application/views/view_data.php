<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('bootstrap');
$this->load->view('Navbar');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div class="container">
        <div class="card card-out">
            <div class="card-body card-body-in">
                <h4 style="margin: 0px">ระบบลงทะเบียนสมาคมศิษย์เก่า</h4>
                <div class="dropdown-divider"></div>
                <h5>ประวัติการศึกษา</h5>
                <div align="center">
                    <form action="./manage/reg" method="POST">
                        <div class="form-row" style="max-width: 610px; font-size: 18px;" align="left">
                            <div class="form-group col-sm-3" style="margin-bottom: 0">คำนำหน้า
                                <div class="form-group">
                                        <option><?php echo $show['mr']?></option>
                                        
                                </div>
                            </div>
                            <div class="form-group col-sm-9" style="margin-bottom: 0">ชื่อ-นามสกุล (ภาษาไทย)
                                <input class="form-control" type="text" placeholder="ชื่อ-นามสกุล (ภาษาไทย)" maxlength="" name="fname" value="<?php echo $show['fname']?>" readonly />
                            </div>
                        </div>
                        <div class="form-row" style="max-width: 610px; font-size: 18px;" align="left">
                            <div class="form-group col-sm-3" style="margin-bottom: 0">คำนำหน้า
                                <div class="form-group">
                                        <option><?php echo $show['mre']?></option>
                                </div>
                            </div>
                            <div class="form-group col-sm-9" style="margin-bottom: 0">ชื่อ-นามสกุล (ภาษาอังกฤษ)
                                <input class="form-control" type="text" placeholder="ชื่อ-นามสกุล (ภาษาอังกฤษ)" maxlength="" name="ename" value="<?php echo $show['ename']?>" readonly />
                            </div>
                        </div>
                        <p style="max-width: 600px; font-size: 18px" align="left">หมายเลขบัตรประจำตัวประชาชน 13 หลัก
                            <input class="form-control" type="number" placeholder="หมายเลขบัตรประจำตัวประชาชน" maxlength="" name="id" value="<?php echo $show['id']?>" readonly />
                        </p>
                        <div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                            <div class="form-group col-sm-6" style="margin-bottom: 0">วันเกิด
                                <input class="form-control" type="date" placeholder="วันเกิด" maxlength="" name="date" value="<?php echo $show['date']?>" readonly />
                            </div>
                            <div class="form-group col-sm-6" style="margin-bottom: 0">ตำแหน่งงาน
                                <input class="form-control" type="text" placeholder="ตำแหน่งงาน" maxlength="" name="job" value="<?php echo $show['job']?>" readonly />
                            </div>
                        </div>
                        <div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                            <div class="form-group col-sm-3" style="margin-bottom: 0">เชื้อชาติ
                                <input class="form-control" type="text" placeholder="เชื้อชาติ" maxlength="" name="nation" value="<?php echo $show['nation']?>" readonly />
                            </div>
                            <div class="form-group col-sm-3" style="margin-bottom: 0">สัญชาติ
                                <input class="form-control" type="text" placeholder="สัญชาติ" maxlength="" name="nation2" value="<?php echo $show['nation2']?>" readonly />
                            </div>
                            <div class="form-group col-sm-3" style="margin-bottom: 0">ศาสนา
                                <input class="form-control" type="text" placeholder="ศาสนา" maxlength="" name="re" value="<?php echo $show['religion']?>" readonly />
                            </div>
                            <div class="form-group col-sm-3" style="margin-bottom: 0">กรุ๊ปเลือด
                                <input class="form-control" type="text" placeholder="กรุ๊ปเลือด" maxlength="" name="blood" value="<?php echo $show['blood']?>" readonly />
                            </div>
                        </div>
                        <div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                            <div class="form-group col-sm-6" style="margin-bottom: 0">อีเมล
                                <input class="form-control" type="email" placeholder="อีเมล" maxlength="" name="email" value="<?php echo $show['email']?>" readonly />
                            </div>
                            <div class="form-group col-sm-6" style="margin-bottom: 0">หมายเลขโทรศัพท์
                                <input class="form-control" type="number" placeholder="หมายเลขโทรศัพท์" maxlength="" name="tel" value="<?php echo $show['tel']?>" readonly />
                            </div>
                        </div>
                        <div class="form-row" style="max-width: 610px; font-size: 18px; margin-bottom: 16px" align="left">
                            <div class="form-group col-sm-6" style="margin-bottom: 0">Facebook
                                <input class="form-control" type="text" placeholder="Facebook" maxlength="" name="face" value="<?php echo $show['facebook']?>" readonly />
                            </div>
                            <div class="form-group col-sm-6" style="margin-bottom: 0">Line ID
                                <input class="form-control" type="text" placeholder="Line ID" maxlength="" name="line" value="<?php echo $show['line']?>" readonly />
                            </div>
                        </div> 
<br>
                        
                </div>

            </div>
        </div>
    </div>



</body>

</html>