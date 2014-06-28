<div class="allContent">
	<table>
		<tbody>
			<tr>
				<th><b>Name of Scholarship</b></th>
				<th><b>Applicable For</b></th>
				<th><b>Award</b></th>
				<th><b>Deadline</b></th>
			</tr>
			<?php $scholarships = array(0 => array(), 1 => array());?>
			<?php foreach($scholarships as $key => $value) { ?>
			<?php  if(($key % 2) == 0) { ?>
			<tr class="even">
			<?php  } else { ?>
			<tr class="odd">
			<?php } ?>
				<td><?php if(isset($value[0])) { echo $value[0]; } else { echo "-";} ;?>
				</td>
				<td><?php if(isset($value[1])) { echo $value[1]; } else { echo "-";} ;?>
				</td>
				<td><?php if(isset($value[2])) { echo $value[2]; } else { echo "-";} ;?>
				</td>
				<td><?php if(isset($value[3])) { echo $value[3]; } else { echo "-";} ;?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
