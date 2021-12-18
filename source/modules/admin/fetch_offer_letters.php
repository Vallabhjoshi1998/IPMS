<?php include 'admin_dash_header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPMS - Offer Letters</title>

</head>

<body>
    <div class="row">
        <h1 class="col-xl-3">Offer Letters</h1>
    </div>

    <div class="box_search" style="margin-bottom: 78%;">
        <?php
        $path    = '../offer_letters/';
        $files = scandir($path);
        $files = array_diff(scandir($path), array('.', '..'));
        foreach ($files as $file) {
        ?>
            <div class="card border-left-primary shadow h-100 py-2" style="width: 50%; float: left;">
                <div class="card-body">
                    <div style="margin-left: 30%;">
                        <object data="../offer_letters/<?php echo $file; ?>" type="application/pdf" width="315" height="200">
                            alt : <a href="<?php $file ?>"></a>
                        </object>
                        <h6 id="h6_ele" style="text-align: justify;"><?php echo $file; ?></h6>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

</body>

</html>


<?php include 'admin_dash_footer.php'; ?>