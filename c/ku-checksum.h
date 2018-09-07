#ifndef _KUChecksum_h_
#define _KUChecksum_h_
#include<math.h>

    int GetNisitIDChecksum(long int nisitid){
        int id_len = ceil(log10(nisitid));
        int sumcheck = 0;
        int digit = 0;
        if(id_len > 10 || id_len < 9){
            return -1;
        }
        if(id_len==10){
            nisitid = floor(nisitid/10);
        }
        for(int i=9;i>=1;i--){
            digit = nisitid%10;
            nisitid = floor(nisitid/10);
            sumcheck+=digit*i;
        }
        sumcheck%=11;
        sumcheck = (sumcheck==0)?1:(sumcheck%10);
        return sumcheck;
    }

    int VerifyNisitID(long int nisitid){
        int id_len = ceil(log10(nisitid));
        if(id_len != 10){
            return 1;
        }
        return ((nisitid%10)==GetNisitIDChecksum(nisitid));
    }

#endif