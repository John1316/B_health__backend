                <?php
                require_once('connection.php');
                session_start();
                
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    $_SESSION['playfield_id'] = $_GET['id'];
                    $sql = "select * from playfields where id = '$id'";
                    $result = $conn->query($sql) or die("failed to query".mysqli_error($conn));
                    $row = $result->fetch_assoc();
                }
                if(isset($_POST['order']))
                {
                    $hours = $_POST['hours']; 
                    $uprice = $_POST['uprice'];
                    $date = $_POST['date_reservation'];
                    $play_time = $_POST['playtime'];
                    $time = $_POST['time_reservation'];
                    $level = $_POST['level'];
                    $girl = $_POST['girl'];
                    $visa = sha1($_POST['visa']);
                        
                        $ins= "INSERT INTO reservation (playfield_id,users_id,hours,play_status,status,uprice,girl,age,date_reservation,time_reservation,visa) VALUES(".$_SESSION['playfield_id'].",".$_SESSION['users_id'].",'$hours','$play_time','pending','$uprice','$girl','$level','$date','$time','$visa')";
        
                        if(!mysqli_query($conn,$ins)){ 
                            die('Error:'. mysqli_error($conn));
                        } else {
                            $success_order="Your Reservation submited successfully";
                        }

                    
                }
                if(isset($_POST['addreview']))
                {
                    $scale = $_POST['selected_rating']; 
                    $review = $_POST['review'];
                    
                        $insert_review= "INSERT INTO review (playfield_id,users_id,scale,msg) VALUES(".$_SESSION['playfield_id'].",".$_SESSION['users_id'].",'$scale','$review')";
        
                        if(!mysqli_query($conn,$insert_review)){ 
                            die('Error:'. mysqli_error($conn));
                        } else {
                            $success_review="Your Review submited successfully";
                        }

                    
                }
                if(!isset($_SESSION['username'])){
                    echo " <script> alert('please sign in to Reserve'); </script>";
                    $disable = "disabled";
                }else{
                    $disable = "";
                }
                ?>
                
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <style>
            .mt-7{
                margin-top:7rem;
            }
            .checkout-details li{
                font-size: 20px;
            }
        </style>
        <title><?php echo $row['name']; ?> | Playfield</title>
    </head>
<body>

    <!--start navbar-->
    <?php include('includes/navbar.php'); ?>
	<!--end navbar-->
    

    <section class="playfield-details mt-7 mb-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <img src="images/<?php echo $row['image']; ?>" alt="">
                </div>  
                <div class="col-lg-6 col-12">
                    <form action="" method="post">                            
                        <div class="card my-3">
                            <div class="card-body">
                                <p class="card-title">Hours : 
                                        <select required name="hours" id="hours" class="form-control-sm float-right">
                                            <?php
                                                for ($hours = 1; $hours <= $row["hours"]; $hours++) {
                                                    echo "<option value='$hours'> $hours</option>";
                                                }
                                            ?>
                                        </select>
                                    </p>
                                <p class="card-title">Unit price : <span class="float-right" id="price"><?php echo $row["price"] ?></span></p>
                                <p class="card-title">current Hours: <span name="hours" class="float-right" id="cq"></span></p>
                                <p class="card-title">Commission <span name="hours" class="float-right" id="commission"></span></p>
                                <p class="card-title">Date : <input required class="float-right w-75" name="date_reservation" type="date"></p>
                                <div class="row no-gutters justify-content-between">
                                    <p>Status :</p>
                                    <p>
                                        <input class="" value="in team" name="playtime" type="radio" required="required" >
                                        <label for="status">in team</label>

                                        <input class="" value="alone" name="playtime" type="radio" required="required" >
                                        <label for="status">alone</label>
                                    </p>
                                </div>
                                <p class="card-title">Time : 
                                    <select required class="form-control-sm w-50 float-right" name="time_reservation" id="">
                                        
                                        <?php
                                        $timeslots = "SELECT * FROM time_slots ORDER by id ASC";
                                        $query = mysqli_query($conn,$timeslots) or die("Error:".mysqli_error($conn)) ;
                                        $result= mysqli_fetch_array($query);
                                        
                                        do{
                                        ?>
                                        <?php
                                            if ($result['value'] == 1) {
                                                $value = "";
                                            }
                                            else{
                                                $value = "d-none";
                                            }
                                        ?>
                                            <option class="<?php echo $value ?>" value='<?php echo $result['time']; ?>'><?php echo $result['time']; ?></option>";
                                        <?php
                                        }
                                        while($result=mysqli_fetch_array($query));
                                        ?>   
                                        
                                    </select>
                                </p>
                                <div class="row no-gutters align-items-center mt-4">
                                    <div class="col-lg-3 col-12">
                                        <p class="mb-0">Level:</p>
                                    </div>
                                    <div class="col-lg-9 col-12">
                                        <select name="level" class="form-control form-control-sm" id="">
                                            <option value="junior">Junior (7-11)</option>
                                            <option value="youth">youth(12-18)</option>
                                            <option value="adult">adult(18-35)</option>
                                            <option value="masters">masters(35+...)</option>
                                        </select>
                                    </div>
                                </div>

                                    <div class="row no-gutters justify-content-between mt-4">
                                        <p class="mb-0">Female :</p>
                                        <p class="mb-0">
                                            <input class="" value="yes" name="girl" type="radio" required="required" >
                                            <label for="girl">Yes</label>

                                            <input class="" value="no" name="girl" type="radio" required="required" >
                                            <label for="girl">No</label>
                                        </p>
                                    </div>

                                
                                    
                                
                                <div class="row mt-3">
                                    <div class="col-lg-2 col-12">
                                        <p>Visa :</p>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input type="text" class="form-control form-control-sm" name="visa" placeholder="Visa" required>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <input type="text" class="form-control form-control-sm" name="cvv" placeholder="cvv" required>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="card-title">Total price <span name="total" class="float-right" id="total"></span></h5>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                            <button <?php echo $disable ?> class="btn btn-main btn-block my-3" name="order" type="submit">Reserve</button>                        

                            <input type="hidden" name="uprice" value="<?php echo $row["price"] ?>">
                    </form>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-6 col-12 mt-3">
                    <h2 class="text-main">More details about this playfield</h2>
                    <ul class="list-unstyled">
                        <li class="fs-20">Name &rarr; <?php echo $row['name']; ?></li>
                        <li class="fs-20">Description &rarr;  <?php echo $row['des']; ?></li>
                        <li class="fs-20">Available hours &rarr; <?php echo $row['name']; ?></li>
                        <li class="fs-20">Price per hour &rarr; <?php echo $row['price']; ?></li>
                        <li class="fs-20">Location &rarr; <?php echo $row['location']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php if(isset($success_order)): ?>
    <div class="alert alert-success alert-dismissible m-auto my-3 w-75 fade show" role="alert">
        <strong><?= $success_order ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>

    

    <section class="reviews">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form method="post" action="" id="review_form">
                        <input type="hidden" name="product_id" value="<?php echo $_SESSION['playfield_id']; ?>">

                        <div class="form-group col-md-8 col-12" id="rating-ability-wrapper">
                            <label class="control-label" for="rating">
                                <span class="field-label-info"></span>
                                <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
                            </label>
                            <h2 class="bold rating-header" style="">
                                <span class="selected-rating">0</span><small> / 5</small>
                            </h2>
                            <button type="button" class="btnrating btn btn-default btn-lg" data-attr="1" id="rating-star-1">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btnrating btn btn-default btn-lg" data-attr="2" id="rating-star-2">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btnrating btn btn-default btn-lg" data-attr="3" id="rating-star-3">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btnrating btn btn-default btn-lg" data-attr="4" id="rating-star-4">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btnrating btn btn-default btn-lg" data-attr="5" id="rating-star-5">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </button>


                            <textarea class="form-control my-3" name="review" cols="10" rows="5" required placeholder="Give Your Feedback ..."></textarea>
                            <button <?php echo $disable ?>  type="submit" name="addreview" class="btn btn-main pull-right">add comment</button>
                        </div>



                    </form>
                </div>
                <div class="col-12">
                        <?php if(isset($success_review)): ?>
                        <div class="alert alert-success alert-dismissible m-auto my-3 w-75 fade show" role="alert">
                            <strong><?= $success_review ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="review_people my-5">
        <div class="container">
            <div class="row">
                <?php
                if(isset($_GET['id']))
                {
                    $playfield_id = $_GET['id'];
                    $sql = "select review.msg , review.scale , users.full_name FROM review INNER JOIN users on review.users_id = users.users_id WHERE playfield_id = '$playfield_id' ";
                    $result = $conn->query($sql) or die("failed to query".mysqli_error($conn));
                    while($row = $result->fetch_assoc()):
                    {
                        if ($row['scale'] == 1) {
                                                    $scale = '<i class="fas fa-star"></i>';
                                                } 
                                                else if($row['scale'] == 2) {
                                                    $scale = '
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    
                                                    ';
                                                }
                                                else if($row['scale'] == 3) {
                                                    $scale = '
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    ';
                                                }
                                                else if($row['scale'] == 4) {
                                                    $scale = '
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    ';
                                                }
                                                else if($row['scale'] == 5) {
                                                    $scale = '
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    ';
                                                }
                ?>
                <div class="col-lg-6 col-12 mb-3" >
                    <div class="toast p-4"style="box-shadow:0 0.25rem 0.75rem rgb(0 0 0 / 10%); border-radius:10px;"role="alert" aria-live="assertive" aria-atomic="true" >
                        <div class="toast-header row no-gutters justify-content-between align-items-center">
                            <strong class="mr-auto"><?php echo $row["full_name"]; ?></strong>
                            <small class="text-muted"><?php echo $scale ?></small>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <hr>
                        <div class="toast-body bg-secobdary">
                            <?php echo $row["msg"]; ?>
                        </div>
                    </div>
                    
                </div>
                <?php
                    }
                    endwhile;
                }
                ?>
            </div>
        </div>
    </section>

    <!--start footer-->
    <?php include('includes/footer.html'); ?>
	<!--end footer-->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <script>
                $(document).ready(function($){

                $(".btnrating").on('click',(function(e) {

                    var previous_value = $("#selected_rating").val();

                    var selected_value = $(this).attr("data-attr");
                    $("#selected_rating").val(selected_value);

                    $(".selected-rating").empty();
                    $(".selected-rating").html(selected_value);

                    for (i = 1; i <= selected_value; ++i) {
                        $("#rating-star-"+i).toggleClass('btn-main');
                        $("#rating-star-"+i).toggleClass('btn-default');
                    }

                    for (ix = 1; ix <= previous_value; ++ix) {
                        $("#rating-star-"+ix).toggleClass('btn-main');
                        $("#rating-star-"+ix).toggleClass('btn-default');
                    }

                }));


            });

    $(document).ready(function(){
        $('#hours').on('change',function(){
            let price = $('#price').text();
            let hours = $("#hours option:selected").val();
            let commision = 0.3 * (price * hours);
            $("#total").text((price * hours ) + commision);
            $("#cq").text(hours);
            $("#commission").text(commision);
            
        });
    });
    </script>
</body>
</html>