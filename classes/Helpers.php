<?php
/**
 * Created by IntelliJ IDEA.
 * User: Didier
 * Date: 11/12/2017
 * Time: 9:14 PM
 */

abstract class Helpers
{
    public static function buildPrioritySelect(){
        $prioritiesList = Priority::getAllPriorities();

        $html = '<select name="prioritySelect" id="prioritySelect">';

        foreach ($prioritiesList as $priority){
            $html .= '<option value="'.$priority->getId().'">'.$priority->getName().'</option>';
        }

        $html .= '</select>';

        return $html;
    }

    public static function ChoosePriorityColorClass($priority){
        if($priority === 'Lowest'){
            return 'green-txt';
        }
        if($priority === 'Low'){
            return 'darkgreen-txt';
        }
        if ($priority === 'Middle'){
            return 'yellow-txt';
        }
        if($priority === 'High'){
            return 'orange-txt';
        }
        if($priority === 'Highest'){
            return 'darkred-txt';
        }
        if($priority === 'Extreme'){
            return 'red-txt';
        }
        return '';
    }
}