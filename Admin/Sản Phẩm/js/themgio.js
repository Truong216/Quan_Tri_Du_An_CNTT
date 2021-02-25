function tru(form) {
    a = eval(form.kq.value);
    if (a == 1) {
        form.kq.value = 1;
    } else {
        b = a - 1;

        form.kq.value = b;
    }
}

function cong(form) {
    a = eval(form.kq.value);
    b = a + 1;
    form.kq.value = b;
}

function chonmua(form) {
    d = eval(form.gia.value);
    e = eval(form.kq.value);
    c = b * e;
    form.thanhtien.value = (c + " " + "VNĐ");
    alert("Số tiền phải trả là : " + c + " " + "VNĐ", "Thanh Toán");
}