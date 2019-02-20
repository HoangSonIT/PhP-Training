<?php
   $password = $email = '';
   $checkInput = '/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/';
   if($_SERVER["REQUEST_METHOD"] == "POST"){
      $email = $_POST["email"];
      $password = $_POST["password"];
   }
   if($password || $email){
      if(strlen($password) === 0 || strlen($email)  === 0){
         die ("<b>Bạn đã điền thiếu thông tin, vui lòng nhập lại</b>");
      }
      if(preg_match($checkInput, $email)){
         echo "<h1>Bạn đã đăng kí thành công</h1><br />";
         echo "Email: ". $email . "<br />";
      }else{
         echo "Bạn đã nhập sai địa chỉ mail<br />";
      }
      echo "Mật khẩu là: " . substr($password, strlen($password) - 4) . "****<br />";
      exit();
   }
?>
<html>
   <body>
   
      <form action="<?php $_PHP_SELF ?>" method="POST">
         Email: <input type="text" name="email" placeholder="VD: Trần Gì Đấy"/>
         Password: <input type="password" name="password" placeholder="VD: password"/>
         <input type="submit" />
      </form>
      
   </body>
</html>
