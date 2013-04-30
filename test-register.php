<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div class="control-group">
            <label class="control-label" for="inputEmail">ชื่อที่ใช้แสดง*</label>
            <div class="controls">
                <input type="text" id="inputDName" placeholder="ชื่อเข้าระบบ">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">รหัสผ่าน*</label>
            <div class="controls">
                <input type="password" id="inputPassword" placeholder="รหัสเข้าระบบ">
            </div>
            <label class="control-label" for="inputPassword">รหัสผ่าน(อีกครั้ง)*</label>
            <div class="controls">
                <input type="password" id="inputRePassword" placeholder="รหัสเข้าระบบ">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">ชื่อ</label>
            <div class="controls">
                <input type="text" id="inputName" placeholder="ชื่อ">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">นามสกุล</label>
            <div class="controls">
                <input type="text" id="inputSurname" placeholder="นามสกุล">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">E-mail Address*</label>
            <div class="controls">
                <input type="text" id="inputEmail" placeholder="E-mail Address">
            </div>
        </div>

        <div class="control-group">
            <div class="controls">                                    
                <button type="btn" class="register">ยืนยันการสมัครสมาชิก</button>
            </div>
        </div>
        <script src="/js/jquery-1.8.2.min.js"></script>
        <script src="/js/member.js"></script>
        <script>
//            $(document).ready(function(){
//                $('.register').live('click',function(){     
//                    var email = $('#inputEmail').val();                
//                    $.post('/controller/MembersController.php?act=check_duplicate',
//                    {        
//                        email:email
//                    },
//                    function(res){
//                        console.log(res);  
//                    });                            
//                });
//            });
        </script>
    </body>
</html>
