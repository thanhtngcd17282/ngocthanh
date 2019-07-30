<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
     <h1> Xin chào các bạn, Mình là Thành đây </h1>
 <?php echo '<p>Mọi thông tin chi tiết, hãy liên hệ tôi ở facebook nhé <3</p>'; 
    putenv("DATABASE_URL=https://www.facebook.com/ngocthanh.tran.3954");
    echo getenv("DATABASE_URL")
 ?> 
     <a href="https://www.facebook.com/ngocthanh.tran.3954">
         Chân Trần
     </a>
     
 </body>
</html>