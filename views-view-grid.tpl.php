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
      $arr = ["A"=>[], "B"=>[], "C"=>[], "D"=>[], "E"=>[], "F"=>[], "G"=>[], "H"=>[], "I"=>[], "J"=>[], "K"=>[], "L"=>[], "M"=>[], "N"=>[], "O"=>[], "P"=>[], "Q"=>[], "R"=>[], "S"=>[], "T"=>[], "U"=>[], "V"=>[], "W"=>[], "X"=>[], "Y"=>[], "Z"=>[]];

      foreach ($rows as $row_number => $columns){
        foreach ($columns as $column_number => $item){
          $html = htmlspecialchars($item);
          $inicial_f = explode("views-field-field-last-name", $html);
          $inicial = substr($inicial_f[1], 61, 1);

          $newItem = new Item($inicial, $item);

          switch ($inicial) {
            case "A":
                array_push($arr["A"], $newItem);
                break;
            case "B":
                array_push($arr["B"], $newItem);
                break;
            case "C":
                array_push($arr["C"], $newItem);
                break;
            case "D":
                array_push($arr["D"], $newItem);
                break;
            case "E":
                array_push($arr["E"], $newItem);
                break;
            case "F":
                array_push($arr["F"], $newItem);
                break;
            case "G":
                array_push($arr["G"], $newItem);
                break;
            case "H":
                array_push($arr["H"], $newItem);
                break;
            case "I":
                array_push($arr["I"], $newItem);
                break;
            case "J":
                array_push($arr["J"], $newItem);
                break;
            case "K":
                array_push($arr["K"], $newItem);
                break;
            case "L":
                array_push($arr["L"], $newItem);
                break;
            case "M":
                array_push($arr["M"], $newItem);
                break;
            case "N":
                array_push($arr["N"], $newItem);
                break;
            case "O":
                array_push($arr["O"], $newItem);
                break;
            case "P":
                array_push($arr["P"], $newItem);
                break;
            case "Q":
                array_push($arr["Q"], $newItem);
                break;
            case "R":
                array_push($arr["R"], $newItem);
                break;
            case "S":
                array_push($arr["S"], $newItem);
                break;
            case "T":
                array_push($arr["T"], $newItem);
                break;
            case "U":
                array_push($arr["U"], $newItem);
                break;
            case "V":
                array_push($arr["V"], $newItem);
                break;
            case "W":
                array_push($arr["W"], $newItem);
                break;
            case "X":
                array_push($arr["X"], $newItem);
                break;
            case "Y":
                array_push($arr["Y"], $newItem);
                break;
            case "Zwhe":
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
