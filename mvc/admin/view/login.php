<!-- <form method="POST" action="index.php?controllẻ=login">
        <table>
            <tr>
                <td colspan="2"><span style="font-weight:bold;font-size:20px;">Admin Login</span></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" size="20"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" size="20"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <input name="btn_submit" type="submit" value="Login"></td>
            </tr> 
        </table>
</form> -->
<div class="body-login">
    <form method="POST" class="login-form" action="index.php?controller=login" >
        <h1>Login</h1>

        <div class="txtb">
            <input type="text" name="username">
            <span data-placeholder="Username" ></span>
        </div>

        <div class="txtb">
            <input type="text" name="password">
            <span data-placeholder="Password" ></span>
        </div>

        <input type="submit" class="logbtn" value="Login">

        <div class="bottom-text">
            Don't have account? <a href="">Sign up</a>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
    });

    $(".txtb input").on("blur",function(){
        if($(this).val() =="")
        $(this).removeClass("focus");
    });
  
</script>