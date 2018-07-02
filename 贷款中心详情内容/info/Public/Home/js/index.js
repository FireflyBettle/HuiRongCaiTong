$('#lijibanli').click(function () {
    checkPhone();
})
function checkPhone(e){
    var e=e || event;
    var phone =$('#phone').val();
    var name =$('#name').val();
    if (name=='' && phone=='') {
        alert('请填写姓名、手机号');
        e.preventDefault();
    }else if (name=='') {
        alert('请填写姓名');
        e.preventDefault();
    }else if (phone=='') {
        alert('请填写手机号');
        e.preventDefault();
    } else if (!(/^1[34578]\d{9}$/.test(phone))) {
        alert("手机号码有误，请重写");
        e.preventDefault();
    }
}