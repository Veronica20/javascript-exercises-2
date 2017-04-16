var definitive = [];

function entrance(val) {
    input_value = (val.split(" ")).length == 1 ? val : val.split(" ");
    if (typeof input_value == 'string') {
        if (Number(input_value)) {
            definitive.push(Number(input_value));
        }
    } else if (typeof input_value == 'object') {
        input_value.forEach(function (element) {
            if (Number(element)) {
                definitive.push(Number(element));
            }
        });
    }
    document.getElementById('input').value = '';
    return definitive;
}