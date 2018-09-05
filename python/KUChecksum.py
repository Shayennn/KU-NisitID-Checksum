import math

def GetNisitIDChecksum(nisitid):
    if type(nisitid) == str:
        nisitid = int(nisitid)
    id_len = math.ceil(math.log10(nisitid))
    sumcheck = 0
    digit = 0
    if id_len > 10 or id_len < 9:
        return False
    if id_len==10:
        nisitid = nisitid//10
    for i in range(9,0,-1):
        digit = nisitid%10
        nisitid = nisitid//10
        sumcheck+=digit*i
    sumcheck%=11
    if sumcheck==0:
        sumcheck=1
    else:
        sumcheck%=10
    return sumcheck

def VerifyNisitID(nisitid):
    if type(nisitid) == str:
        nisitid = int(nisitid)
    id_len = math.ceil(math.log10(nisitid))
    if id_len != 10:
        return False
    return ((nisitid%10)==GetNisitIDChecksum(nisitid))

