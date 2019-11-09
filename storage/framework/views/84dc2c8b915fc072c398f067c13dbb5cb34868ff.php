<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<form method="post" action="/" enctype="multipart/form-data">
						<div class="col-md-3">
							<input class="form-control" type="text" name="search" placeholder="Search group name">
						</div>
						<div class="col-md-3">						
							<select name ="group_name" class="form-control">
								<option>select group name</option>
									<?php $__currentLoopData = $group_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option><?php echo e($value->type_name); ?></option>	
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>					
						</div>
						<div class="col-md-3">						
				            <input type='text' class="form-control" id='datetimepicker1' />
				    						   
						</div>
					</form>
				
					<hr>

					<h4>Recent Post Sent to Buffer</h4>

					<table class="table table-bordered"> 
						<thead> 
							<tr> 
								<th>Group Name</th> 
								<th>Group Type</th>
							    <th>Account Name</th>
								<th>Post Text</th>
								<th>Time</th>
								
							</tr> 
						</thead> 
						<tbody> 
							<?php $__currentLoopData = $list_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($value->group_name); ?></td>
									<td><?php echo e($value->type); ?></td>
									<td><?php echo e($value->account_name); ?></td>
									<td><?php echo e($value->text); ?></td>
									<td><?php echo e($value->created_at); ?></td>									
								</tr>							
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						 </tbody> 
					 </table>

					 
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>