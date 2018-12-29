@foreach($users AS $users)
<?php
$str="";
  $str=$users->name;
?>
@endforeach
<?php echo $str; ?>
