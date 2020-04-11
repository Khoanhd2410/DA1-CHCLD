function hople_dulieu(){
    var f = document.forms["DangKy"];
    var Validation = true;
    //Kiểm tra họ
    if(f["name"].value==""){
        with(document.getElementById("nameError")){
            innerHTML = "Hãy nhập họ tên vào !!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false
    }else{
        document.getElementById("nameError").innerHTML="";
        Validation &= true;
    }

    //Kiểm tra nơi sinh
    if(f["noisinh"].value==""){
        with(document.getElementById("noisinhError")){
            innerHTML = "Hãy nhập nơi sinh vào !!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false
    }else{
        document.getElementById("noisinhError").innerHTML="";
        Validation &= true;
    }

    //CMND
    if(f["cmnd"].value==""){
        with(document.getElementById("cmndError")){
            innerHTML = "Hãy nhập CMND ";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false
    }else{
        document.getElementById("cmndError").innerHTML="";
        Validation &= true;
    }

    //Ngày cấp CMND
    if(f["ngaycapcmnd"].value==""){
        with(document.getElementById("ngaycapcmndError")){
            innerHTML = "Nhập ngày cấp ";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false
    }else{
        document.getElementById("ngaycapcmndError").innerHTML="";
        Validation &= true;
    }

    //Nơi cấp CMND
    if(f["noicapthe"].value==""){
        with(document.getElementById("noicaptheError")){
            innerHTML = "Chọn nơi cấp thẻ !!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false
    }else{
        document.getElementById("noicaptheError").innerHTML="";
        Validation &= true;
    }

    //Khởi hành   
    if(f["noicap"].value==""){
        with(document.getElementById("noicapError")){
            innerHTML = "Chọn nơi khởi hành của bạn !!!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false;
    }else{
        document.getElementById("noicapError").innerHTML="";
        Validation &= true;
    }

    //kiem tra SDT
    if(f["phone"].value==""){
        with (document.getElementById("dtError")){
            innerHTML = "Hãy nhập SĐT!!";
            style.color = "red";
            style.fontStyle = "italic";
        }
    Validation &= false;
    }else{
        if(isNaN(f["phone"].value)){
            with(document.getElementById("dtError")){
                innerHTML = "Nhập số ĐT từ 0-9";
                style.color = "red";
                style.fontStyle = "italic";
            }
            Validation &= false;
        }else{
            if(f["phone"].value.length <10 || f["phone"].value.length>11){
                with(document.getElementById("dtError")){
                    innerHTML = "Tổng tất cả chỉ có 10 số !!!";
                    style.color = "red";
                    style.fontStyle = "italic";

                }
                
                Validation &= false;
            
            }else{
                document.getElementById("dtError").innerHTML="";
                Validation &= true;
            }
        }
    }
    //Ngày Sinh
        if(f["ngay"].value==""){
            with(document.getElementById("NgaysinhError")){
                innerHTML = "Chọn Ngày Sinh của bạn !!!";
                style.color = "red";
                style.fontStyle = "italic";
            }
            Validation &= false;
        }else{
            document.getElementById("NgaysinhError").innerHTML="";
            Validation &= true;
        }

        //Tháng Sinh
        if(f["thang"].value==""){
            with(document.getElementById("ThangsinhError")){
                innerHTML = "Chọn Tháng Sinh của bạn !!!";
                style.color = "red";
                style.fontStyle = "italic";
            }
            Validation &= false;
        }else{
            document.getElementById("ThangsinhError").innerHTML="";
            Validation &= true;
        }

        //Ngày Sinh
        if(f["nam"].value==""){
            with(document.getElementById("NamsinhError")){
                innerHTML = "Chọn Năm Sinh của bạn !!!";
                style.color = "red";
                style.fontStyle = "italic";
            }
            Validation &= false;
        }else{
            document.getElementById("NamsinhError").innerHTML="";
            Validation &= true;
        }

    //Nơi cấp   
        if(f["noicap"].value==""){
            with(document.getElementById("noicapError")){
                innerHTML = "Chọn Nơi cấp ";
                style.color = "red";
                style.fontStyle = "italic";
            }
            Validation &= false
        }else{
            document.getElementById("noicapError").innerHTML="";
            Validation &= true;
        }

    //Dân tộc   
        if(f["dantoc"].value==""){
            with(document.getElementById("dantocError")){
                innerHTML = "Chọn dân tộc ";
                style.color = "red";
                style.fontStyle = "italic";
            }
            Validation &= false
        }else{
            document.getElementById("dantocError").innerHTML="";
            Validation &= true;
        }

    //Tôn giáo
        if(f["tongiao"].value==""){
            with(document.getElementById("tongiaoError")){
                innerHTML = " Chọn tôn giáo ";
                style.color = "red";
                style.fontStyle = "italic";
            }
            Validation &= false
        }else{
            document.getElementById("tongiaoError").innerHTML="";
            Validation &= true;
        }

    //Giới tính
    if(f["gender"].value==""){
        with(document.getElementById("GioitinhError")){
            innerHTML = " Chọn Giới Tính của bạn !!!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false;
    }else{
        document.getElementById("GioitinhError").innerHTML="";
        Validation &= true;
    }

    //Địa chỉ thường trú
    if(f["dcthuongtru"].value==""){
        with(document.getElementById("dcthuongtruError")){
            innerHTML = "Hãy nhập địa chỉ thường trú !!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false
    }else{
        document.getElementById("dcthuongtruError").innerHTML="";
        Validation &= true;
    }

    //Địa chỉ tạm trú
    if(f["dctamtru"].value==""){
        with(document.getElementById("dctamtruError")){
            innerHTML = "Hãy nhập địa chỉ tạm trú !!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false
    }else{
        document.getElementById("dctamtruError").innerHTML="";
        Validation &= true;
    }
    
    //Nghề nghiệp
    if(f["nghenghiep"].value==""){
        with(document.getElementById("nghenghiepError")){
            innerHTML = "Hãy nhập Nghề nghiêp hiện tại của bạn !!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false
    }else{
        document.getElementById("nghenghiepError").innerHTML="";
        Validation &= true;
    }

    //Địa chỉ cơ quan
    if(f["dccoquan"].value==""){
        with(document.getElementById("dccoquanError")){
            innerHTML = "Hãy nhập địa chỉ cơ quan hiện của bạn !!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false
    }else{
        document.getElementById("dccoquanError").innerHTML="";
        Validation &= true;
    }

    //Họ tên cha
    if(f["hotencha"].value==""){
        with(document.getElementById("hotenchaError")){
            innerHTML = "Hãy nhập Họ tên cha của bạn !!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false
    }else{
        document.getElementById("hotenchaError").innerHTML="";
        Validation &= true;
    }

    //Ngày sinh của cha
    if(f["ngaysinhcha"].value==""){
        with(document.getElementById("ngaysinhchaError")){
            innerHTML = "Hãy nhập Ngày sinh cha của bạn !!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false
    }else{
        document.getElementById("ngaysinhchaError").innerHTML="";
        Validation &= true;
    }

    //Họ tên mẹ
    if(f["hotenme"].value==""){
        with(document.getElementById("hotenmeError")){
            innerHTML = "Hãy nhập Họ tên mẹ của bạn !!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false
    }else{
        document.getElementById("hotenmeError").innerHTML="";
        Validation &= true;
    }

    //Ngày sinh của mẹ
    if(f["ngaysinhme"].value==""){
        with(document.getElementById("ngaysinhmeError")){
            innerHTML = "Hãy nhập Ngày sinh mẹ của bạn";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false
    }else{
        document.getElementById("ngaysinhmeError").innerHTML="";
        Validation &= true;
    }

    

    if(Validation){
        f.submit();
        return 1;
    }
    return 0;

    
    
}       
