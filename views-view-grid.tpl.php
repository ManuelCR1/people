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
  <?php if (!empty($caption)) : ?>
    <caption><?php print $caption; ?></caption>
  <?php endif; ?>
    <?php
    $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      if($actual_link == "https://www.edge.org/people") {
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
            $string = explode('views-field-field-last-name', $item);
            $result = $string[1];
            $lastName = substr($result, 37, 40);
            $inicial = substr($lastName, 0, 1);
            $newItem = new Item($inicial, $item);
            switch (strtolower($inicial)) {
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
          for ($i=0; $i < sizeof($arra); $i++) {
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

        <script>
          (function() {
            /*Sticky alphabet*/
            var alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
            window.addEventListener('scroll', function(e) {
              if (window.scrollY >= 280) {
                document.querySelector('#block-system-main .view-content .letter-container .contributor-item:first-child').classList.add("firstItemFix");
                document.getElementById("alphabet-list").classList.add("fix-alphabet");
              } else {
                document.querySelector('#block-system-main .view-content .letter-container .contributor-item:first-child').classList.remove("firstItemFix");
                document.getElementById("alphabet-list").classList.remove("fix-alphabet");
              }
            });


            /*Alphabet indexing*/
            setEvents(alphabet);
            function setEvents(alpha) {
              for (var i = 0; i < alpha.length; i++) {
                events(i);
                function events(index) {
                  document.getElementById(alphabet[index])
                  .addEventListener( "click", function() {
                    var alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
                    toggleStyles(alphabet[index], alphabet);
                  });
                }
              }
            };

            function toggleStyles(letterIndex, alphabet){
              for (var i = 0; i < alphabet.length; i++) {
                var letter = (alphabet[i].toUpperCase());
                document.getElementById(letter).classList.remove("invisible");
                document.getElementById(alphabet[i]).firstElementChild.classList.remove("visitedAnchor");
              }
              var index = alphabet.indexOf(letterIndex.toLowerCase());
              if (index > -1) {
                alphabet.splice(index, 1);
              }
              document.getElementById(letterIndex).firstElementChild.classList.add("visitedAnchor");
              window.addEventListener('scroll', function(e) {
                if (window.scrollY >= 280) {
                  document.getElementById(letterIndex.toUpperCase()).classList.add("firstItemFix");
                } else {
                  document.getElementById(letterIndex.toUpperCase()).classList.remove("firstItemFix");
                }
              });
              for (var i = 0; i < alphabet.length; i++) {
                eleme = document.getElementById(alphabet[i].toUpperCase()).classList.add("invisible");
              }
            }
          })();
        </script>
        <?php
      } else { ?>
        <?php if (!empty($title)) : ?>
        <h3><?php print $title; ?></h3>
        <?php endif; ?>
        <table class="<?php print $class; ?>"<?php print $attributes; ?>>
        <?php if (!empty($caption)) : ?>
        <caption><?php print $caption; ?></caption>
        <?php endif; ?>

        <tbody>
        <?php foreach ($rows as $row_number => $columns): ?>
        <tr <?php if ($row_classes[$row_number]) { print 'class="' . $row_classes[$row_number] .'"';  } ?>>
        <?php foreach ($columns as $column_number => $item): ?>
          <?php
            $class = "response-contribution";
            $isResponse = false;
            $anchor = strtolower(str_get_html($item)->find("a", 0)->innertext);
            if (trim($anchor) == "response") {
              $isResponse = true;
            }
           ?>
          <td <?php if($column_classes[$row_number][$column_number] && $isResponse == true) { print 'class="' . $column_classes[$row_number][$column_number] . ' ' . $class .'"';  } else {print 'class="' . $column_classes[$row_number][$column_number] .'"';} ?>>
            <?php print $item;?>
          </td>
        <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
      <?php }?>
