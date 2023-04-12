<?php
  session_start();
  ob_start();
  include "../model/connectdb.php";
  include "../model/user.php";

  if((isset($_POST['reg']))&&($_POST['reg'])){
    $user=$_POST['user'];
    $name=$_POST['user'];
    $pass=md5($_POST['psw']);
    $rpass=md5($_POST['rpsw']);
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    if(!empty($_POST['user'])&&!empty($_POST['email'])&&!empty($_POST['phone'])&&!empty($_POST['address'])&&!empty($_POST['psw'])){
      if($pass!=$rpass){
        $pass_err= "* Mật khẩu không trùng khớp!";
      } else {
          $query = "INSERT INTO users (name,address,email,user,pass) VALUES (?,?,?,?,?)";
          $pdo = connectdb();
          $sth= $pdo->prepare($query);
          $sth->execute([
            $user,
            $address,
            $email,
            $user,
            $pass
          ]);
          if ($sth==true){
            echo '<script>alert("Đăng kí thành công!!!"); location="login.php"</script>';
          }
        }
    }else
      $empty_err="* Vui lòng nhập đủ thông tin!";
  }


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Register</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <!-- <script src='main.js'></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      *{
        letter-spacing: 0.5px;
      }
      .form-control{
          border: none;
          border-bottom: 1px solid;
          border-radius: 0px;
      }
      .form-control:focus{
          box-shadow: none;
          border-color: gray;
      }
      .form-check-input:checked{
        background-color: black;
        border-color: gray;
      }
      .form-check-input:focus{
        box-shadow: none;
        border-color: gray;
      }
      .btn{
        height: 50px;
        border-radius: 0px;
      }
      .btn:hover{
        background-color: white;
        border-color: black;
        color: black;
        transition: 0.5s;
      }
      a.text-hover:hover{
        color: gray !important
      }
      /* .separator{
        max-width: none;
        height: 1px;
        margin: 28px 0;
        background: #e1e2e3;
      }
      .separator-text{
        position: relative;
        top: -13px;
        background-color: white;
      } */
      .btn-order-signin{
        border: none;
        background-color: white;
      }
      .btn-order-signin:hover{
        opacity: 0.6;
      }
    </style>
</head>
<body>
    <header>
        <div class="container"></div>
    </header>

    <main>
        <div class="container">
            <p class="fs-1 text-center">Logitech</p>
            <p class="fs-4 mt-3 text-center fw-bolder text-uppercase">tạo tài khoản</p>
            <p class="text-center mt-2">Hoàn thành các trường bên dưới để tạo tài khoản của bạn.</p>
            <div class="d-flex justify-content-center">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="w-50" style="min-width: fit-content;">
                    
                    <!-- Name input -->
                    <div class=" form-floating mb-4">
                        <input type="text" name="user" class="form-control" placeholder="name" value="<?php if(isset($_POST["user"])) echo  $_POST["user"]; ?>"/>
                        <label class="" for="formLastname">Tài khoản</label>
                    </div>

                    <!-- Email input -->
                    <div class=" form-floating mb-4">
                      <input type="email" id="formInput" name="email" class="form-control" placeholder="name@example.com" value="<?php if(isset($_POST["email"])) echo  $_POST["email"]; ?>"/>
                      <label class="" for="formInput">Email</label>
                    </div>

                    <!-- Phone input -->
                    <div class=" form-floating mb-4">
                      <input type="text" id="formInput" name="phone" class="form-control" placeholder="0123456789" value="<?php if(isset($_POST["phone"])) echo  $_POST["phone"]; ?>"/>
                      <label class="" for="formInput">Số điện thoại</label>
                    </div>

                    <!-- Addres input -->
                    <div class=" form-floating mb-4">
                      <input type="text" id="formInput" name="address" class="form-control" placeholder="abc" value="<?php if(isset($_POST["address"])) echo  $_POST["address"]; ?>"/>
                      <label class="" for="formInput">Địa chỉ</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-floating mb-4">
                      <input type="password" id="formPassword" name="psw" class="form-control" placeholder="password" value="<?php if(isset($_POST["psw"])) echo  $_POST["psw"]; ?>"/>
                      <label class="" for="formPassword">Mật khẩu</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-floating mb-4">
                      <input type="password" id="formPassword" name="rpsw" class="form-control" placeholder="password2" value="<?php if(isset($_POST["rpsw"])) echo  $_POST["rpsw"]; ?>"/>
                      <label class="" for="formPassword">Nhập lại mật khẩu</label>
                    </div>
                    <?php
                      if(isset($pass_err) && ($pass_err!='')){
                        echo "<font color='red'>".$pass_err."</font>";
                      }
                      if(isset($empty_err) && ($empty_err!='')){
                        echo "<font color='red'>".$empty_err."</font>";
                      }
                    ?>
                    <!-- Checkbox -->
                    <div class="form-check mt-3 mb-4">
                      <input class="form-check-input" type="checkbox" value="" id="form2Example31" require/>
                      <label class="form-check-label" for="form2Example31"> Tôi đã đọc và đồng ý với các chính sách bảo mật và điều khoản dịch vụ. </label>
                    </div>
                  
                    <!-- Submit button -->
                    <input type="submit" name="reg" value='TẠO' class="btn btn-dark w-100 mb-4 fw-bold"/>

                    <!-- Register buttons -->
                    <div class="text-center mb-5">
                      <div class="separator">
                        <span class="text-muted text-center px-2 separator-text">HOẶC</span>
                      </div>
                      
                      <div class="row justify-content-center">
                        <!-- <div class="col-4">
                          <button type="button" class="btn-order-signin">
                            <a href="#" class="text-decoration-none text-dark"><img class="provider_image me-2" src="https://id.logi.com/dd35f4cb39344170e77950243b16d033.svg" alt="facebook">Facebook</a>
                          </button>
                        </div>
                    
                        <div class="col-4">
                          <button type="button" class="btn-order-signin">
                            <a href="#" class="text-decoration-none text-dark"><img class="provider_image me-2" src="https://id.logi.com/7a76bdec0e8f8b4b56e968a902f8549b.svg" alt="google">Google</a>
                          </button>
                        </div> -->

                        <span class="mt-4 mb-5 fw-bold"> <a href="sign_in.php" class="text-dark fw-bold text-hover">Đã có tài khoản? Đăng nhập?</a></span>
                      </div>
                    </div>
                  </form>
                  
            </div>
        </div>
    </main>

    <footer>
        <div class="container"></div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    
</body>
</html>