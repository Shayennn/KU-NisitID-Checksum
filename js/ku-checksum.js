function GetNisitIDChecksum(nisitid){
    if(typeof nisitid == 'string'){
        nisitid = parseInt(nisitid);
    }
    var id_len = Math.ceil(Math.log10(nisitid));
    var sumcheck = 0;
    var digit = 0;
    if(id_len > 10 || id_len < 9){
        return false;
    }
    if(id_len==10){
        nisitid = Math.floor(nisitid/10);
    }
    for(var i=9;i>=1;i--){
        digit = nisitid%10;
        nisitid = Math.floor(nisitid/10);
        sumcheck+=digit*i;
    }
    sumcheck%=11;
    sumcheck = (sumcheck==0)?1:(sumcheck%10);
    return sumcheck;
}

function VerifyNisitID(nisitid){
    if(typeof nisitid == 'string'){
        nisitid = parseInt(nisitid);
    }
    var id_len = Math.ceil(Math.log10(nisitid));
    if(id_len != 10){
        return false;
    }
    return ((nisitid%10)==GetNisitIDChecksum(nisitid));
}

