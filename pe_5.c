#include<stdio.h>
#define TRUE 1
#define FALSE 0
/*Question 5
 *2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
 *What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
*/
int main(){
	int i, j, found, div;
	i = 20;
	found = FALSE;
	while(!found){
		div = TRUE;
		for(j = 19; j >= 2 && div == TRUE; --j){
			if(i % j != 0)
				div = FALSE;
		}
		if(div){
			printf("%d\n", i);
			found = TRUE;
		}	
		i+=20;
	}
}
