<?php
class Form {
    var $fields = array();
    var $action;
    var $submit = "";
    var $jumField = 0;

    function __construct($action, $submit){
        $this->action = $action;
        $this->submit = $submit;
    }

    function displayForm(){
        echo "<form action='".$this->action."' method='post'>";
        echo "<table width='100%' border='0' cellspacing='5'>";
        for($i=0;$i<$this->jumField;$i++) {
            echo "<tr>
                    <td align='right' width='30%'>".$this->fields[$i]['label']."</td>
                    <td>".$this->generateField($this->fields[$i])."</td>
                  </tr>";
        }
        echo "<tr><td colspan='2'><input type='submit' name='tombol' value='".$this->submit."' ></td></tr>";
        echo "</table>";
        echo "</form>";
    }

    function addField($name, $label, $type = "text", $options = []){
        $this->fields[$this->jumField]['name'] = $name;
        $this->fields[$this->jumField]['label'] = $label;
        $this->fields[$this->jumField]['type'] = $type;
        $this->fields[$this->jumField]['options'] = $options;
        $this->jumField++;
    }

    private function generateField($field){
        $name = $field['name'];
        $type = $field['type'];
        $options = $field['options'];

        switch($type){
            case "text":
                return "<input type='text' name='$name' required>";
            case "password":
                return "<input type='password' name='$name' required>";
            case "radio":
                $html = "";
                foreach($options as $val => $label){
                    $html .= "<input type='radio' name='$name' value='$val'> $label ";
                }
                return $html;
            case "checkbox":
                $html = "";
                foreach($options as $val => $label){
                    $html .= "<input type='checkbox' name='{$name}[]' value='$val'> $label ";
                }
                return $html;
            case "select":
                $html = "<select name='$name'>";
                foreach($options as $val => $label){
                    $html .= "<option value='$val'>$label</option>";
                }
                $html .= "</select>";
                return $html;
            case "textarea":
                return "<textarea name='$name'></textarea>";
            default:
                return "<input type='text' name='$name'>";
        }
    }
}
?>
