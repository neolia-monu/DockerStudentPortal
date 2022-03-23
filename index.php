<?php
    require_once "database/conn.php";
    require_once 'header.php';


    // $usetname = ;
    $result = $crud->getUserforIndex($_SESSION['username']);

    // print_r($result);
?>

<style>
  .main-div{
    margin: 12px;
    display: flex;
    justify-content: center;
    width: 80%;
    align-items: center;
    background-color: white;
    /* border: 2px dotted green; */
  }

  .data-div{
    width: 80%;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 2px;
    justify-content: center;
    /* border: 2px solid blue; */
  }

  .user-data {
    /* border-top: 1px solid green; */
    border: 1px solid green;
    /* border-left: 1px solid green;
    border-right: 1px solid green;
    border-bottom: 1px solid green; */

    /* padding: 12px; */
    display: flex;
    width: 80%;
    align-items: center;
    justify-content: left;
    /* margin: 12px; */
    text-align: left;
  }

  .user-data p{
    /* border: 2px solid blue; */
    padding: 12px;
    width: 50%;
    margin: 8px;
  }
</style>

<main class="main-div">
  <div class="data-div">
    <div class="user-data">
      <p>Username</p> <p><?php echo $result['username'] ?></p>
    </div>
    <div class="user-data">
      <p>Enrolment Number </p><p><?php echo $_SESSION['username'] ?></p>
    </div>
    <div class="user-data">
      <p>Email </p><p><?php echo $result['email'] ?></p>
    </div>
    <div class="user-data">
      <p>Department </p><p> Computer Engineering</p>
    </div>
    <div class="user-data">
      <p>Semester </p><p> <?php echo $result['semester'] ?> </p>
    </div>
    <div class="user-data">
      <p>Gender </p><p> <?php echo $result['gender'] ?> </p>
    </div>
    <div class="user-data">
      <p>Phone Number </p><p> <?php echo $result['phone_no'] ?> </p>
    </div>
  </div>
</main>

</section>

<?php
  require_once 'footer.php';
?>
