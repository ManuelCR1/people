<?php
/**
 * @file
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="contributors-container">
  <?php if (!empty($caption)) : ?>
    <caption><?php print $caption; ?></caption>
  <?php endif; ?>
    <?php
      class Item {
        public $f_letter;
        public $html;

        function __construct($f_letter, $html) {
          $this->f_letter = $f_letter;
          $this->html = $html;
        }
      }
      $arr = ["A"=>[], "B"=>[], "C"=>[], "D"=>[], "E"=>[], "F"=>[], "G"=>[], "H"=>[], "I"=>[], "J"=>[], "K"=>[], "L"=>[], "M"=>[], "N"=>[],
      "O"=>[], "P"=>[], "Q"=>[], "R"=>[], "S"=>[], "T"=>[], "U"=>[], "V"=>[], "W"=>[], "X"=>[], "Y"=>[], "Z"=>[]];

      foreach ($rows as $row_number => $columns){
        foreach ($columns as $column_number => $item){
          $name = substr($item, 105, 105);
          $inicial = substr($name, 0, 1);
          $newItem = new Item($inicial, $item);

          switch ($inicial) {
            case "a":
                array_push($arr["A"], $newItem);
                break;
            case "b":
                array_push($arr["B"], $newItem);
                break;
            case "c":
                array_push($arr["C"], $newItem);
                break;
            case "d":
                array_push($arr["D"], $newItem);
                break;
            case "e":
                array_push($arr["E"], $newItem);
                break;
            case "f":
                array_push($arr["F"], $newItem);
                break;
            case "g":
                array_push($arr["G"], $newItem);
                break;
            case "h":
                array_push($arr["H"], $newItem);
                break;
            case "i":
                array_push($arr["I"], $newItem);
                break;
            case "j":
                array_push($arr["J"], $newItem);
                break;
            case "k":
                array_push($arr["K"], $newItem);
                break;
            case "l":
                array_push($arr["L"], $newItem);
                break;
            case "m":
                array_push($arr["M"], $newItem);
                break;
            case "n":
                array_push($arr["N"], $newItem);
                break;
            case "o":
                array_push($arr["O"], $newItem);
                break;
            case "p":
                array_push($arr["P"], $newItem);
                break;
            case "q":
                array_push($arr["Q"], $newItem);
                break;
            case "r":
                array_push($arr["R"], $newItem);
                break;
            case "s":
                array_push($arr["S"], $newItem);
                break;
            case "t":
                array_push($arr["T"], $newItem);
                break;
            case "u":
                array_push($arr["U"], $newItem);
                break;
            case "v":
                array_push($arr["V"], $newItem);
                break;
            case "w":
                array_push($arr["W"], $newItem);
                break;
            case "x":
                array_push($arr["X"], $newItem);
                break;
            case "y":
                array_push($arr["Y"], $newItem);
                break;
            case "z":
                array_push($arr["Z"], $newItem);
                break;
          }
        };
      };

      function getContributors($arra){
        $ite = "";
        for ($i=0; $i <= sizeof($arra); $i++) {
          $ite = $ite . getString($arra[$i]->html);
        }
        return $ite;
      };

      function getString($strin) {
        $result = "";
        $result = $result . "<div class=contributor-item> $strin </div>";
        return $result;
      };

      foreach ($arr as $key => $value) {
        print "<div id=$key class=letter-container>" . getContributors($value) . "</div>";
      }
    ?>
</div>
