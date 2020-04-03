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
            innerHTML = ", ngày cấp CMND ";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false
    }else{
        document.getElementById("ngaycapcmndError").innerHTML="";
        Validation &= true;
    }

    //Nơi cấp CMND
    if(f["noicapcmnd"].value==""){
        with(document.getElementById("noicapcmndError")){
            innerHTML = "và nơi cấp CMND của bạn !!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false
    }else{
        document.getElementById("noicapcmndError").innerHTML="";
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
                innerHTML = "Chọn Ngày Tháng Năm Sinh của bạn !!!";
                style.color = "red";
                style.fontStyle = "italic";
            }
            Validation &= false;
        }else{
            document.getElementById("NgaysinhError").innerHTML="";
            Validation &= true;
        }
    //Khởi hành   
    if(f["khoihanh"].value==""){
        with(document.getElementById("khoihanhError")){
            innerHTML = "Chọn nơi khởi hành của bạn !!!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false;
    }else{
        document.getElementById("khoihanhError").innerHTML="";
        Validation &= true;
    }

    //Nơi đến   
    if(f["noiden"].value==""){
        with(document.getElementById("noidenError")){
            innerHTML = "Chọn nơi đến của bạn !!!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false;
    }else{
        document.getElementById("noidenError").innerHTML="";
        Validation &= true;
    }

    //Giới tính
    if(f["gender"].value==""){
        with(document.getElementById("GioitinhError")){
            innerHTML = "Chọn Giới Tính của bạn !!!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false;
    }else{
        document.getElementById("GioitinhError").innerHTML="";
        Validation &= true;
    }

     

    //Sở thích
    var CheckBox = 0;
    for( var i=0;i<f["hobby"].length;i++){
        if(f["hobby"][i].checked){
            CheckBox = 1;
            break;
        }
    }
    if(CheckBox==0){
        with(document.getElementById("SothichError")){
            innerHTML = "Chọn Sở Thích của bạn !!!";
            style.color = "red";
            style.fontStyle = "italic";
        }
        Validation &= false;
    }else{
        document.getElementById("SothichError").innerHTML="";
        Validation &= true;
    }

    if(Validation){
        f.submit();
        return 1;
    }
    return 0;

    
    
    }       
