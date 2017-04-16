<?php
include 'header.php';
?>

<div class="row mt-5">
    <input class="form-control col-md-6" id="input">
    <div class="col-md-6">
        <button class="btn btn-primary " onclick="one(document.getElementById('input').value)"> OK</button>
    </div>
</div>

</body>
<script src="entranceArr.js"></script>

<script>
    function one(value) {
        var entranceArr = entrance(value);
        var secondVal = entranceArr[1].toString();
        var missing = 0;

        for (var i = 0; i < secondVal.length; i++) {
            if (entranceArr[0] == secondVal[i]) {
                missing++;
                alert('Yes');
                break;
            }
        }
        if (missing == 0) {
            alert('No');
        }
        location.reload();
    }
</script>
</html>

