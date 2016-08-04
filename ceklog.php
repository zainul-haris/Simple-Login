<?php
    error_reporting(E_ALL);
    /**
    * include koneksi
    */
   include 'config.php';
   
  
   if (isset($_POST['login']))
   {
      // username dan password yang dikirim dari form 
      $username = mysqli_real_escape_string($koneksi, $_POST['username']);
      $password = mysqli_real_escape_string($koneksi, $_POST['password']);

      $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

      $hasil = mysqli_query($koneksi, $query);

      $check = mysqli_num_rows($hasil);

         if ($check > 0)
         {
           session_start();
           $_SESSION['username'] = $username;
               
               ?>
                <script>
                    alert("Anda berhasil login");
                    window.location.href="index.php";
                </script>

              <?php
             }
             else
             {
                ?>
                    <script>
                      alert("gagal login, try again!");
                      window.location.href="index.php";
                  </script>            

                <?php
          }

          }
?>