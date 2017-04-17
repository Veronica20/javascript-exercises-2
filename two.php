<?php
include 'header.php';
?>
<div class="row mt-5">
    <input class="form-control col-md-6" id="input">
    <div class="col-md-6">
        <button class="btn btn-primary " onclick="two(document.getElementById('input').value)"> OK</button>
    </div>
</div>

</body>
<script src="entranceArr.js"></script>

<script>
    function two(value) {
        var entranceArr = entrance(value)[0].toString();
        newArr =  entranceArr[entranceArr.length -1];
        for(var i=1 ; i < entranceArr.length-1 ;  i++){
            newArr += entranceArr[i]
        }
        newArr += entranceArr[0];
        alert(newArr);
        location.reload();
    }
</script>
</html>

