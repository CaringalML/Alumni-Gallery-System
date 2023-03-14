<?php include('header.php');?>
 <div class="row">


 	<div class="small-12 medium-6 large-3 columns"></div>
 	<ul class="side-nav">
 		<?php $username =$this->session->userdata('username')?>
 		<li><h3 class="greeting">Welcome <?php echo $username;?></h3></li>
 		<hr>
 		<li><?php echo anchor("dashboard/addPost",'ADD NEW ALUMNI');?></li>
 	</ul>
 	<div class="small-12 medium-8 large-9 columns">
       <?php if($msg = $this->session->flashdata('response')):?>
       <div class="response">
        <?php echo $msg;?>
      </div>
       <?php endif;?>

         <h2>ALUMNI BATCH'S 2023</h2>
         <br>
         <?php if(count($records)):?>
         	<?php foreach($records as $record):?>
         		<div class="row">
         			<div class="small-12 medium-4 large-3 columns">
         				<img src=<?php echo $record->post_image;?>>
         			</div>
         			<div class="small-12 medium-8 large-9 columns">
         				<p class="title"><?php echo $record->post_title;?></p>
         				<p class="description"><?php echo $record->post_description;?></p>
         				<div class="row">
         					<div class="small-12 medium-12 large-12 columns">
         						<ul class ="vertical medium-horizontal menu">
         							<li><?php echo anchor("dashboard/post/{$record->post_id}",'VIEW',['class'=>'menu-item']);?></li>
         							<li><?php echo anchor("dashboard/editPost/{$record->post_id}","EDIT",['class'=>'menu-item']);?>   </li>
         							<li><?php echo anchor("dashboard/deletePost/{$record->post_id}","DELETE",['class'=>'menu-item']);?></li>
         						</ul>
         					</div>
         				</div>
     </div>
    </div>
    <hr>
<?php endforeach;?>
<?php else: ?>
	<p>No Posts Found!</p>
<?php endif;?>
</div>
</div>
<?php include('footer.php');?>

