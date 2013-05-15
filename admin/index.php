<?php
require_once('pre.php');
Output::set_title("Administration");
Output::add_script(SITE_LINK_REL."js/jquery-ui-1.8.17.custom.min.js");
Output::add_script(SITE_LINK_REL."js/bootstrap-popover.js");

MainTemplate::set_subtitle("View and edit configuration settings");

echo("<h3>Current settings:</h3>");

$locations = Config::get_locations();

echo "	<div class='accordion' id='accordion2'>";

foreach($locations as $location){
	echo "<div class='accordion-group'>
		<div class='accordion-heading'>
			<a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapse-".$location."'>
				Location ".$location."
			</a>
		</div>
		<div id='collapse-".$location."' class='accordion-body collapse'>
			<div class='accordion-inner'>
												<table class=\"table table-striped\">
									<thead>
										<tr>
											<th class=\"icon\"></th>
											<th class=\"title\">Setting</th>
											<th class=\"icon\">Value</th>
											<th class=\"icon\"></th>
										</tr>
									</thead>
									<tbody>";
						$settings = Config::get_by_location($location);
						$count = 1;
						foreach($settings as $setting){
									echo "<tr>
											<td>
												".$count."
											</td>
											<td>
												".$setting."
											</td>
											<td>
												<strong>".Config::get_param($setting, $location)."</strong> <br />
											</td>
											<td class=\"icon\">	
												<div class='modal'>
												  <!-- Button trigger modal -->
												  <a data-toggle='modal' href='#myModal' class='btn btn-primary btn-large'><span class='glyphicon glyphicon-edit'></span></a>

												  <!-- Modal -->
												  <div class='modal-dialog'>
												    <div class='modal-content'>
												      <div class='modal-header'>
												        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
												        <h4 class='modal-title'>Modal title</h4>
												      </div>
												      <div class='modal-body'>
												        ...
												      </div>
												      <div class='modal-footer'>
												        <a href='#' class='btn'>Close</a>
												        <a href='#' class='btn btn-primary'>Save changes</a>
												      </div>
												    </div>
												  </div>
												</div>	
											</td>
										</tr>";
										$count = $count + 1;
						}
							echo "		</tbody>
									</table>
			</div>
		</div>
	</div>";
} echo "</div>

<h2>Example of creating Modals with Twitter Bootstrap</h2>  
<div id='example' class='modal hide fade in' style='display: none; '>  
<div class='modal-header'>  
<a class='close' data-dismiss='modal'>×</a>  
<h3>This is a Modal Heading</h3>  
</div>  
<div class='modal-body'>  
<h4>Text in a modal</h4>  
<p>You can add some text here.</p>                
</div>  
<div class='modal-footer'>  
<a href='#' class='btn btn-success'>Call to action</a>  
<a href='#' class='btn' data-dismiss='modal'>Close</a>  
</div>  
</div>  
<p><a data-toggle='modal' href='#example' class='btn btn-primary btn-large'>Launch demo modal</a></p>  	";
?>