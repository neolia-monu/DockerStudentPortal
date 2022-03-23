<?php

  require_once "database/conn.php";
  require_once 'header.php';

  $result = $table->getAll();

?>
    <style>

      .main{
        display: flex;
        width: 80%;
        justify-content: center;
        background-color: white;
        /* border: 2px dotted green; */
        margin: 12px;
        align-items: center;
      }

      .table-1{
        /* border: 2px solid green; */
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        padding: 12px;
      }

      .time-table {
        border: 2px solid black;
        border-collapse: collapse;
        width: 90%;
      }

      .time-table caption {
        font-size: 22px;
        padding: 12px;
      }

      .time-table td, th {
        border: 2px solid black;
        text-align: center;
        padding: 12px;
      }

      tr:nth-child(even) {
        background-color: #dddddd;
      }

    </style>


    <div class="main">

      <div class="table-1">
      <table class="time-table">
        <caption>Time Table</caption>
        <tr>
          <th></th>
          <th>MON</th>
          <th>TUE</th>
          <th>WED</th>
          <th>THU</th>
          <th>FRI</th>
          <th>SAT</th>
        </tr>

        <!-- <caption>Time Table</caption> -->


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
      </div>
    </div>
  </section>

<?php
  require_once 'footer.php';
?>
