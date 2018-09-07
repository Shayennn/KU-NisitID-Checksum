#include "ku-checksum.h"
#include<stdio.h>

int main(){
    long nisitid = 0;

    printf("Enter NisitID: ");
    scanf("%ld",&nisitid);

    int verify = VerifyNisitID(nisitid);
    int checksum = GetNisitIDChecksum(nisitid);

    printf("Verify: ");
    if(verify==1){
        printf("True\n");
    }else{
        printf("False\n");
    }

    printf("Checksum: %d\n",checksum);

    return 1;
}
