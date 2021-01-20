<?php

unset($_SESSION['nomU']); 
//session_destroy();
header('Location:index.php');
?>
<script language="javascript">
document.location="index.php";
</script>
