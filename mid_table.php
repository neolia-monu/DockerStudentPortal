<?php

  require_once "database/conn.php";
  require_once 'header.php';

  $result = $table->getOne();


  // print_r($result);

 ?>
<style>
  main{
    margin: 12px;
    /* border: 2px solid green; */
    width: 80%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: white;
  }

  table, tr, td {
    border: 1px solid black;
    width: 70%;
    padding: 15px;
  }

  .time-table caption {
    font-size: 22px;
    margin: 12px;
    /* border: 2px solid green; */
    padding: 12px;
  }
</style>

<main>

  <table class="time-table" style="border-collapse: collapse">
    <caption>MID TimeTable</caption>
    <tr>
      <td> </td>
      <td>Mon</td>
      <td>Tue</td>
      <td>Wed</td>
      <td>Thru</td>
      <td>Fri</td>
      <td>Sat</td>
    </tr>
    <?php
      while ($row = $result->fetch()){
    ?>
    <tr>
      <td> <?php echo $row[1] ?></td>
      <td> <?php echo $row[2] ?></td>
      <td> <?php echo $row[3] ?></td>
      <td> <?php echo $row[4] ?></td>
      <td> <?php echo $row[5] ?></td>
      <td> <?php echo $row[6] ?></td>
      <td> <?php echo $row[7] ?></td>
    </tr>
  <?php } ?>
  </table>
</main>

</section>

<?php
  require_once 'footer.php';
 ?>
