<?php 
	/**
	* 
	*/
	class Former
	{
		var $method = "" ;
		var $action = "" ;

		function __construct($meth,$act)
		{
			$this->method = $meth;
			$this->action = $act;
		}
		#FORM INITIALIZE - Must Be Called
		public function initForm()
		{
			echo "<form method='".$this->method."' action='".$this->action."' enctype='multipart/form-data' > \n ";
		}

		public function closeForm()
		{
			echo "</form> \n";
		}

		#Label
		

		public function label($label,$class)
		{
			echo "<lable>".$label."</label> \n";
		}
		#///////////////////////////////////////

		//INPUT BEGINS HERE


		public function simpleInput($type,$name,$id,$class,$placeholder)
		{
			if (isset($_POST[$name])) {
				echo "<input type='".$type."' name='".$name."'  id='".$id."'  class='".$class."' required value='".$_POST[$name]."' />\n ";
			}
			elseif (isset($_GET[$name])) {
				echo "<input type='".$type."' name='".$name."'  id='".$id."'  class='".$class."' required value='".$_GET[$name]."' />\n ";
			}
			else
			{
				echo "<input type='".$type."' name='".$name."'  id='".$id."'  placeholder='".$placeholder."' required  class='".$class."' />\n ";
			}
		}

		public function divInput($label,$type,$name,$id,$class,$placeholder)
		{
			echo "<div class='form-group'> \n";
			echo "<lable>".$label."</label> \n";

			if (isset($_POST[$name])) {
				echo "<input type='".$type."' name='".$name."' id='".$id."'  class='".$class."' required value='".$_POST[$name]."' />\n ";
			}
			elseif (isset($_GET[$name])) {
				echo "<input type='".$type."' name='".$name."'  id='".$id."'  class='".$class."' required value='".$_GET[$name]."' />\n ";
			}
			else
			{
				echo "<input type='".$type."' name='".$name."'  id='".$id."'  placeholder='".$placeholder."' required  class='".$class."' />\n ";
			}

			echo "</div> \n";
		}

		public function divInputLength($label,$type,$name,$id,$class,$placeholder,$min,$max)
		{
			echo "<div class='form-group'> \n";
			echo "<lable>".$label."</label> \n";

			if (isset($_POST[$name])) {
				echo "<input type='".$type."' name='".$name."' minlength='".$min."' maxlength='".$max."' id='".$id."'  class='".$class."' required value='".$_POST[$name]."' />\n ";
			}
			elseif (isset($_GET[$name])) {
				echo "<input type='".$type."' name='".$name."'  minlength='".$min."' maxlength='".$max."' id='".$id."'  class='".$class."' required value='".$_GET[$name]."' />\n ";
			}
			else
			{
				echo "<input type='".$type."' name='".$name."'  minlength='".$min."' maxlength='".$max."' id='".$id."'  placeholder='".$placeholder."' required  class='".$class."' />\n ";
			}

			echo "</div> \n";
		}

		public function complexInputLength($type,$name,$id,$class,$placeholder,$min,$max)
		{
			if (isset($_POST[$name])) {
				echo "<input type='".$type."' name='".$name."' minlength='".$min."' maxlength='".$max."' id='".$id."'  class='".$class."' required value='".$_POST[$name]."' />\n ";
			}
			elseif (isset($_GET[$name])) {
				echo "<input type='".$type."' name='".$name."'  minlength='".$min."' maxlength='".$max."' id='".$id."'  class='".$class."' required value='".$_GET[$name]."' />\n ";
			}
			else
			{
				echo "<input type='".$type."' name='".$name."'  minlength='".$min."' maxlength='".$max."' id='".$id."'  placeholder='".$placeholder."' required  class='".$class."' />\n ";
			}

		}

		public function simpleInputReadOnly($type,$name,$id,$class,$placeholder,$value)
		{
			if (isset($_POST[$name])) {
				echo "<input type='".$type."' name='".$name."'  id='".$id."' readonly value='".$value."' class='".$class."' required value='".$_POST[$name]."' />\n ";
			}
			elseif (isset($_GET[$name])) {
				echo "<input type='".$type."' name='".$name."'  id='".$id."' readonly value='".$value."' class='".$class."' required value='".$_GET[$name]."' />\n ";
			}
			else
			{
				echo "<input type='".$type."' name='".$name."'  id='".$id."' readonly value='".$value."' placeholder='".$placeholder."' required  class='".$class."' />\n ";
			}
		}


		public function divInputReadOnly($label,$type,$name,$id,$class,$placeholder,$value)
		{
			echo "<div class='form-group'> \n";
			echo "<lable>".$label."</label> \n";

			if (isset($_POST[$name])) {
				echo "<input type='".$type."' name='".$name."' id='".$id."'  readonly value='".$value."'  class='".$class."' required value='".$_POST[$name]."' />\n ";
			}
			elseif (isset($_GET[$name])) {
				echo "<input type='".$type."' name='".$name."'  id='".$id."'  readonly value='".$value."'  class='".$class."' required value='".$_GET[$name]."' />\n ";
			}
			else
			{
				echo "<input type='".$type."' name='".$name."'  id='".$id."'  readonly value='".$value."'  placeholder='".$placeholder."' required  class='".$class."' />\n ";
			}

			echo "</div> \n";
		}


		//Input Ends Here



		//TEXTAREA BEGINS HERE
		
		public function simpleTextArea($rows,$name,$id,$class,$placeholder)
		{
			if (isset($_POST[$name])) {
				echo "<textarea rows='".$rows."' name='".$name."'  id='".$id."'  class='".$class."' required value='".$_POST[$name]."'></textarea> ";
			}
			elseif (isset($_GET[$name])) {
				echo "<textarea rows='".$rows."' name='".$name."'  id='".$id."'  class='".$class."' required value='".$_GET[$name]."'></textarea> ";
			}
			else
			{
				echo "<textarea rows='".$rows."' name='".$name."'  id='".$id."'  placeholder='".$placeholder."' required  class='".$class."'></textarea> ";
			}
		}

		public function divTextArea($label,$rows,$name,$id,$class,$placeholder)
		{
			echo "<div class='form-group'> \n";
			echo "<lable>".$label."</label> \n";

			if (isset($_POST[$name])) {
				echo "<textarea rows='".$rows."' name='".$name."' id='".$id."'  class='".$class."' required value='".$_POST[$name]."'></textarea> ";
			}
			elseif (isset($_GET[$name])) {
				echo "<textarea rows='".$rows."' name='".$name."'  id='".$id."'  class='".$class."' required value='".$_GET[$name]."'></textarea> ";
			}
			else
			{
				echo "<textarea rows='".$rows."' name='".$name."'  id='".$id."'  placeholder='".$placeholder."' required  class='".$class."'></textarea> ";
			}

			echo "</div> \n";
		}

		public function divTextAreaLength($label,$rows,$name,$id,$class,$placeholder,$min,$max)
		{
			echo "<div class='form-group'> \n";
			echo "<lable>".$label."</label> \n";

			if (isset($_POST[$name])) {
				echo "<textarea rows='".$rows."' name='".$name."' minlength='".$min."' maxlength='".$max."' id='".$id."'  class='".$class."' required value='".$_POST[$name]."'></textarea> ";
			}
			elseif (isset($_GET[$name])) {
				echo "<textarea rows='".$rows."' name='".$name."'  minlength='".$min."' maxlength='".$max."' id='".$id."'  class='".$class."' required value='".$_GET[$name]."'></textarea> ";
			}
			else
			{
				echo "<textarea rows='".$rows."' name='".$name."'  minlength='".$min."' maxlength='".$max."' id='".$id."'  placeholder='".$placeholder."' required  class='".$class."'></textarea> ";
			}

			echo "</div> \n";
		}

		public function complexTextAreaLength($rows,$name,$id,$class,$placeholder,$min,$max)
		{
			if (isset($_POST[$name])) {
				echo "<textarea rows='".$rows."' name='".$name."' minlength='".$min."' maxlength='".$max."' id='".$id."'  class='".$class."' required value='".$_POST[$name]."'></textarea> ";
			}
			elseif (isset($_GET[$name])) {
				echo "<textarea rows='".$rows."' name='".$name."'  minlength='".$min."' maxlength='".$max."' id='".$id."'  class='".$class."' required value='".$_GET[$name]."'></textarea> ";
			}
			else
			{
				echo "<textarea rows='".$rows."' name='".$name."'  minlength='".$min."' maxlength='".$max."' id='".$id."'  placeholder='".$placeholder."' required  class='".$class."'></textarea> ";
			}

		}

		public function simpleTextAreaReadOnly($rows,$name,$id,$class,$placeholder,$value)
		{
			if (isset($_POST[$name])) {
				echo "<textarea rows='".$rows."' name='".$name."'  id='".$id."' readonly value='".$value."' class='".$class."' required value='".$_POST[$name]."'></textarea> ";
			}
			elseif (isset($_GET[$name])) {
				echo "<textarea rows='".$rows."' name='".$name."'  id='".$id."' readonly value='".$value."' class='".$class."' required value='".$_GET[$name]."'></textarea> ";
			}
			else
			{
				echo "<textarea rows='".$rows."' name='".$name."'  id='".$id."' readonly value='".$value."' placeholder='".$placeholder."' required  class='".$class."'></textarea> ";
			}
		}


		public function divTextAreaReadOnly($label,$rows,$name,$id,$class,$placeholder,$value)
		{
			echo "<div class='form-group'> \n";
			echo "<lable>".$label."</label> \n";

			if (isset($_POST[$name])) {
				echo "<textarea rows='".$rows."' name='".$name."' id='".$id."'  readonly value='".$value."'  class='".$class."' required value='".$_POST[$name]."'></textarea> ";
			}
			elseif (isset($_GET[$name])) {
				echo "<textarea rows='".$rows."' name='".$name."'  id='".$id."'  readonly value='".$value."'  class='".$class."' required value='".$_GET[$name]."'></textarea> ";
			}
			else
			{
				echo "<textarea rows='".$rows."' name='".$name."'  id='".$id."'  readonly value='".$value."'  placeholder='".$placeholder."' required  class='".$class."'></textarea> ";
			}

			echo "</div> \n";
		}


		//TEXTAREA Ends Here


		//SELECT BEGINS HERE

		public function openDivSelect($label,$name,$id,$class)
		{
			echo "<div class='form-group'> \n";
			echo "<lable>".$label."</label> \n";
			echo "<select name='".$name."'  id='".$id."'  class='".$class."' required  >";
		}

		public function openSelect($name,$id,$class)
		{
			echo "<select name='".$name."'  id='".$id."'  class='".$class."' required  >";
		}

		public function openMultiSelect($name,$id,$class)
		{
			echo "<select name='".$name."' multiple  id='".$id."'  class='".$class."' required  >";
		}

		public function optionDisabled($text)
		{
			echo "<option disabled>".$text."</option> \n";
		}

		public function option($text,$value)
		{
			echo "<option value='".$value."'>".$text."</option> \n";
		}

		public function closeSelect($name,$id,$class)
		{
			echo "</select>";
		}

		public function closeDivSelect($name,$id,$class)
		{
			echo "</select> </div>";
		}

		//SELECT Ends Here


		//datalist BEGINS HERE

		public function openDatalist($id)
		{
			echo "<datalist id='".$id."' >";
		}

		public function optionData($text,$value)
		{
			echo "<option value='".$value."' />\n";
		}

		public function closeDatalist($name,$id,$class)
		{
			echo "</datalist>";
		}


		//datalist Ends Here


		//Button BEGINS HERE
		public function button($name,$id,$class,$text)
		{
			echo "<button id='".$id."' name='".$name."' class='".$class."' >".$text."</button> \n";
		}


		//Button Ends Here
	}
?>


