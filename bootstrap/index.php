<?php
　$age = $_POST[“age”];
　if ($age >= 20) {
　　$message = “お酒を飲んでもOKです”;
　} else {
　　$message = “お酒を飲んではいけません”;
　}
?>
<html>
<body>
　<p>
　　<?php echo $message; ?>
　</p>
</body>
</html>