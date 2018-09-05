<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="POST" onsubmit="return SubmitCheck()">
            <label for="nisitid">รหัสนิสิต: </label>
            <input type="number" id="nisitid" name="nisitid">
            <button type="submit">Submit</button>
        </form>
<?php
require_once('../php/ku-checksum.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $data = ['valid'=>VerifyNisitID($_POST['nisitid']),'checksum'=>GetNisitIDChecksum($_POST['nisitid'])];
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}
?>
        <script src="../js/ku-checksum.js"></script>
        <script>
            function SubmitCheck(e){
                if(!VerifyNisitID(document.getElementById('nisitid').value)){
                    alert('Invalid NisitID.');
                    return false;
                }
                return true;
            }
        </script>
    </body>
</html>