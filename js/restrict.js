function characterCheck(obj){
var regExp = /[ \{\}\[\]\/?.,;:|\)*~`!^\-_+┼<>@\#$%&\'\"\\\(\=]/gi; // 허용할 특수문자는 여기서 삭제하면 됨

// 지금은 띄어쓰기도 특수문자 처리됨 참고하셈
if( regExp.test(obj.value) ){
	alert("특수문자는 입력하실수 없습니다."); //안내 문구
	obj.value = obj.value.substring( 0 , obj.value.length - 1 ); // 입력한 특수문자 한자리 지움
	}
}

//숫자 입력 2자리로 제한
function maxLengthCheck(object){
    if (object.value.length > object.maxLength){
        object.value = object.value.slice(0, object.maxLength);
    }
}
