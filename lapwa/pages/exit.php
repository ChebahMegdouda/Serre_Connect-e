<?php 
session_destroy(); ?>
<script type="text/javascript">
setTimeout('Redirect()',1000);
function Redirect()
{
	location.href = './index.php';
}
</script> 
<?exit;
?>