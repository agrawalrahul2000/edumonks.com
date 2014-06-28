<div class='myScholarshipsContent'>
	<ul class='tabMenu'>
		<li><b>Matched</b></li>
		<li><b>Won</b></li>
		<li><b>Applied</b></li>
		<li><b>Will Apply</b></li>
		<li><b>Might Apply</b></li>
		<li><b>Not Eligible</b></li>
		<li><b>Will Not Apply</b></li>
		<li><b>Didn't Win</b></li>
	</ul>
	
	<table>	
	  <tbody>
			<tr>
				<th><b>Name of Scholarship</b></th>
				<th><b>Benifit</b></th>
				<th><b>Deadline</b></th>
				<th><b>Status</b></th>
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
				<td>
                 <select>
						<option>Matched</option>
						<option>Won</option>
						<option>Applied</option>
						<option>Will Apply</option>
						<option>Might Apply</option>
						<option>Not Eligible</option>
						<option>Will Not Apply</option>
						<option>Didn't Win</option>
				</select></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
