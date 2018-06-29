$('#lijibanli').click(function () {
    checkPhone();
})
function checkPhone(){
    var phone =$('#phone').val();
    var name =$('#name').val();
    if (phone=='' || name=='') {
        alert('请输入!');
    }else if(!(/^1[34578]\d{9}$/.test(phone))){
        alert("手机号码有误，请重写");
        return false;
    }
}