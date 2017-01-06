<!DOCTYPE HTML>
<html>
<head>
<title>.:: TASTE & NAKED Upload ::.</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</head>
<body>
    <div class="containter" style="padding:30px;">
        <div class="row">
            <?=form_open_multipart("UPLOADIMAGE/upload") ?>
            <div class="col-sm-12">
                <input class="form-control" type="file" name="file_upload">
            </div>
            <div class="col-sm-12">&nbsp;</div>
            <div class="col-sm-12">
                <button type="submit" class="btn btn-success form-control">Upload</button>
            </div>
            <hr>
            <?=form_close() ?>
            <div class="col-sm-12">
                <h4>Your image link: </h4><br>
                <?php
                    if($fileName != "false"){
                        echo base_url()."assets/frontend/img/upload/".$fileName;
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>