
<?php include 'monteCarlo.php'?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $newObj = new MonteCarlo();
      $newObj->getId();
      $newObj->getName();
      $newObj->getPlayed();
      $newObj->setPlayed(1,3);
      $newObj->setPlayed(2,2);
      $newObj->getPlayed();

    ?>
    <table border="2" bordercolor="green">
        <tr>
            <th>League Table
                <table border="2" bordercolor="blue">
                    <tr>
                        <td>Teams</th>
                        <td>PTS</th>
                        <td>P</th>
                        <td>W</th>
                        <td>D</th>
                        <td>L</th>
                        <td>GD</th>
                    </tr>
                    <tr>
                        <th>Chelsa</th>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th>Arsenal</th>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th>Liverpool</th>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th>Everton</th>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </table>
            </th>
            <th>
                Match Results
                <br><br>
                <b>Week 0 Match Result</b>
                <table border="2" bordercolor="blue">
                    <tr>
                        <th></th>
                        <td></td>
                        <th></th>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <th></th>
                    </tr>
                </table>
            </th>
            <th>
                Week 0 Predictions of Championships
                <table border="2" bordercolor="blue">
                    <tr>
                        <th>Chelsa </th>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th>Arsenal </th>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th>Liverpool </th>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th>Everton </th>
                        <td>0</td>
                    </tr>
                </table>
            </th>
        </tr>
        <tr>
            <td>
                <form>
                    <button type="playAll" name="playAll" value="playAll">Play All</button>
                    <button type="nextWeek" name="nextWeek" value="nextWeek">Next Week</button>
                </form>
            </td>
        </tr>
    </table>
  </body>
</html>
