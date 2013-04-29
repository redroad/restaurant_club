$(document).ready(function(){
    $('.register').live('click',function(){
        var name =  $("#inputName").val();
        var display = $('#inputDName').val();
        var surname = $('#inputSurname').val();
        var password = $('#inputPassword').val();
        var repassword = $('#inputRePassword').val();
        var email = $('#inputEmail').val();
        if(display.length == 0 || email.length == 0 || password.length == 0 || repassword.length == 0){
            alert('กรุณากรอกข้อมูลที่มี * ให้ครบ');
        // console.log('check data');
        }else if(password != repassword){
            alert('รหัสผ่านไม่ตรงกัน');
        //console.log('check pass');
        }else{
            // console.log('check dup');
            $.post('/controller/MembersController.php?act=check_duplicate',
            {        
                email:email
            },
            function(res){
                console.log(res);  
            });
        //                        var res = $.ajax({
        //                            type:'POST',
        //                            url:'/controller/MembersController.php',
        //                            data:{
        //                                act:'check_duplicate',
        //                                email:email
        //                            },
        //                            dataType:'JSON'
        //                        });
        //                         
        //                        res.success(function(res){
        //                            console.log(res);
        //                            if(res.success){
        //                                var rs = $.ajax({
        //                                    type:'POST',
        //                                    url:'/controller/MembersController.php',
        //                                    data:{
        //                                        act:'register',
        //                                        email:email,
        //                                        display:display,
        //                                        name:name,
        //                                        surname:surname,
        //                                        password:password
        //                                    },
        //                                    dataType:'JSON'
        //                                }); 
        //                                
        //                                rs.success(function(){
        //                                    if(rs.success){
        //                                        alert('การสมัครสมาชิกเสร็จสิ้น');
        //                                    }else{
        //                                        alert('เกิดข้อผิดพลาด');
        //                                    } 
        //                                });
        //                                
        //                                
        //                            }else{
        //                                alert('email นี้มีผู้ใช้แล้ว');
        //                            }
        //                        });
        //                        
        //                        res.error(function(res){
        //                            console.log(res);
        //                        })
        }
                
    });
});