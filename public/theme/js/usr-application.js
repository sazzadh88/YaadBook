function displaynone_msg() {
    document.getElementById("msgshow").style.display = "none";
    document.getElementById("msgshow1").style.display = "none";
    return false;
}
function maxlength_textarea(textboxid,ml) {
    var maxLength = ml;
    var textLength = document.getElementById(textboxid.id).value.length;
    if (textLength > maxLength) {
        document.getElementById(textboxid.id).value = document.getElementById(textboxid.id).value.substring(0, ml);
    }
   // alert("okay");
}
$(document).ready(function () {
    $('.input-field').click(function () {
        $('.validate_span').fadeOut()
    });
    $('.validate').click(function () {
        $('.validate_span').fadeOut()
        $("#msgshow").css("display", "none");
    });
    $('.form-control').click(function () {
        $('.validate_span1').fadeOut()
    });

    //---------------validation start--------------------------------------------------------------------------------------------
    //start special charecter 
    $('.csSpecialchar').keyup(function () {
        var yourInput = $(this).val();
        re = /[`~!@#$%^&*()_|+\-=?;:'",<>\{\}\[\]\\\/]/gi;
        var isSplChar = re.test(yourInput);
        if (isSplChar) {
            var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",<>\{\}\[\]\\\/]/gi, '');
            $(this).val(no_spl_char);
        }
    });
    //end special charecter 
    // start space validation 
    $(".csSpace").on({
        keydown: function (e) {
            if (e.which === 32)
                return false;
        },
        change: function () {
            this.value = this.value.replace(/\s/g, "");
        }
    });   
});
