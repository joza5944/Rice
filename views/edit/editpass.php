<?php 
$Datalogin = Session::get('edituser'); ?>
     <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">แก้ไขรหัสผ่านผู้ดูแล</h4>
                </div>
                <div class="card-body">
                  <form action="aftereditpass" method="post" enctype="multipart/form-data" class="form-horizontal">

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">รหัสผู้ใช้</label></div>
                            <div class="col-12 col-md-9">
                            <input type="text" id="id" name="id" placeholder="Text" value="<?php echo $Datalogin['id_userdata']; ?>" class="form-control"readonly><small class="form-text text-muted" ></small></div>
                          </div>

                           <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">ชื่อผู้ใช้</label></div>
                            <div class="col-12 col-md-9">
                            <input type="text" id="user" name="user" placeholder="Text" value="<?php echo $Datalogin['name_user']; ?>" class="form-control "readonly><small class="form-text text-muted"></small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">รหัสผ่าน</label></div>
                            <div class="col-12 col-md-9">
                            <input type="password" id="password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,20}" title="กรุณากรอกรหัสผ่าน 4-20 มีตัวพิมพ์เล็กพิมพ์ใหญ่ตัว a-z มีตัวเลข 0-9" required placeholder="Password" class="form-control" oninput="passwordcheck()"><small class="help-block form-text"></small></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">ยันยันรหัสผ่าน</label></div>
                            <div class="col-12 col-md-9">
                            <input type="password" id="newpassword" name="newpassword"   required placeholder="Password" class="form-control" oninput="passwordcheck()"><small class="help-block form-text"></small></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-md-3"></div>
                            <div id="message" class="col-12 col-md-9"> </div>
                            </div>                        
                      </div>
                      <div class="card-footer">
                       <center>
                        <div id="submit1">
                            <button id="bntsave" type="submit" class="btn btn-success btn-sm" disabled="disabled "OnClick="chkLength();"><i class="material-icons">autorenew</i>  ยืนยันการรีเส็ต</button>
                            <a href="<?php echo URL;?>UserInfor/usera" class="btn btn-danger btn-sm" role="button"><i class="material-icons">cancel</i>  ยกเลิก</a>
                        </div>
                        
                      </center>                 
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>

<script language="JavaScript">
  function chkLength()
    {
      alert('String Length = ' + document.frmMain.txtString.value.length);
    }
</script>
<script type="text/javascript">

  function passwordcheck() {
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("newpassword").value;
    if (pass1==""&&pass2=="") {
      document.getElementById("message").innerHTML = '<div class="alert alert-warning" role="alert">กรุณากรอกข้อมูลรหัสผ่าน</div>';
      document.getElementById("bntsave").disabled = true;   
    }else if (pass1!=""||Pass2!=""){
      if (pass1!=pass2) {
        document.getElementById("message").innerHTML = '<div class="alert alert-danger" role="alert">ไม่สามารถเปลี่ยนรหัสผ่านได้เนื่องจากข้อมูลรหัสผ่านไม่ตรงกัน</div>';
        document.getElementById("bntsave").disabled = true;

      }else{
        document.getElementById("message").innerHTML = '<div class="alert alert-success" role="alert">การยืนยันรหัสผ่านถูกต้องสามารถเปลี่ยนรหัสผ่านได้</div>';
        document.getElementById("bntsave").disabled = false;

      }
    }else{

    }
}
</script>

    <!--   Core JS Files   -->
    <script src="<?php echo URL; ?>/assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Chartist JS -->
    <script src="<?php echo URL; ?>/assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo URL; ?>/assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo URL; ?>/assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo URL; ?>/assets/demo/demo.js"></script> 


    <!-- <script src="<?php echo URL; ?>Public/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/popper.min.js"></script>
    <script src="<?php echo URL; ?>Public/js/plugins.js"></script>
    <script src="<?php echo URL; ?>Public/js/main.js"></script>
    <script src="<?php echo URL; ?>Public/js/pass.js"></script> -->
