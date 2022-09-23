<?php
if(empty($_SESSION)){
    echo "<script>
alert('Signin To continue');
window.location.href='index.php';
</script>";
}
?>