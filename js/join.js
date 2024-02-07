function clear() {
    var inputs = document.querySelectorAll('.inputfile');
    inputs.value = "";
}

function ready() {
    const i1 = document.getElementById("f-i-1");
    const i2 = document.getElementById("f-i-2");
    var inputs = document.querySelectorAll('.inputfile');
    Array.prototype.forEach.call(inputs, function (input) {
        var label = input.nextElementSibling,
            labelVal = label.innerHTML;

        input.addEventListener('change', function (e) {
            var fileName = '';
            if (this.files && this.files.length > 1)
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            else
                fileName = e.target.value.split('\\').pop();

            if (fileName) {
                label.querySelector('p').innerHTML = fileName;
                i1.style.display = "none";
                i2.style.display = "flex";
            }
            else {
                label.innerHTML = labelVal;
                i1.style.display = "none";
                i2.style.display = "flex";
            }
        });
    });
};

document.addEventListener("DOMContentLoaded", ready);