<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?php echo base_url('img'); ?>/logo.png" height="90" class="d-inline-block align-top" alt="">
            <a style="margin-top: 10px"><strong>Software Engineering Nakhon Pathom Rajabhat University</strong></a>
        </a>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light" style="margin-bottom: 10px; background-color: #33B5E5;">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('Welcome'); ?>" style="color:white">หน้าหลัก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Welcome/view'); ?>" style="color:white">ลงทะเบียน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" style="color:white">ข้อมูลศิษย์เก่าทั้งหมด</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" style="color:white">ประวัติ</a>
                </li>
            </ul>
        </div>
        <form class="form-inline">
            <a class="nav-link" href="<?php echo site_url('Login'); ?>" style="color:white"><button class="btn btn-outline-light my-2 my-sm-0" type="button">เข้าสู่ระบบ</button></a>
        </form>
        <form class="form-inline">
            <a class="nav-link" href="<?php echo site_url('Register/reg_menber'); ?>" style="color:white"><button class="btn btn-outline-light my-2 my-sm-0" type="button">สมัครสมาชิก</button></a>
        </form>
    </div>
</nav>