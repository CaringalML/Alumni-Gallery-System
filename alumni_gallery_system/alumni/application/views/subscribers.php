<?php include('header.php');?>
 <div class="row" style ="margin-top: 25px;">
    
<div class="small-12 medium-8 large-9 columns">
	<?php if(count($records)):?>
		<?php foreach($records as $rec):?>
    <div class="row">
  <p class="title"><?php echo $rec->post_title;?></p>
</div>
 <div class="row">
<img class="small-12 medium-6 large-6 columns" src=<?php echo $rec->post_image;?>>
 </div>
 <hr/>
<div class="row">
    <p class="description"><?php echo  $rec->post_description;?></p>
</div>
<?php endforeach;?>
<?php else: ?>
	<p>No Records Found!</p>
<?php endif;?>
</div>
</div>
<?php include('footer.php');?>

