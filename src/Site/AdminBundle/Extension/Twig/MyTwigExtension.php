<?php

namespace Site\AdminBundle\Extension\Twig;

use Symfony\Component\Locale\Locale;
use Symfony\Component\HttpFoundation\Request;
/**
 * Surcharge all filters
 */
class MyTwigExtension extends \Twig_Extension {

    /**
     * Get All Filters
     * @return type 
     */
    public function getFilters() {
        return array(
            'sexe' => new \Twig_Filter_Method($this, 'sexe'),
            'formule' => new \Twig_Filter_Method($this, 'formule'),
            'disponibilite' => new \Twig_Filter_Method($this, 'disponibilite'),
            'extras' => new \Twig_Filter_Method($this, 'extras'),
            'validate' => new \Twig_Filter_Method($this, 'validate'),
            'file_exist' => new \Twig_Filter_Method($this, 'file_exist'),
            'sizes' => new \Twig_Filter_Method($this, 'sizes'),
            'commat' => new \Twig_Filter_Method($this, 'split_commat'),
            'localeDate' => new \Twig_Filter_Function(
            ' Site\AdminBundle\Extension\Twig\MyTwigExtension::localeDateFilter'
            ),
            'created_ago' => new \Twig_Filter_Method($this, 'createdAgo'),
            'readmore' => new \Twig_Filter_Method($this, 'ReadMore', array('is_safe' => array('html'))),
            'textNoteComment' => new \Twig_Filter_Method($this, 'textNoteComment'),
            'displayHour' => new \Twig_Filter_Method($this, 'displayHour')
        );
    }

    /*     * *************************************** All Filters Functions************************************ */

    public function file_exist($file = null) {
        return file_exists($file);
    }

    public function validate($bool = false,$entity = null,$id) {
        $request = Request::createFromGlobals();
       $img = ($bool == true) ? "<a href='".$request->getBaseUrl()."/admin/".$entity."/activation/".$id."/0'><i class='icon-ok'></i></a>" : "<a href='".$request->getBaseUrl()."/admin/".$entity."/activation/".$id."/1'><i class='icon-remove'></i></a>";
       return $img;
    }

    public function sizes($picture = null,$size = 'medium') {
        $parts = explode('.', $picture);
        $name = $parts[count($parts)-2];
        $ext = $parts[count($parts)-1];
        return $name.'-'.$size.'.'.$ext;
    }

    public function split_commat($ch = null) {
        return explode(',', $ch);
    }

    public function sexe($sentence, $expr = null) {
        if ($expr == 'm') {
            return 'Mec';
        } else {
            return 'Nana';
        }
    }

    public function createdAgo(\DateTime $dateTime) {
        $delta = time() - $dateTime->getTimestamp();
        if ($delta < 0)
            throw new \Exception("createdAgo is unable to handle dates in the future");
        $duration = "";
        if ($delta < 60) {
// Seconds
        if ($delta < 60)
        {
        // Secondes
        $time = $delta;
        $duration = $time . " second" . (($time === 0 || $time > 1) ? "s" : "") . " ago";
        }
        } else if ($delta <= 3600) {
// Mins
            $time = floor($delta / 60);
            $duration = $time . " minute" . (($time > 1) ? "s" : "") . " ago";
        } else if ($delta <= 86400) { 
// Hours
                $time = floor($delta / 3600);
                $duration = $time . " hour" . (($time > 1) ? "s" : "") . " ago";
            } else {
// Days
                $time = floor($delta / 86400);
                $duration = $time . " day" . (($time > 1) ? "s" : "") . " ago";
            }
            return $duration;
        }

    public function formule($sentence) {
        if ($sentence != null) {
            return unserialize($sentence);
        }
    }

    public function ReadMore($string, $url) {
        $count = strpos($string, '<!-- more -->');

        if ($count === false) {
            return $string;
        } else {
            $text = substr($string, 0, $count);
            $string = $text . '<div class="readmore"><a href="' . $url . '">Read More</a></div>';
            return $string;
        }
    }

    public function disponibilite($sentence) {
        $dispos_array = explode(',', $sentence);
        $dispo_reel = array();
        if (count($dispos_array) > 0) {
            foreach ($dispos_array as $dispo) {
                $dispo = $dispo + 1;
                $dispo_reel[] = date("d/m/Y", strtotime("+" . $dispo . " day"));
            }
            return $dispo_reel;
        } else {
            return null;
        }
    }

    public function extras($sentence) {
        if ($sentence != null) {
            $extras_array = unserialize($sentence);


            return $extras_array;
        }
    }

    public static function localeDateFilter(
    $date, $dateType = 'medium', $timeType = 'none') {
        $values = array(
            'none' => \IntlDateFormatter::NONE,
            'short' => \IntlDateFormatter::SHORT,
            'medium' => \IntlDateFormatter::MEDIUM,
            'long' => \IntlDateFormatter::LONG,
            'full' => \IntlDateFormatter::FULL,
        );
        $dateFormater = \IntlDateFormatter::create(
                        \Locale::getDefault(), $values[$dateType], $values[$timeType]
        );

        return $dateFormater->format($date);
    }

    public function getName() {
        return 'my_twig_extension';
    }
    
    public function textNoteComment($rate)
    {
        $arrayNot = array('0'=>'Déçu', 
                                          '1'=>'M\'ouais',
                                            '2' =>  'Pas mal',
                                            '3' =>  'Réussi', 
                                            '4' =>'Comblé',
                                            '5' =>'Comblé');
        return $arrayNot[$rate];
    }
    
    public function displayHour($hour)
    {
        return $hour.'h00';
    }

}

?>
