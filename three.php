<?php
include 'header.php';
?>
<div class="row mt-5">
    <input class="form-control col-md-6" id="input">
    <div class="col-md-6">
        <button class="btn btn-primary " onclick="three(document.getElementById('input').value)"> OK</button>
    </div>
</div>

</body>
<script src="entranceArr.js"></script>

<script>
    function three(value) {
        var entranceArr = entrance(value)[0].toString();
        var max = entranceArr[0];
        var min = entranceArr[0];
        for (var i = 0; i < entranceArr.length; i++) {
            if (max < entranceArr[i]) {
                max = entranceArr[i];
            }
            if (min > entranceArr[i]) {
                min = entranceArr[i];
            }
        }
        diff = max - min;
        alert(diff);
        location.reload();
    }
</script>
</html>

