<?php 
include 'Template/Header.php' ;

$input1 = $_POST['input1'] ?? null;
$input2 = $_POST['input2'] ?? null;

?>

<h1>Powers</h1>
<p>Power two integers</p>

<form method="post">
    <div class="form-group row">
        <label class="col-2 col-form-label" for="Input1">Input 1</label>
        <div class="col-10">
            <input class="form-control" id="Input1" name="input1" value="0">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label" for="Input2">Input 2</label>
        <div class="col-10">
            <input class="form-control" id="Input2" name="input2" value="0">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-2 col-10">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </div>
</form>

<div class="row">
    <label class="col-2">Result</label>
    <div id="result" class="col-10">
    <?php
        if (isset($input1) || isset($input2)) 
        {
            echo pow($input1, $input2);
        }
        else 
        {
            echo "0";
        }
    ?>
    </div>
</div>

<?php 
 include 'Template/Footer.php' ; 
?>