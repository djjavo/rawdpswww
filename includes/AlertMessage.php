<?php
class AlertMessage {
	public function basic($class="info",$text="",$title="",$close=true) {
		$return = "<div class=\"alert alert-".$class.($close? " fade in" : "")."\">";
		if($close) $return .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
		if($title) $return .= "<strong>".$title."</strong> ";
		$return .= $text;
		$return .= "</div>";
		return $return;
	}	

	public function block($class="info",$text="",$title="",$close=false) {
		$return = "<div class=\"alert-block alert-".$class.($close? " fade in" : "")."\">";
		if($close) $return .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
		if($title) $return .= "<strong>".$title."</strong> ";
		$return .= $text;
		$return .= "</div>";
		return $return;
	}
}
?>