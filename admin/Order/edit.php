<?php
$_id =$_GET['id'];
$conn =new PDO("mysql:host=localhost;dbname=ecommerce",'root','');
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$query="SELECT * FROM `orders` WHERE id = :id";
$stmt =$conn->prepare($query);
$stmt->bindParam('id',$_id);

$result =$stmt->execute();
$order = $stmt->fetch();





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit</title>
</head>
<body>
    

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                    <h1 class ="text-center mb-4"> Edit something </h1>
                        <form method ="post"action="update.php" enctype="multipart/form-data">
                            <div class="mb-3 row">
                                <label for="inputId" class="col-md-3 col-form-label">

                                
                                </label>
                                    <div class="col-md-9">
                                        <input type="hidden" class="form-control" id="inputId" name="id" value="<?=$order['id']?>">
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputId" class="col-md-3 col-form-label">

                                Poduct_ID
                                </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="inputProductID" name="product_id" value="<?=$order['product_id']?>">
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputId" class="col-md-3 col-form-label">

                                Quantity:
                                </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="inputQuantity" name="qty" value="<?=$order['qty']?>">
                                    </div>
                            </div>
                            <!-- <div class="mb-3 row">
                                <label for="inputId" class="col-md-3 col-form-label">

                                Pro MEssage:
                                </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="inputTitle" name="promotional_message" value="<?=$banner['promotional_message']?>">
                                    </div>
                            </div> -->
                            <div class="mb-3 row">
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                                </div>
                            </div>

                        </form>
            </div>
        </div>
    </div>
</section>

</body>
</html>